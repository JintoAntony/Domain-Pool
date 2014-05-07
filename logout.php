<?php

// Inialize session
session_start();

// Delete certain session
//unset($_SESSION['username']);

unset($_SESSION['user_id']);
unset($_SESSION['user_name']);
unset($_SESSION['user_username']);
unset($_SESSION['user_role']);
unset($_SESSION['user']);
// Delete all session variables
// session_destroy();

// Jump to login page
header('Location: index.php');

?>