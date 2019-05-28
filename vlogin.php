<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Kodinger">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin Login Page</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/my-login.css">
</head>

<body class="my-login-page">
    <?php include 'session.php';
    $aadhar = $_POST["aadhar"];;
    $_SESSION["aadhar"] = "$aadhar";
    
    ?>
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-md-center h-100">
                <div class="card-wrapper">
                    <div class="brand">
                        <img src="img/logo1.png" alt="logo">
                    </div>
                    <div class="card fat">
                        <div class="card-body">
                            <h4 class="card-title">Login</h4>
                            <form method="POST" class="my-login-validation" action="vlogin.php">
                                <div class="form-group">
                                    <label for="email">Username</label>
                                    <input id="email" type="text" class="form-control" name="username" value="" required autofocus>
                                </div>

                                <div class="form-group">
                                    <label for="password">Password
									</label>
                                    <input id="password" type="password" class="form-control" name="password" required data-eye>
                                    <div class="invalid-feedback">
                                        Password is required
                                    </div>
                                </div>

                                <div class="form-group m-0">
                                    <button type="submit" class="btn btn-primary btn-block">
										Login
									</button>
                                </div>
                                <div class="mt-4 text-center">
                                    Don't have an account? <a href="Register.php">Create One</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="footer">
                        Copyright &copy; 2019 &mdash; TheRoasters
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/my-login.js"></script>
</body>

</html>