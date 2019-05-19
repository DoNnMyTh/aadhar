<!DOCTYPE html>
<html lang='en-US'>
  <head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <title>Indian Railway</title>
    <link rel='stylesheet' href='css/components.css'>
    <link rel='stylesheet' href='css/icons.css'>
    <link rel='stylesheet' href='css/responsee.css'>
    <link rel='stylesheet' href='owl-carousel/owl.carousel.css'>
    <link rel='stylesheet' href='owl-carousel/owl.theme.css'>
    <link rel='stylesheet' href='css/template-style.css'>

    <link href='https://fonts.googleapis.com/css?family=Playfair+Display&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

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
        <header class="section background-dark">
          <div class="line">
            <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1">Upcoming Trains...</h1>
            <p class="margin-bottom-0 text-size-16"><br>
            <form action=add.php method=get>
<h1 align=center style='color:blue;'>Train Details</h1>

<table align='center'  border=2  cellspacing=0 cellpadding=2>
<tr style='font-size:23;color:red;'>
<th colspan='4'></th>
</tr>
<tr><td >TrainNo : <input type=text name=TrainNo /></td>
<td >TName : <input type=text name=Tname /></td></tr>
<tr>
<td >Source : <input type=text name=Source /></td>
<td >Destination : <input type=text name=Destination /></td></tr>
<tr>
<td >Ar_Source : <input type=text name=Ar_Source /></td>
<td >Deprt_Source  : <input type=text name=Deprt_Source /></td></tr>
<tr>
<td >Ar_Destination : <input type=text name=Ar_Destination /></td>
<td >Type : <input type=text name=Type /></td></tr>
</table>
<br><input type=submit value='Add new Train' name=submit />
</form>


<?php


if(isset($_REQUEST["submit"]))
{

		$TrainNo = $_REQUEST["TrainNo"];
		$Tname = $_REQUEST["Tname"];
		$Source = $_REQUEST["Source"];
		$Destination=$_REQUEST["Destination"];
		$Ar_Source = $_REQUEST["Ar_Source"];
		$Deprt_Source = $_REQUEST["Deprt_Source"];
		$Ar_Destination=$_REQUEST["Ar_Destination"];
		$Type=$_REQUEST["Type"];

	$con = new mysqli("localhost","root","","trainDB");

	$qry = "Insert into trains values($TrainNo,'$Tname','$Source','$Destination','$Ar_Source','$Deprt_Source','$Ar_Destination','$Type');";

	$rows = $con->query($qry);

	if($rows > 0)
		echo("<h2>Data inserted successfully.</h2>");
	else
		echo("<h2>Data inserted unsuccessfully.</h2>");

}


?>
</p>
</div>
</header>

<?php include("footer.php"); ?>
	      <!-- Bottom Footer -->
	      <section class="padding background-dark full-width">
	        <div class="s-12 l-6">
	          <p class="text-size-12">Copyright </p>
	          <p class="text-size-12"></p>
	        </div>
	        <div class="s-12 l-6">
	          <a class="right text-size-12" href="http://www.myresponsee.com" title="Responsee - lightweight responsive framework">Design and coding<br> by Responsee Team</a>
	        </div>
	      </section>
	    </footer>
	    <script type="text/javascript" src="js/responsee.js"></script>
	    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
	    <script type="text/javascript" src="js/template-scripts.js"></script>

</body>

</html>