<?php
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the main page
header("Location: /std/Knorr-clone-main/index1.php");
exit();
?>