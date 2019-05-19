<html>

<body>

<?php



	$con = new mysqli("localhost","root","","namitadb");

	$qry = "Select * from Register;";


	$result = $con->query($qry);

	if($result->num_rows > 0)
	{


			echo("<h1 align=center style='color:blue;'>Reistration Details</h1>");

			echo("<table align=center width=50% border=2  cellspacing=0 cellpadding=5>");
			echo("<tr style='font-size:23;color:red;'><td>Username</td><td>Contact</td><td>State</td><td>City</td><td>email</td><td>Update</td><td>Delete</td></tr>");

			while($row = $result->fetch_object())
			echo("<tr><td>".$row->Username."</td><td>".$row->Contact."</td><td>".$row->State."</td><td>".$row->City."</td><td>".$row->email."</td><td><a href=update.php?username=$username</a>update</td><td><a href=delete.php?username=$username</a>delete</td></tr>");
                             
                             echo("</table>");
                             }
else
         echo("<h2>Data not found</h2>");

?>
</body>

</html>