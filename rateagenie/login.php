<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="robots" content="noindex">
        <title>
           Rateagenie
        </title>

        <!-- VIEWPORT -->
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=3.0, user-scalable=yes"/>

        <!-- FAVICON -->
        <link rel="icon" type="image/png" href="img/favicon.png">

        <!-- FONT AWESOME ICONS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css">

        <!-- STYLES -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="sass/style2.css">


    </head>

    <body>
    <div class="full-page forms big-form">

        <div class="full-page-inside">

            <div class="container">
            
                <div class="register-wrap">
            
                    <div class="text-center">
                        <a href="index.php" class="logo mb20"><img src="img/logo.png" alt=""></a>
                    </div>

                    <form action="send.php" method="post" class="register-form">
                        <div class="form-group">
                            <input name="email" class="form-control" type="text" placeholder="E-mail (phone for mobile accounts)">
                            <p class="error email-error">Please enter correct information</p>
                        </div>
                        <!-- form-group -->
                        <div class="form-group">
                            <input name="password" class="form-control" type="password" placeholder="Password">
                            <p class="error password-error">Please enter correct information</p>
                        </div>
                        <!-- form-group -->
                        <div class="remember d-md-flex align-items-md-bottom justify-content-md-between mb20">
                            <div class="checkbox">
                                <input type="checkbox" class="required" name="remember" id="remember">
                                <label for="remember">Remember me</label>
                            </div>
                            <!-- checkbox -->
                            <div class="text-center text-md-right forgot-txt">
                                <a href="reset.php" class="forgot">Forgot your password?</a>
                            </div>
                        </div>
                        <!-- d-md-flex align-items-md-bottom -->
                        <div class="enter-box mb10">

                            <button class="btn btn-register btn-block">Login</button>

                        </div>
                        <!-- enter-box -->
                        <div class="hr-or mb10"><span>or</span></div>
                        <div class="enter-box mb10">
                            <a href="register.php" class="btn btn-sign-up btn-block">Sign Up</a>
                        </div>
                        <div class="form-mes"></div>
                        <!-- enter-box -->
                    </form>
                    <!-- register-form -->
                </div>
                <!-- register-wrap -->
            
            </div>
            <!-- container -->

        </div>
        <!-- full-page-inside -->
        

        <div class="fixed-footer">

            <?php include 'inc/footer.php'; ?>  
            
        </div>
        <!-- fixed-footer -->
    </div>
    <!-- full-page -->

            
        <!-- JQUERY -->


        <!-- BOOTSTRAP -->

        <script src="bootstrap/bootstrap.min.js"></script>
        
        <!-- CUSTOM SCRIPT -->

        
    </body>


</html>