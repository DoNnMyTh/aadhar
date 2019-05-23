<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Indian Railway</title>
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="css/template-style.css">
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
  </head>

  <body class="size-1140">



<!-- PREMIUM FEATURES BUTTON -->
  	<a target='_blank' class='hide-s'style='position:fixed;top:120px;right:-14px;z-index:10;'><img src='img/premium-features.png' alt=''></a>
    <!-- HEADER -->
<header role='banner' class='position-absolute'>
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


			<?php include("menu.php"); ?>
        </div>
      </nav>
    </header>

    <!-- MAIN -->
	    <main role="main">
	      <!-- Content -->
	      <article>
	        <header class="section background-dark">
	          <div class="line">
	            <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1">Login</h1>
	            <p class="margin-bottom-0 text-size-16">

<br>
<br>
<form action = login.php method=POST>
<br><br><b>Username:</b><br><input type=text name=username value= '<?php if(isset($_REQUEST["login"]))
{ if(isset($_REQUEST['username'])) echo($_REQUEST['username']); } ?>'>
<br><br><b>Password :</b><br><input type=password name=pwd value= '
<?php if(isset($_REQUEST["login"])) { if(isset($_REQUEST['pwd'])) echo($_REQUEST['pwd']); } ?>'>
<br><br><input type =submit name=login value=Login />
<br>
<br>
</form>



<?php


if(isset($_REQUEST["login"]))
{


$username=$_REQUEST["username"];
$pwd=$_REQUEST["pwd"];

$qry="select * from register where username='$username'and password='$pwd'";

$con=new mysqli("localhost","root","","namitadb");

$result=$con->query($qry);

if($result->num_rows>0)
{
				if($row=$result->fetch_object())
				{
							$role=$row->role;

							$_SESSION["username"] = $username;
							$_SESSION["role"] = $role;


							header("location:index.php");
					}

}
else
echo("Invalid login!!");

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
      </section>
    </footer>
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script>
  </body>
</html>