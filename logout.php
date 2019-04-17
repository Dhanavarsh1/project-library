<?php
session_start();
unset($_SESSION["username"]);
echo "<h1>You have been logged out</h1>";
header("Location:thankyou.php");

?>
