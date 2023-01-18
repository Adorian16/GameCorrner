<?php
    session_start();
    // Destroy session
    session_unset();    
    if(session_destroy()) {
        // Redirecting To Home Page
        header("Location: index.php");
    }
?>