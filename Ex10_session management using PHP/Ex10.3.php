<?php
session_start(); // Start the session
session_destroy(); // Destroy the session
header("Location: Ex10.1.php"); // Redirect to login page
exit();
?>
