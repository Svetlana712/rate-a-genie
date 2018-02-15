<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="sass/style2.css">
    <link rel="stylesheet" href="css/jquery-ui.css">

    <title>Dashboard</title>
</head>
<body>
<div id="dashboard" class="genie">
    <?php include 'inc/genieheader.php'; ?>

    <div class="container-fluid clearfix">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-12">
                <div class="page_title">
                    <div class="wrap">
                        <h1>Dashboard</h1>
                        <ul id="breadcrumb">
                            <li><a href="#">Rate A Genie</a></li>
                            <li>Dashboard</li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-12">
                <div id="tabs">
                    <ul>
                        <li><a href="#tabs-1">Accepted Bids</a></li>
                        <li><a href="#tabs-2">Current Bids</a></li>
                        <li><a href="#tabs-3">Messages</a></li>
                        <li><a href="#tabs-4">Archived Bids</a></li>
                    </ul>
                    <div id="tabs-1" class="bids">
                        <div class="tab-inner">
                            <div class="dashboard-information ng-scope">
                                <p>You have no accepted bids -
                                    <a href="findjob.php">Search jobs</a></p>
                            </div>
                        </div>

                    </div>

                    <div id="tabs-2" class="bids">
                        <div class="tab-inner">

                            <div class="grid-header-row">
                                <div class="inner-cont">
                                    <span class="client cols col1">Client</span>
                                    <span class="issue cols col2">Issue</span>
                                    <span class="type cols col3">Type</span>
                                    <span class="brand cols col4">Brand</span>
                                    <span class="model cols col5">Model</span>
                                    <span class="bid cols col6">My bid</span>
                                </div>
                            </div>
                            <div class="tab-item listing">
                                <div class="main-container">
                                    <div class="col1 cols">
                                        <div class="img-container">
                                            <img src="img/dashboard/dashboard_profile_default.png" alt="No thumbnail">
                                            <div class="client-name">Client 1</div>
                                        </div>
                                    </div>
                                    <div class="col2 cols">
                                        <div class="title" title="Broken screen"><a href="#"><span>Broken screen</span></a></div>
                                        <div class="describe">Here client describes what need to fix. Here client describes what need to fix.
                                            Here client describes what need to fix. Here client describes what need to fix.</div>

                                    </div>
                                    <div class="col3 cols">
                                        Smartphone
                                    </div>
                                    <div class="col4 cols">
                                        TVs / Monitors
                                    </div>
                                    <div class="col5 cols">
                                        Iphone
                                    </div>
                                    <div class="col6 cols">
                                        95£
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="listing-options">
                                    <div class="listing-more-options">
                                        <ul>
                                            <li class="option-change"><a href="#" class="more-option">Change bid</a></li>
                                            <li class="option-delete"><a href="#" class="more-option">Delete bid</a></li>
                                            <li class="option-view"><a href="#" class="more-option">View details</a></li>
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div id="tabs-3" class="mailbox">
                        <div class="tab-inner"></div></div>


                    <div id="tabs-4" class="bids">
                        <div class="tab-inner"></div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <?php include 'inc/geniefooter.php'; ?>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
<script src="js/jquery-3.1.0.js" crossorigin="anonymous"></script>
<script src="js/jquery-1.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js" crossorigin="anonymous"></script>
<script src="bootstrap/bootstrap.min.js" crossorigin="anonymous"></script>
    <script>
        $( function() {
            $( "#tabs" ).tabs();
        } );

        $( ".inner-cont" ).click(function() {
            $( this )
                .parent('.message')
                .toggleClass( "open" );
        });

        $( ".rollup" ).click(function() {
            $( this )
                .closest('.message')
                .toggleClass( "open" );
        });

    </script>

</body>
</html>