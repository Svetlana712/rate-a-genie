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
    <div class="full-page forms middle-form">

        <div class="full-page-inside">

            <div class="container">

                <div class="forms-wrap">
                    <div class="text-center">
                        <a href="/" class="logo mb20"><img src="img/logo.png" alt=""></a>
                    </div>

                    <div class="text-center blue head-text">
                        Please enter new password to restore control of your account
                    </div>

                    <form class="passv-form" method="POST" action="">
                        <input name="_token" value="" type="hidden">

                        <div class="form-group">
                            <input class="form-control" type="password" placeholder="New password">
                            <p class="error">Please enter correct information</p>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" placeholder="Confirm new password">
                            <p class="error">Please enter correct information</p>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-register btn-block">Save</button>
                        </div>
                        <div class="form-mes"></div>
                    </form>
                </div>
                <!-- reset-wrap -->

            </div>
            <!-- container -->

        </div>
        <!-- full-page-inside -->


        <div class="fixed-footer">

            <?php include 'inc/footer.php'; ?>

        </div>
        <!-- fixed-footer -->

        <!-- JQUERY -->


        <!-- BOOTSTRAP -->

        <script src="bootstrap/bootstrap.min.js"></script>

        <!-- CUSTOM SCRIPT -->

    </div>
    <!-- full-page -->
    </body>

</html>