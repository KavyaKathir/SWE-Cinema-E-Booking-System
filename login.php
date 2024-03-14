<?php
// Start the session
session_start();
function generateToken() {
    return bin2hex(random_bytes(32));
}
// Check if the form is submitted
if(isset($_POST['login'])) {
    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rememberMe = isset($_POST['remember']) ? true : false;
    // Connect to your database - replace with your actual database credentials
    $username = "root";
    $password_db = "";
    $database = "home";

    try {
        // Create connection
        $conn = new PDO("mysql:host=localhost;dbname=$database", $username, $password_db);

        // Set PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare SQL statement with named placeholders
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");

        // Bind parameters
        $stmt->bindParam(':email', $email);

        // Execute query
        $stmt->execute();

        // Check if user exists
        if ($stmt->rowCount() == 1) {
            // Fetch user details
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            // Verify password
            if ($password == $row['password']) {
                // Set session variables
                $_SESSION['email'] = $email;
                $_SESSION['userType'] = $row['userType']; // Assuming there's a 'userType' column in your database
                
                // Redirect based on role
                if ($_SESSION['userType'] == 2) {
                    unset($_SESSION['user_id']);
                    header('Location: /Frontend/admin/managemovies.html');
                    exit();
                } 
                else
                {
                    $_SESSION['user_id']=$row['userID'];
                    header('Location: /Frontend/homepage.php');
                    exit();
                }
            } else {
            $_SESSION['error'] = "Incorrect password!";
            header('Location: /loginn.php');
            exit();
        }
    } else {
        $_SESSION['error'] = "User not found!";
        header('Location: ./loginn.php');
        exit();
    }
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    // Close connection
    
    $conn = null;
    if ($rememberMe) {
        $token = generateToken();
        // Set cookie to remember the user
        setcookie('remember_token', $token, time() + (86400 * 30), '/'); // Cookie expires in 30 days (86400 seconds = 1 day)
        // Store the token in the database (assuming you have a field for this)
        // You would need to implement this part to securely store the token and associate it with the user
    }
}

// Forget password functionality
if(isset($_POST['forgetPassword'])) {
    // This is a placeholder. Implement your forget password logic here.
    echo "Forget password functionality triggered!";
}
?>
