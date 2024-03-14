<?php

// Check if the session is active
if (isset($_SESSION)) {
    // Unset all of the session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();
}


// Redirect to the login page with a message in the URL
header("Location: logout_message.html"); // Append "?logout_msg=1" to indicate successful logout
exit();
?>
