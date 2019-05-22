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

<!-- PREMIUM FEATURES BUTTON -->
  	<a target='_blank' class='hide-s'style='position:fixed;top:120px;right:-14px;z-index:10;'><img src='img/premium-features.png' alt=''></a>
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

    <!-- MAIN -->
    <main role="main">
      <!-- Content -->
      <article>
        <header class="top"> <style>
        .top{
        background-image:url("img/header1.png");
        }</style>
          <div class="line">
          <br>
          <br>
            <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1">Safe Search...</h1>
            <p class="margin-bottom-0 text-size-16"><br>

<form action=Tname.php method=get>
<b>Enter User Name : </b><input type=text name=name value='<?php if(isset($_REQUEST['name'])) echo($_REQUEST['name']); ?>'>
<br><br><input type=submit value=Search name=go />
<br><br>
<br><br>
</form>
<?php
session_start();
$_SESSION['connect']=0;
if(isset($_REQUEST["go"]))
{
$_session['connect']=1;
$user= $_REQUEST["name"];
$con = new mysqli("localhost","root","","aadhar");
	$qry = "Select * from user where name='$user';";
	$result = $con->query($qry);
	if($result->num_rows >0)
	{
			echo("<h1 align=center style='color:black;'>User Details</h1>");
			while($row = $result->fetch_object())
			echo("<tr><td><h2 style='color:black'>NAME:  ".$row->name."</td>
			<br><td>DATE OF BIRTH:  ".$row->dob."</td>
			<br><td>GENDER:  ".$row->gender."</td>
			<br><td>CONTACT:  ".$row->phone."</td>
			<br><td>EMAIL:  ".$row->email."</td>
			<br><td>ADDRESS:  ".$row->address."</td></h2></tr>");
	}
	else
		echo("<h2>No Data Found</h2>");
}
session_destroy();
?>

</p></div>
<br><br>
     <?php

if(isset($_REQUEST["go"]))
{
echo("<a href=dname.php><h1 style='color:black;'>DRIVING LICENSE</h1></a>  <a href=mnane.php><h1 style='color:black;'>MEDICAL DETAILS</h1></a>  <a href=vname.php><h1 style='color:black;'>VOTER ID DETAILS</h1></a>"); } ?>
</div>
        </header>
</div>
     <script type='text/javascript' src='js/responsee.js'></script>
    <script type='text/javascript' src='owl-carousel/owl.carousel.js'></script>
    <script type='text/javascript' src='js/template-scripts.js'></script>


</body>
</html>