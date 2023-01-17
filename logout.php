<?php
session_start();
unset($user["email"]);
unset($_SESSION["user_info"]);
header("Location:login.php");
?>