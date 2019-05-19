<?php

echo("<ul class='right chevron'>");
echo("<li><a href='index.php'>Home</a></li>");



	echo("<li><a>Search</a>");
	echo("<ul>");
	echo("<li><a href=Tname.php>Search user</a></li>");
	echo("</ul>");
	echo("</li>");



if(isset($_SESSION["role"]))
{
	echo("<li><a>Settings</a>");
	echo("<ul>");
	echo("<li><a href=update.php>Update Profile </a></li>");
	echo("<li><a href=delete.php>Close Account</a></li>");
	echo("</ul>");
	echo("</li>");
}



echo("</ul>");


?>