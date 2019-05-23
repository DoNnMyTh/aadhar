<!DOCTYPE html>
<html lang='en-US'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <title>Registration Form</title>
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
    <article>
        <main role="main">
            <!-- Content -->
            <header class="section background-dark">
                <div class="line">

                    <h1 class="text-white margin-top-bottom-0 text-size-60 text-line-height-1" style="text-align:center"><br><br> Registration Form</h1>



                    <form action='RegisterForm.php' method="POST">


                        <table style="margin-top:50px;color:black;border-radius:5px;">

                            <tr>
                                <td style="padding:20px;"> Username </td>
                                <td> <input type=text name=username></td>
                                <td> Password </td>
                                <td> <input type=password name=pwd></td>
                            </tr>

                            <tr>
                                <td style="padding:20px;">Gender </td>
                                <td>
                                    <input type=radio name=gender value=male>Male
                                    <input type=radio name=gender value=female>Female
                                </td>

                                <td> DOB </td>
                                <td> <input type=date name=date>
                                </td>
                            </tr>


                            <tr>
                                <td style="padding:20px;">Contact </td>
                                <td> <input type=text name=phone>
                                </td>

                                <td>State </td>
                                <td> <select name="state" id="state">
                                            <option value="">Select State</option>
                                            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands
                                            </option>
                                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                            <option value="Assam">Assam</option>
                                            <option value="Bihar">Bihar</option>
                                            <option value="Chandigarh">Chandigarh</option>
                                            <option value="Chhattisgarh">Chhattisgarh</option>
                                            <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                            <option value="Daman and Diu">Daman and Diu</option>
                                            <option value="Delhi">Delhi</option>
                                            <option value="Goa">Goa</option>
                                            <option value="Gujarat">Gujarat</option>
                                            <option value="Haryana">Haryana</option>
                                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                            <option value="Jharkhand">Jharkhand</option>
                                            <option value="Karnataka">Karnataka</option>
                                            <option value="Kerala">Kerala</option>
                                            <option value="Lakshadweep">Lakshadweep</option>
                                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                                            <option value="Maharashtra">Maharashtra</option>
                                            <option value="Manipur">Manipur</option>
                                            <option value="Meghalaya">Meghalaya</option>
                                            <option value="Mizoram">Mizoram</option>
                                            <option value="Nagaland">Nagaland</option>
                                            <option value="Orissa">Orissa</option>
                                            <option value="Pondicherry">Pondicherry</option>
                                            <option value="Punjab">Punjab</option>
                                            <option value="Rajasthan">Rajasthan</option>
                                            <option value="Sikkim">Sikkim</option>
                                            <option value="Tamil Nadu">Tamil Nadu</option>
                                            <option value="Tripura">Tripura</option>
                                            <option value="Uttaranchal">Uttaranchal</option>
                                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                                            <option value="West Bengal">West Bengal</option>
                                    </select> <br>
                                </td>
                            </tr>

                            <tr>
                                <td style="padding:20px;">City </td>
                                <td> <input type=text name=city></select>
                                </td>
                                <td>Email</td>
                                <td><input type=text name=email>
                                </td>
                            </tr>


                            <tr>
                                <td style="padding:20px;text-align:center;" colspan=4><input type=submit name=register value='Click to Register' /></td>
                            </tr>

                        </table>


                    </form>




                    <div style='margin-top:100px;'>
                    </div>
                </div>
            </header>
        </main>
    </article>
    <script type='text/javascript' src='js/responsee.js'></script>
    <script type='text/javascript' src='owl-carousel/owl.carousel.js'></script>
    <script type='text/javascript' src='js/template-scripts.js'></script>
</body>

</html>