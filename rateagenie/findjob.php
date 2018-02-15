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

    <title>Search job</title>
</head>
<body>
<div id="dashboard" class="findjob genie">
    <?php include 'inc/genieheader.php'; ?>

    <div class="container-fluid clearfix">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-12">
                <div class="page_title">
                    <div class="wrap">
                        <h1>Search job</h1>
                        <ul id="breadcrumb">
                            <li><a href="#">Rate A Genie</a></li>
                            <li>Search job</li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <!--<div id="search">
                        <div class="search-form">
                            <div class="wrap">
                                <div class="form-row" id="form-row-query">
                                    <input type="text" name="job-query" id="job-query" value="" maxlength="255"type="text" placeholder="">
                                </div>
                                <input type="button" onclick="javascript: return false;" value="Search Job" class="pinkbtn button" id="job-search" name="job-search"/>

                            </div>
                        </div>
                    </div>-->
                    <div class="clearfix"></div>

                </div>

            </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-12">
                    <div class="searchbid">
                        <div class="tab-inner">
                            <div class="filters clear-all">

                                <form action="" method="" id="form-search-filter" accept-charset="UTF-8">
                                    <div class="form-inner">
                                        <div id="filter-issue" class="search-item">
                                            <label for="issue_id">Issue</label>
                                            <select name="issue_id" id="issue_id" class="form-control">
                                                <option value="1">Broken screen</option>
                                            </select>
                                        </div>
                                        <div id="filter-type" class="search-item">
                                            <label for="device_type_id">Type</label>
                                            <select name="device_type_id" id="device_type_id" class="form-control">
                                                <option value="1">smartphone</option>
                                                <option value="2">laptop</option>
                                                <option value="3">pc</option>
                                                <option value="4">tv</option>
                                                <option value="5">monitor</option>
                                                <option value="6">other</option>
                                            </select>
                                        </div>
                                        <div id="filter-brand" class="search-item">
                                            <label for="brand_id">Brand</label>
                                            <select name="brand_id" id="brand_id" class="form-control">
                                                <option value="">All</option>
                                                <option value="1">Desktop Computers</option>
                                                <option value="2">Laptops</option>
                                                <option value="3">Mobiles / Tablets</option>
                                                <option value="4">TVs / Monitors</option>
                                                <option value="5">Other...</option>
                                            </select>
                                        </div>
                                        <div id="filter-model" class="search-item">
                                            <label for="device_model_id" id="device_model_id">Model</label>
                                            <select name="device_model_id" class="form-control">
                                                <option value="">All</option>
                                                <option value="1">Iphone</option>
                                                <option value="2">Macbook</option>
                                            </select>
                                        </div>

                                        <div class="filter-submit-button">
                                            <input id="submit-filter" name="submit-filter" value="Filter" class="form-submit linkbtn bluebtn" type="submit">
                                        </div>

                                </div>

                                </form>

                                <select id="search-results_per_page" name="search-results_per_page" class="right form-control">
                                    <option value="25" selected="selected">25 results per page</option>
                                    <option value="50">50 results per page</option>
                                    <option value="100">100 results per page</option>
                                    <option value="250">250 results per page</option>
                                </select>
                            </div>

                            <div class="tab-item listing primary">
                                <div class="main-container">
                                    <div class="col0 cols"><div class="search-expander" id="id-for-this-work-5140179" title="Click to expand">More</div></div>
                                    <div class="col1 cols">
                                        <div class="img-container">
                                            <img src="img/dashboard/dashboard_profile_default.png" alt="No thumbnail">
                                            <div class="client-name"><a href="#">Client 4</a></div>
                                        </div>
                                    </div>
                                    <div class="col2 cols">
                                        <div class="title"><a href="#"><span>Broken screen</span></a></div>
                                        <div class="describe">Here client describes what need to fix. Here client describes what need to fix.
                                            Here client describes what need to fix. Here client describes what need to fix.</div>
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

                                    <div class="col3 cols">
                                        <p class="best_price">Best price from <a href="#">5 quotes</a></p><p class="quote">£218</p>
                                    </div>
                                    <div class="col4 cols">
                                        <a class="main-option linkbtn bluebtn" href="#">View details</a>
                                        <a class="main-option linkbtn pinkbtn" href="#">Make bid</a>
                                        <div class="premium-text">Premium Listing</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="primary-mark"></div>
                                </div>
                                <div class="expanded-content">More info</div>

                            </div>

                            <div class="tab-item listing">
                                <div class="main-container">
                                    <div class="col0 cols"><div class="search-expander" id="id-for-this-work-5140178" title="Click to expand">More</div></div>
                                    <div class="col1 cols">
                                        <div class="img-container">
                                            <img src="img/dashboard/dashboard_profile_default.png" alt="No thumbnail">
                                            <div class="client-name"><a href="#">Client 1</a></div>
                                        </div>
                                    </div>
                                    <div class="col2 cols">
                                        <div class="title"><a href="#"><span>Broken screen</span></a></div>
                                        <div class="describe">Here client describes what need to fix. Here client describes what need to fix.
                                            Here client describes what need to fix. Here client describes what need to fix.</div>
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

                                    <div class="col3 cols">
                                        <p class="best_price">Best price from <a href="#">13 quotes</a></p><p class="quote">£419</p>
                                    </div>
                                    <div class="col4 cols">
                                        <a class="main-option linkbtn bluebtn" href="#">View details</a>
                                        <a class="main-option linkbtn pinkbtn" href="#">Make bid</a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="expanded-content">More info</div>
                            </div>
                            <div class="tab-item listing">
                                <div class="main-container">
                                    <div class="col0 cols"><div class="search-expander" id="id-for-this-work-5140180" title="Click to expand">More</div></div>
                                    <div class="col1 cols">
                                        <div class="img-container">
                                            <img src="img/dashboard/dashboard_profile_default.png" alt="No thumbnail">
                                            <div class="client-name"><a href="#">Client 2</a></div>
                                        </div>
                                    </div>
                                    <div class="col2 cols">
                                        <div class="title"><a href="#"><span>Broken screen</span></a></div>
                                        <div class="describe">Here client describes what need to fix.</div>
                                        <div class="type">
                                            <label>Type:</label><span>Smartphone</span>
                                        </div>
                                        <div class="brand">
                                            <label>Brand:</label><span>Desktop Computers</span>
                                        </div>
                                        <div class="model">
                                            <label>Model:</label><span>Iphone</span>
                                        </div>

                                    </div>

                                    <div class="col3 cols">
                                        <p class="best_price">Awaiting Bids</p>
                                    </div>
                                    <div class="col4 cols">
                                        <a class="main-option linkbtn bluebtn" href="#">View details</a>
                                        <a class="main-option linkbtn pinkbtn" href="#">Make bid</a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="expanded-content">More info</div>
                            </div>
                            <div class="tab-item listing">
                                <div class="main-container">
                                    <div class="col0 cols"><div class="search-expander" id="id-for-this-work-5140181" title="Click to expand">More</div></div>
                                    <div class="col1 cols">
                                        <div class="img-container">
                                            <img src="img/dashboard/dashboard_profile_default.png" alt="No thumbnail">
                                            <div class="client-name"><a href="#">Client 3</a></div>
                                        </div>
                                    </div>
                                    <div class="col2 cols">
                                        <div class="title"><a href="#"><span>Software problem</span></a></div>
                                        <div class="describe"></div>
                                        <div class="type">
                                            <label>Type:</label><span>Laptop</span>
                                        </div>
                                        <div class="brand">
                                            <label>Brand:</label><span>Desktop Computers</span>
                                        </div>
                                        <div class="model">
                                            <label>Model:</label><span>Iphone</span>
                                        </div>

                                    </div>

                                    <div class="col3 cols">
                                        <p class="best_price">Best price from <a href="#">2 quotes</a></p><p class="quote">£315</p>
                                    </div>
                                    <div class="col4 cols">
                                        <a class="main-option linkbtn bluebtn" href="#">View details</a>
                                        <a class="main-option linkbtn pinkbtn" href="#">Make bid</a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="expanded-content">More info</div>
                            </div>
                            <div class="main-pagination">
                                <ul>
                                    <li class="page-prev controls"><span class="previous-page-link">Prev</span></li>
                                    <li class="page-indicator">Page 1 of 352</li>
                                    <li class="page-next controls"><a class="next-page-link" href="#">Next</a></li>
                                    <!--<li class="page-last controls"></li> -->
                                </ul>
                            </div>
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
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js" crossorigin="anonymous"></script>
<script src="bootstrap/bootstrap.min.js" crossorigin="anonymous"></script>

<script>

    $( ".search-expander" ).click(function() {
        $( this )
            .toggleClass( "search-expander-expanded" );
        $( this )
            .closest('.tab-item')
            .toggleClass( "open" );
    });

</script>

</body>
</html>