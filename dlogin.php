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
include 'session.php';
$usernamePost = $_POST["username"];
$passwordPost = $_POST["password"];
echo $usernamePost;
echo$passwordPost;

//sql query to fetch details
$sql = "SELECT * FROM adminrole WHERE username='"."$usernamePost"."';";
$result = mysqli_query($conn, $sql);

//passing the query and it will return a object

while ($row = mysqli_fetch_array ($result)) {
    $usernameSql =$row['username'];
    $passwordSql = $row['password'];
    $roleSql =$row['role'];
}

if($usernamePost == $usernameSql && $passwordPost == $passwordSql) 
{
	if ($roleSql == "user") {
        $_SESSION["role"] = "$roleSql";
        header('Location: duser.php');
    }
    elseif ($roleSql == "admin") {
        $_SESSION["role"] = "$roleSql";
        header('Location: dadmin.php');
    }
}
else 
{
	echo "failed";
	//header('Location: Data.html');
}
?>
