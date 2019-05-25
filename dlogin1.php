<?php
include 'dbCon.php';
include 'session.php';
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
	if ($roleSql == "user") {
        header('duser.php');
    }
    elseif ($roleSql == "admin") {
        header('dadmin.php');
    }
}
else 
{
	echo "failed";
	//header('Location: Data.html');
}
?>
