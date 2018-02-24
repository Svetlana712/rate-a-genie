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

    <title>Genie view listing</title>
</head>
<body>
<div class="job genie">

    <?php include 'inc/genieheader.php'; ?>


    <div class="container clearfix">
    <div class="row">

        <div >
            <div class="page_title">
                <div class="wrap">
                    <h1>Broken screen</h1>
                    <ul id="breadcrumb">
                        <li><a href="#">Rate A Genie</a></li>
                        <li><a href="findjob.php">Search job</a></li>
                        <li>View listing</li>
                    </ul>
                    <div class="clearfix"></div>
                </div>


            </div>

        </div>
    </div>

    <div class="row">
        <div>
            <div id="overview">

                <div class="job-details">

                    <div class="describe">
                        <label class="label-block">Description of issue:</label>
                        Here client describes what need to fix. Here client describes what need to fix.
                        Here client describes what need to fix. Here client describes what need to fix.
                    </div>
                    <div class="type">
                        <label>Type:</label><span>Smartphone</span>
                    </div>
                    <div class="brand">
                        <label>Brand:</label><span>TVs / Monitors</span>
                    </div>
                    <div class="model">
                        <label>Model:</label><span>Iphone</span>
                    </div>

                </div>
                <div class="send-bid">
                    <div class="expanded-content">
                        <h2 class="block-header">Make your bid</h2>
                        <div class="send-bid-form">

                            <form class="make-bid-form" action="#" method="post" enctype="multipart/form-data" id="send-bid-form5a747dfc3fd6b" accept-charset="UTF-8">
                                <div class="form-group your-bid">
                                    <label for="send-bid-form5a747dfc3fd6b-bid">Your bid:</label>
                                    <input id="send-bid-form5a747dfc3fd6b-bid" name="bid" class="form-control" value="250" type="text">
                                </div>
                                <div class="form-group pdate">
                                    <label for="send-bid-form5a747dfc3fd6b-pdate">Pickup date:</label>
                                    <input id="send-bid-form5a747dfc3fd6b-pdate" name="pdate" class="form-control" type="date">
                                </div>
                                <div class="form-group ddate">
                                    <label for="send-bid-form5a747dfc3fd6b-ddate">Delivery date:</label>
                                    <input id="send-bid-form5a747dfc3fd6b-ddate" name="ddate" class="form-control" type="date">
                                </div>

                                <div class="form-group mesbid">
                                    <label for="send-bid-form5a747dfc3fd6b-mesbid">Message:</label>
                                    <textarea id="send-bid-form5a747dfc3fd6b-mesbid" name="mesbid" class="form-control">Hi! Please accept my bid</textarea>
                                </div>
                                <div class="form-group buttons">
                                    <input value="Make bid" class="make-bid pinkbtn button" id="send-bid-form5a747dfc3fd6b-submit-1" name="send-bid-form5a747dfc3fd6b-submit-1" type="submit">
                                    <span class="cancelbtn linkbtn greenbtn">Cancel</span>
                                </div>
                                <div class="form-mes"></div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="lowest_bid">
                    <div class="title">
                        Lowest bid
                    </div>
                    <div class="inner">
                        <div class="bidder"><label>Bidder</label><span><a href="#" title="View profile">DLSvans</a></span></div>
                        <div class="amount"><label>Amount</label><span>£150.00</span></div>
                        <div class="when"><label>When</label><span>9 hours ago</span></div>
                        <div class="dates"><label>Pickup date</label><span>17th Feb</span></div>
                        <div class="dates"><label>Delivery date</label><span>Same day</span></div>
                        <div class="actions">
                            
                        </div>
                    </div>

                </div>
                <div class="clearfix"></div>
            </div>

            <div id="bids" class="openable open-block">
                <h3 class="block-header" title="Click to hide or expand">All bids</h3>
                <div class="inner-block">
                    <div id="bid-title">
                        <div class="cols col1 bidder">Bidder</div>
                        <div class="cols col2 amount">Amount</div>
                        <div class="cols col3 when">When</div>
                        <div class="cols col4 dates">Dates</div>
                        <div class="cols col5 actions">&nbsp;</div>

                    </div>
                    <div id="bid-container">
                        <div class="bid">
                            <div class="colwrap">
                                <div class="cols col1 bidder">
                                    
                                    <a href="#" title="View profile">
                                        <span class="provider accredited branded">
                                            DLSvans
                                            <span class="badge_container">
                                                <img class="accredited" src="img/dashboard/badges/badge_provider_accredited.png" alt="Rate a Genie Accredited" title="Rate a Genie Accredited">
                                                <img class="branded" src="img/dashboard/badges/badge_provider_branded.png" alt="Branded vans" title="Branded vans">
                                            </span> <span class="jobs">(82)</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="cols col2 amount">£150.00</div>
                                <div class="cols col3 when">9 hours ago</div>
                                <div class="cols col4 dates"><strong>P:</strong> 17 Feb<br><strong>D:</strong> 17 Feb</div>
                                <div class="cols col5 actions">

                                </div>
                            </div>





                        </div>
                        <div class="bid">
                            <div class="colwrap">
                                <div class="cols col1 bidder">

                                    <a href="#" title="View profile">
                                        <span class="provider accredited branded">
                                            RTRvans
                                            <span class="badge_container">
                                                <img class="accredited" src="img/dashboard/badges/badge_provider_accredited.png" alt="Rate a Genie Accredited" title="Rate a Genie Accredited">
                                                <img class="branded" src="img/dashboard/badges/badge_provider_branded.png" alt="Branded vans" title="Branded vans">
                                            </span> <span class="jobs">(82)</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="cols col2 amount">£250.00</div>
                                <div class="cols col3 when">yesterday</div>
                                <div class="cols col4 dates"><strong>P:</strong> 18 Feb<br><strong>D:</strong> 18 Feb</div>
                                <div class="cols col5 actions">
                                    
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="main-pagination">
                        <ul>
                            <li class="page-prev controls"><span class="previous-page-link">Prev</span></li>
                            <li class="page-indicator">Page 1 of 10</li>
                            <li class="page-next controls"><a class="next-page-link" href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="quests" class="openable open-block">
                <h3 class="block-header" title="Click to hide or expand">Questions</h3>
                <div class="inner-block">
                    <div id="quest-title">
                        <div class="cols col1 bidder">Genie</div>
                        <div class="cols col2 when">When</div>
                        <div class="cols col3 quest">Question</div>
                        <div class="cols col4 actions">&nbsp;</div>

                    </div>
                    <div id="quest-container">
                        <div class="quest">
                            <div class="colwrap">
                                <div class="cols col1 bidder">

                                    <a href="#" title="View profile">
                                        <span class="provider accredited branded">
                                            DLSvans
                                            <span class="badge_container">
                                                <img class="accredited" src="img/dashboard/badges/badge_provider_accredited.png" alt="Rate a Genie Accredited" title="Rate a Genie Accredited">
                                                <img class="branded" src="img/dashboard/badges/badge_provider_branded.png" alt="Branded vans" title="Branded vans">
                                            </span> <span class="jobs">(82)</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="cols col2 when">11 hours ago</div>
                                <div class="cols col3 quest">Question about issue. Here client describes what need to fix. Here client describes what need to fix. Here client describes what need to fix. Here client describes what need to fix.</div>


                            </div>





                        </div>
                        <div class="quest">
                            <div class="colwrap">
                                <div class="cols col1 bidder">
                                    
                                    <a href="#" title="View profile">
                                        <span class="provider accredited branded">
                                            DLSvans
                                            <span class="badge_container">
                                                <img class="accredited" src="img/dashboard/badges/badge_provider_accredited.png" alt="Rate a Genie Accredited" title="Rate a Genie Accredited">
                                                <img class="branded" src="img/dashboard/badges/badge_provider_branded.png" alt="Branded vans" title="Branded vans">
                                            </span> <span class="jobs">(82)</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="cols col2 when">11 hours ago</div>
                                <div class="cols col3 quest">Question about issue</div>

                            </div>




                        </div>
                    </div>
                    <div class="main-pagination">
                        <ul>
                            <li class="page-prev controls"><span class="previous-page-link">Prev</span></li>
                            <li class="page-indicator">Page 1 of 10</li>
                            <li class="page-next controls"><a class="next-page-link" href="#">Next</a></li>
                        </ul>
                    </div>
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
<script src="js/popper.min.js" crossorigin="anonymous"></script>
<script src="bootstrap/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="js/jquery.maskedinput.js" crossorigin="anonymous"></script>
<script>

    $( ".block-header" ).click(function() {
        $( this )
            .closest('.openable')
            .toggleClass( "open-block" );

    });

    function click_expander(event) {
        $( this )
            .closest(event.data.selector)
            .toggleClass( "open" );
    }


    $( ".rollup-quest" ).on('click',{selector: '.quest'},click_expander);
    $( ".rollup" ).on('click',{selector: '.bid'},click_expander);
    $( ".bid-expander" ).on('click',{selector: '.bid'},click_expander);
    $( ".exp-mes" ).on('click',{selector: '.bid'},click_expander);
    $( ".quest-expander" ).on('click',{selector: '.quest'},click_expander);
    $( ".quest-reply" ).on('click',{selector: '.quest'},click_expander);


</script>

</body>
</html>