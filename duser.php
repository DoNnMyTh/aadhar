<!DOCTYPE html>
<html lang='en-US'>
  <head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <title>Aadhar+</title>
    <link rel='stylesheet' href='css/components.css'>
    <link rel='stylesheet' href='css/icons.css'>
    <link rel='stylesheet' href='css/responsee.css'>
    <link rel='stylesheet' href='owl-carousel/owl.carousel.css'>
    <link rel='stylesheet' href='owl-carousel/owl.theme.css'>
    <link rel='stylesheet' href='css/template-style.css'>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="jquery.collapse.js"></script>

    <script type='text/javascript' src='js/jquery-1.8.3.min.js'></script>
    <!--<script type='text/javascript' src='js/jquery-ui.min.js'></script>-->

  </head>

  <body class='size-1140'>
    <!-- HEADER -->
<header role='banner' class='position-absolute' style='background-color:black;'>
      <!-- Top Navigation -->
      <nav class='background-transparent background-transparent-hightlight full-width sticky'>
        <div class='s-12 l-2'>
          <a href='index.php' class='logo'>
            <!-- Logo White Version -->
            <img class='logo-white' src='img/logo1.png' alt=''>
            <!-- Logo Dark Version -->
            <img class='logo-dark' src='img/logo-dark1.png' alt=''>
          </a>
        </div>
        <div class='top-nav s-12 l-10'>
          <p class='nav-text'></p>

			<?php include('menu.php'); ?>
        </div>
      </nav>
    </header>
    <br><br><br><br><br><br>
    <?php
session_start();
if($_SESSION["role"] == "user")
{
$user = $_SESSION["aadhar"];
$con = new mysqli("localhost","root","","aadhar");

	$qry = "Select * from dl where aadhar_no='$user';";
	$result = $con->query($qry);
	if($result->num_rows >0)
	{
			echo("<h1 align=center style='color:yellow;'>Driving License Details</h1>");
			while($row = $result->fetch_object())
			echo("<tr><td><h2>NAME:   ".$row->name."</td>
			<br><td>LICENSE NO:   ".$row->DLN."</td>
			<br><td>VALIDITY FROM:     ".$row->from."</td>
			<br><td>VALIDITY TO:  ".$row->to."</td>
			<br><td>GENDER:    ".$row->sex."</td>
			<br><td>DATE OF BIRTH:    ".$row->DOB."</td>
			<br><td>EYE:   ".$row->eyes."</td>
			<br><td>HEIGHT:    ".$row->height."</td>
			<br><td>ADDRESS:    ".$row->address."</td>
			<br><td>CATEGORY:    ".$row->category."</td></h2>
      </tr>");
      
      echo("<h1 align=center style='color:black;'>User Details</h1>");
			while($row = $result->fetch_object())
			echo("<tr><td><h2 style='color:black'>NAME:  ".$row->name."</td>
			<br><td>DATE OF BIRTH:  ".$row->dob."</td>
			<br><td>GENDER:  ".$row->gender."</td>
			<br><td>CONTACT:  ".$row->phone."</td>
			<br><td>EMAIL:  ".$row->email."</td>
			<br><td>ADDRESS:  ".$row->address."</td></h2></tr>");
	}
	else{
    echo("<h2>Aadhar not registered</h2>");
    
  }
}
?>
</p></div>
</div>
        </header>
</div>
    <script type='text/javascript' src='js/responsee.js'></script>
    <script type='text/javascript' src='owl-carousel/owl.carousel.js'></script>
    <script type='text/javascript' src='js/template-scripts.js'></script>


</body>
</html>
