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
    <div class="full-page forms rag-register">

        <div class="full-page-inside">

            <div class="container">
            
                <div class="forms-wrap">
            
                    <div class="text-center">
                        <a href="index.php" class="logo mb20"><img src="img/logo.png" alt=""></a>
                    </div>
                    <div class="head-text blue text-center">Please fill in the fields below to register.</div>

                    <form class="form-horizontal" method="POST" action="http://rateagenie.com/register">
                        <input name="_token" value="n9yjHpCzQHXNV6Kqgo0F5Lo2lPk1UYoMm19FtWO8" type="hidden">

                        <div class="form-group">

                            <input class="form-control" id="first_name" name="first_name" value="" placeholder="First name" type="text">
                            <p class="error">Please enter correct information</p>
                        </div>
                        <div class="form-group">

                            <input class="form-control" id="last_name" name="last_name" value="" placeholder="Last Name" type="text">
                            <p class="error">Please enter correct information</p>
                        </div>
                        <div class="form-group">

                            <input class="form-control" name="nickname" id="nickname" value="" maxlength="8" placeholder="Username" type="text" required="required">
                            <p class="error">Please enter correct information</p>
                        </div>
                        <div class="form-group">

                            <input class="form-control" id="email" name="email" value="" placeholder="Email" required="required" type="text">
                            <p class="error">Please enter correct information</p>
                        </div>

                        <div class="form-group">

                            <input class="form-control" name="password" id="password" value="" maxlength="50" type="password" placeholder="Password" required="required">
                            <p class="error">Please enter correct information</p>
                        </div>
                        <div class="form-group">

                            <input class="form-control" name="confirm_password" id="confirm_password" value="" maxlength="50" type="password" placeholder="Confirm the password" required="required">
                            <p class="error">Please enter correct information</p>
                        </div>
                        <div class="form-group" id="user-level">
                            <h3>Who you are?</h3>
                            <div class="rad-group">
                                <div class="rad-item">
                                    <input name="choices" id="cust_choice" value="customer" checked="checked" type="radio">
                                    <label for="cust_choice" id="label_cust_choice">I'm customer</label>
                                </div>
                                <div class="rad-item">
                                    <input name="choices" id="genie_choice" value="genie" type="radio">
                                    <label for="genie_choice" id="label_genie_choice">I'm genie</label>
                                </div>

                            </div>

                        </div>
                        <div class="form-group form-btn">

                            <button class="btn btn-register btn-block">Register</button>

                        </div>
                        <div class="form-mes"></div>

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