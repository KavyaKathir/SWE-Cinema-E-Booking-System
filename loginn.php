<?php
   require("./login.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .error-message {
            text-align: center;
            font-size: 24px;
            color: red;
            margin-top: 20px; /* Adjust as needed */
        }
        .forget-password-link {
            color: blue;
            text-decoration: underline;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <nav>
        <ul class="nav">
            <li><a href="/Frontend/homepage.php">Home</a></li>
            <li><a href="/Frontend/search.html">Browse Movies</a></li>
          </ul>
    </nav>
    <form class="login" method="post" action="../login.php">
        <h1> Login </h1>

        <label for="emailLogin">Email: </label>
        <input type="email" id="emailLogin" name="email" placeholder="firstlast@gmail.com">

        <label for="pwdLogin">Password: </label>

        <input type="password" id="pwdLogin" name="password">
        <input type="checkbox" id="pwdViewLogin">Show Password


        <br/> <br/>
        <label for="forgotpassword"><a href="forgot.php">Forgot password?</a></label>
        
        <br/> <br/>
        <input type="checkbox" id="remember" name="remember"> <!-- Remember Me checkbox --> <label for="remember">Remember Me</label> 

        <input type="submit" id="submitLogin" name="login" value="Login">
        <?php
        
        // Display error message if exists
        if (isset($_SESSION['error'])) {
            echo '<div class="error-message">' . $_SESSION['error'] . '</div>';
            unset($_SESSION['error']); // Clear the error message after displaying it
        }
        ?>
       
    </form>

    <div class="signin">
        <p>Don't have an account? <a href="creaAccount.html">Create Account</a></p>
    </div>

    <script src="login.js"></script>
</body>
</html>
