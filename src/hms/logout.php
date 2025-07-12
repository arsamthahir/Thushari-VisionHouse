<?php
session_start();
include('include/config.php');

// Check if user is logged in
if (isset($_SESSION['id'])) {
    // Update logout time
    date_default_timezone_set('Asia/Kolkata');
    $ldate = date('Y-m-d H:i:s');
    
    // Use prepared statement for security
    $stmt = mysqli_prepare($con, "UPDATE userlog SET logout = ? WHERE uid = ? ORDER BY id DESC LIMIT 1");
    mysqli_stmt_bind_param($stmt, "si", $ldate, $_SESSION['id']);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

// Clear all session variables
session_unset();
// Destroy the session
session_destroy();

// Clear session cookie
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time()-3600, '/');
}

// Set logout message in a new session
session_start();
$_SESSION['errmsg'] = "You have successfully logged out";

// Redirect to login page using proper path
header("Location: ../../public/login.php");
exit();
?>
