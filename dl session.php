<?php
$username = $_POST["username"];
$password = $_POST["password"];
$u = "dl admin";
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
