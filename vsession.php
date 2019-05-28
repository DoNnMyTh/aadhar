<?php

/*
all settings present in dbCon.php;
$servername = 'localhost';
$username = "root";
$password = "";
$dbname = "admin";
table name = adminRole;
table must have columns username , password , role;
connection variable $conn;
and make username as primary key


*/

//post data and included files
include 'dbCon.php';
$usernamePost = $_POST["username"];
$passwordPost = $_POST["password"];

//sql query to fetch details
$sql = "SELECT * FROM adminRole WHERE username='"."$username"."';";
$result = mysqli_query($conn, $sql);

//passing the query and it will return a object
$value = mysql_fetch_object($result);

$usernameSql = $value->username;
$passwordSql = $value->password;
$roleSql = $value->role;


if($usernamePost == $usernameSql && $passwordPost == $passwordSql) 
{
	print "Access granted";
	session_start();
	$_SESSION["role"] = $roleSql;
	//header('Location:menu.php');
}
else 
{
	echo "failed";
	//header('Location: Data.html');
}
?>
