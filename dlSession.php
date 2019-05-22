<?php
$username = $_POST["username"];
$username = trim($username);
$password = $_POST["password"];
$password = trim($password);
$u = "dladmin";
$p = "car123";
if($username == $u && $password == $p) 
{
	print "Access granted";
	session_start();
	$_SESSION["Basic details, dl"] = 'true';
	header('Location:menu.php');
}
else 
{
	print $username;
	print $password;
	header('Location: Data.html');
}
?>
