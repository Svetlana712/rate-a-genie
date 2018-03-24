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
    <link rel="stylesheet" type="text/css" href="css/jcarousel.responsive.css">
    <link rel="stylesheet" type="text/css" href="css/colorbox.css">




    <title>Active listing. Customer view</title>
</head>
<body>
<div class="job activejob customer">

    <?php include 'inc/customerheader.php'; ?>


    <div class="container clearfix">
    <div class="row">

        <div >
            <div class="page_title">
                <div class="wrap">
                    <h1>Broken screen</h1>
                    <ul id="breadcrumb">
                        <li><a href="#">Rate A Genie</a></li>
                        <li>View my active listing</li>
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
                    <div class="listing-actions">
                        <span class="close-job linkbtn pinkbtn">Close this listing</span>
                    </div>
                    <div id="feedback-wrap" style="display: none;">
                        <div class="feedback customer">
                            <h2 class="block-header">Customer feedback</h2>

                            <div class="fb-content">
                                <div title="Positive Feedback" class="feedback-icons iconPlus">+</div>
                                <div class="date">1/08/18</div>

                                <div class="comment">Good genie.<br>Best £££ I’ve spent. Would highly recommend and I will be using again</div>
                                <div class="fb-actions"><span class="linkbtn greenbtn edit-rate">Change Feedback</span></div>

                            </div>


                        </div>

                        <!--<div class="feedback genie">
                            <h2 class="block-header">Genie feedback</h2>

                            <div class="fb-content">
                                <div title="Positive Feedback" class="feedback-icons iconPlus">+</div>
                                <div class="date">1/08/18</div>

                                <div class="comment">Good customer.</div>
                                <div class="fb-actions"><span class="linkbtn greenbtn">Change Feedback</span></div>

                            </div>


                        </div>-->
                    </div>
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
                    <div class="job-photos"><label>Photo:</label>
                    <div class="photos">
                        <div class="photo-item"><a class="group1 cboxElement" href="files/upload/ph1.jpg" title="Click me"><img class="cBoxImg" src="files/upload/ph1.jpg" alt="Job image"></a></div>
                        <div class="photo-item"><a class="group1 cboxElement" href="files/upload/ph2.jpg" title="Click me"><img class="cBoxImg" src="files/upload/ph2.jpg" alt="Job image"></a></div>
                        <div class="photo-item"><a class="group1 cboxElement" href="files/upload/ph3.jpg" title="Click me"><img class="cBoxImg" src="files/upload/ph3.jpg" alt="Job image"></a></div>
                        <div class="photo-item"><a class="group1 cboxElement" href="files/upload/ph4.jpg" title="Click me"><img class="cBoxImg" src="files/upload/ph4.jpg" alt="Job image"></a></div>
                        <div class="photo-item"><a class="group1 cboxElement" href="files/upload/ph5.jpg" title="Click me"><img class="cBoxImg" src="files/upload/ph5.jpg" alt="Job image"></a></div>
                        <div class="photo-item"><a class="group1 cboxElement" href="files/upload/ph6.jpg" title="Click me"><img class="cBoxImg" src="files/upload/ph6.jpg" alt="Job image"></a></div>
                        <div class="photo-item"><a class="group1 cboxElement" href="files/upload/ph7.jpg" title="Click me"><img class="cBoxImg" src="files/upload/ph7.jpg" alt="Job image"></a></div>
                    </div>
                    </div>

                    <!--<div class="jcarousel-wrapper">
                        <div class="jcarousel">
                            <ul>
                                <li><img src="files/upload/ph1.jpg" alt="Image 1"></li>
                                <li><img src="files/upload/ph2.jpg" alt="Image 2"></li>
                                <li><img src="files/upload/ph3.jpg" alt="Image 3"></li>
                                <li><img src="files/upload/ph4.jpg" alt="Image 4"></li>
                                <li><img src="files/upload/ph5.jpg" alt="Image 5"></li>
                                <li><img src="files/upload/ph6.jpg" alt="Image 6"></li>
                                <li><img src="files/upload/ph7.jpg" alt="Image 7"></li>
                            </ul>
                        </div>

                        <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                        <a href="#" class="jcarousel-control-next">&rsaquo;</a>

                        <p class="jcarousel-pagination"></p>
                    </div>-->
                </div>
                <div class="lowest_bid">
                    <div class="title">
                        Accepted bid
                    </div>
                    <div class="inner">
                        <div class="bidder"><label>Bidder</label><span><a href="view-prof-genie.php" title="View profile">DLSvans DLSvans DLSvans DLSvans</a></span></div>
                        <div class="amount"><label>Amount</label><span>£150.00</span></div>
                        <div class="when"><label>When</label><span>9 hours ago</span></div>
                        <div class="dates"><label>Pickup date</label><span>17th Feb 2018</span></div>
                        <div class="dates"><label>Delivery date</label><span>Same day</span></div>
                        <div class="actions">
                            <a href="view-prof-genie.php" class="linkbtn greenbtn view-prof">View Genie Profile</a>
                            
                        </div>
                    </div>

                </div>
            </div>

            <div id="bids" class="openable">
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
                                    <div class="bid-expander" id="id-for-this-bid-5140178" title="Click to expand or hide additional info">&nbsp;</div>
                                    <a href="#" title="View profile">
                                        <span class="provider accredited branded">
                                            DLSvans DLSvans DLSvans DLSvans
                                            <span class="badge_container">
                                                <img class="accredited" src="img/dashboard/badges/accredited_genie.png" alt="Rate a Genie Accredited" title="Rate a Genie Accredited">
                                                <img class="branded" src="img/dashboard/badges/badge_provider_branded.png" alt="Branded genies" title="Branded genies">
                                            </span> <span class="jobs">(82)</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="cols col2 amount">£150.00</div>
                                <div class="cols col3 when">9 hours ago</div>
                                <div class="cols col4 dates"><strong>P:</strong> 17 Feb 2018<br><strong>D:</strong> 17 Feb 2018</div>
                                <div class="cols col5 actions">
                                    <span class="main-option linkbtn bluebtn exp-mes">View details</span>
                                    
                                </div>
                            </div>

                            <div class="is-more">
                                <div class="reply_block">
                                    <div class="reply-options">
                                    </div>
                                    <div class="reply-form">
                                        <form action="#" method="post" enctype="multipart/form-data" id="reply-form5a771ad0d3040" accept-charset="UTF-8">
                                            <div>
                                                <input name="__IDENTreply-form5a771ad0d3040__" value="1" type="hidden">
                                                <input name="__TIMESTAMP" value="1517583867" type="hidden">
                                                <input name="__fw-token" value="__fw-token-ffac0666042757c9167b481cd10e52325a747dfbea03f" type="hidden">
                                            </div>
                                            <input name="send_all" id="reply-form5a771ad0d3040-send_all" value="0" type="hidden">
                                            <div class="form-row" id="form-row-reply-form5a771ad0d3040-message_response">
                                                <label for="reply-form5a771ad0d3040-message_response">Reply Now:</label>
                                                <textarea id="reply-form5a771ad0d3040-message_response" name="message_response"></textarea>
                                            </div>
                                            <div class="buttons">
                                                <input value="Send" class="mes-reply pinkbtn button" id="reply-form5a771ad0d3040-submit-1" name="reply-form5a771ad0d3040-submit-1" type="submit">
                                                <input value="Send to All" class="mes-reply-all linkbtn bluebtn button disabled" id="reply-form5a771ad0d3040-submit" name="reply-form5a771ad0d3040-submit" type="submit">
                                            </div>
                                            <div class="clearfix"></div>
                                        </form>
                                    </div>
                                </div>

                                <div class="message_sending"><span class="loading">Sending the message…</span></div>

                                <div class="message_sent">Message sent!</div>

                                <div class="thread_item own">
                                    <div class="user">
                                        <div class="profile_image">
                                            <div class="profile-image customer">
                                                <img src="img/dashboard/profile.png" alt="">
                                                <span class="badge_container"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bubble">
                                        <div class="arrow"></div>
                                        <div class="created_at">
                                            21 Oct, 10:59
                                            <div class="sent">Sent!</div>
                                        </div>
                                        <div class="content">
                                            hi i left my bag in Camden and there is no one there until 20:00. would it be ok to pick it up then?
                                        </div>
                                    </div>

                                    <div class="clear"></div>
                                </div>

                                <div class="thread_item provider-first">
                                    <div class="user">
                                        <div class="profile_image">
                                            <a href="#">
                                                <div class="profile-image provider accredited">
                                                    <img src="img/dashboard/cust/thumb_1721931.jpg" alt="">
                                                    <span class="badge_container">
                                                                    <span class="power_shield_gold" title="Gold Power Mover – Over 1000+ Jobs"></span>
                                                                    <span class="recommended_lvl5" title="Completed over 250 jobs + minimum 90% positive feedback"></span>
                                                                    <span class="accredited" title="Rate a Genie Accredited"></span>
                                                                </span>
                                                </div>
                                            </a>
                                            <p class="chatting_nickname">DLSvans DLSvans DLSvans DLSvans</p>
                                        </div>
                                    </div>
                                    <div class="bubble with-whois">
                                        <div class="arrow"></div>
                                        <div class="created_at">
                                            21 Oct, 9:18
                                        </div>
                                        <div class="content">
                                            its the lowest i can do it for. cheers
                                        </div>
                                    </div>

                                    <div class="whois">
                                        <div class="whois-arrow"></div>
                                        <div class="about-title">About Me</div>
                                        <ul class="about">
                                            <li>Feedback <span>100%</span></li>
                                            <li>Jobs Completed <span>555</span></li>
                                            <li>Insurance <span class="tick"></span></li>
                                            <li>Verified <span class="tick"></span></li>
                                            <li>Recommended <span class="tick"></span></li>
                                        </ul>
                                        <a href="#" class="linkbtn greenbtn view-prof">View Profile</a>
                                    </div>
                                    <div class="clear"></div>
                                </div>

                                <div class="thread_item">
                                    <div class="user">
                                        <div class="profile_image">
                                            <a href="#">
                                                <div class="profile-image provider accredited">
                                                    <img src="img/dashboard/cust/thumb_1721931.jpg" alt="">
                                                    <span class="badge_container">
                                                                    <span class="power_shield_gold" title="Gold Power Mover – Over 1000+ Jobs"></span>
                                                                    <span class="recommended_lvl5" title="Completed over 250 jobs + minimum 90% positive feedback"></span>
                                                                    <span class="accredited" title="Rate a Genie Accredited"></span>
                                                                </span>
                                                </div>
                                            </a>
                                            <p class="chatting_nickname">DLSvans DLSvans DLSvans DLSvans</p>
                                        </div>
                                    </div>
                                    <div class="bubble with-whois">
                                        <div class="arrow"></div>
                                        <div class="created_at">
                                            21 Oct, 8:29
                                        </div>
                                        <div class="content">
                                            Hi, can collect this between 10-12 and deliver by 4:40pm today. Pls book ASAP if that works for you. Cheers,<br>Bart
                                        </div>
                                    </div>

                                </div>

                                <div class="clearfix"></div>

                                <div class="rollup"></div>
                            </div>



                        </div>
                        <div class="bid">
                            <div class="colwrap">
                                <div class="cols col1 bidder">
                                    <div class="bid-expander" id="id-for-this-bid-5140179" title="Click to expand or hide additional info">&nbsp;</div>
                                    <a href="#" title="View profile">
                                        <span class="provider accredited branded">
                                            RTRvans
                                            <span class="badge_container">
                                                <img class="accredited" src="img/dashboard/badges/accredited_genie.png" alt="Rate a Genie Accredited" title="Rate a Genie Accredited">
                                                <img class="branded" src="img/dashboard/badges/badge_provider_branded.png" alt="Branded genies" title="Branded genies">
                                            </span> <span class="jobs">(82)</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="cols col2 amount">£250.00</div>
                                <div class="cols col3 when">yesterday</div>
                                <div class="cols col4 dates"><strong>P:</strong> 18 Feb 2018<br><strong>D:</strong> 18 Feb 2018</div>
                                <div class="cols col5 actions">
                                    <span class="main-option linkbtn bluebtn exp-mes">View details</span>
                                </div>
                            </div>
                            <div class="is-more">
                                <div class="reply_block">
                                    <div class="reply-options">
                                    </div>
                                    <div class="reply-form">
                                        <form action="#" method="post" enctype="multipart/form-data" id="reply-form5a747dfc3fd7b" accept-charset="UTF-8">
                                            <div>
                                                <input name="__IDENTreply-form5a747dfc3fd7b__" value="1" type="hidden">
                                                <input name="__TIMESTAMP" value="1517583867" type="hidden">
                                                <input name="__fw-token" value="__fw-token-ffac0666042757c9167b481cd10e52325a747dfbea03f" type="hidden">
                                            </div>
                                            <input name="send_all" id="reply-form5a747dfc3fd7b-send_all" value="0" type="hidden">
                                            <div class="form-row" id="form-row-reply-form5a747dfc3fd7b-message_response">
                                                <label for="reply-form5a747dfc3fd7b-message_response">Reply Now:</label>
                                                <textarea id="reply-form5a747dfc3fd7b-message_response" name="message_response"></textarea>
                                            </div>
                                            <div class="buttons">
                                                <input value="Send" class="mes-reply pinkbtn button" id="reply-form5a747dfc3fd7b-submit-1" name="reply-form5a747dfc3fd7b-submit-1" type="submit">
                                                <input value="Send to All" class="mes-reply-all linkbtn bluebtn button disabled" id="reply-form5a747dfc3fd7b-submit" name="reply-form5a747dfc3fd7b-submit" type="submit">
                                            </div>
                                            <div class="clearfix"></div>
                                        </form>
                                    </div>
                                </div>

                                <div class="message_sending"><span class="loading">Sending the message…</span></div>

                                <div class="message_sent">Message sent!</div>



                                <div class="thread_item provider-first">
                                    <div class="user">
                                        <div class="profile_image">
                                            <a href="#">
                                                <div class="profile-image provider accredited">
                                                    <img src="img/dashboard/cust/dashboard_profile_tp_default_thumb.png" alt="">
                                                    <span class="badge_container">
                                                                    <span class="accredited" title="Rate a Genie Accredited"></span>
                                                                </span>
                                                </div>
                                            </a>
                                            <p class="chatting_nickname">RTRvans</p>
                                        </div>
                                    </div>
                                    <div class="bubble with-whois">
                                        <div class="arrow"></div>
                                        <div class="created_at">
                                            7 Nov, 16:53
                                        </div>
                                        <div class="content">
                                            Hi<br>Please accept my bid by clicking on accept and we can book you in asap.<br>Thanks<br>Lawrance
                                        </div>
                                    </div>

                                    <div class="whois">
                                        <div class="whois-arrow"></div>
                                        <div class="about-title">About Me</div>
                                        <ul class="about">
                                            <li>Feedback <span>91%</span></li>
                                            <li>Jobs Completed <span>82</span></li>
                                            <li>Insurance <span class="tick"></span></li>
                                            <li>Verified <span class="tick"></span></li>
                                            <li>Recommended <span class="tick"></span></li>
                                        </ul>
                                        <a href="#" class="linkbtn greenbtn view-prof">View Profile</a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="clear" style="height:20px"></div>

                                <div class="rollup"></div></div>

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
            <div id="quests" class="openable">
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
                                    <div class="quest-expander" id="id-for-this-quest-5101178" title="Click to expand or hide reply form">&nbsp;</div>
                                    <a href="#" title="View profile">
                                        <span class="provider accredited branded">
                                            DLSvans DLSvans DLSvans DLSvans
                                            <span class="badge_container">
                                                <img class="accredited" src="img/dashboard/badges/accredited_genie.png" alt="Rate a Genie Accredited" title="Rate a Genie Accredited">
                                                <img class="branded" src="img/dashboard/badges/badge_provider_branded.png" alt="Branded genies" title="Branded genies">
                                            </span> <span class="jobs">(82)</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="cols col2 when">11 hours ago</div>
                                <div class="cols col3 quest">Question about issue. Here client describes what need to fix. Here client describes what need to fix. Here client describes what need to fix. Here client describes what need to fix.</div>
                                <div class="cols col4 actions"><span class="main-option linkbtn pinkbtn quest-reply">Reply</span></div>

                            </div>

                            <div class="is-more">
                                <div class="reply_block">
                                    <div class="reply-options">
                                    </div>
                                    <div class="reply-form">
                                        <form action="#" method="post" enctype="multipart/form-data" id="reply-form5a871ad0d3040" accept-charset="UTF-8">
                                            <div>
                                                <input name="__IDENTreply-form5a871ad0d3040__" value="1" type="hidden">
                                                <input name="__TIMESTAMP" value="1517583867" type="hidden">
                                                <input name="__fw-token" value="__fw-token-ffac0666042757c9167b481cd10e52325a747dfbea03f" type="hidden">
                                            </div>
                                            <input name="send_all" id="reply-form5a871ad0d3040-send_all" value="0" type="hidden">
                                            <div class="form-row" id="form-row-reply-form5a871ad0d3040-message_response">
                                                <label for="reply-form5a871ad0d3040-message_response">Reply Now:</label>
                                                <textarea id="reply-form5a871ad0d3040-message_response" name="message_response"></textarea>
                                            </div>
                                            <div class="buttons">
                                                <input value="Send" class="mes-reply pinkbtn button" id="reply-form5a871ad0d3040-submit-1" name="reply-form5a871ad0d3040-submit-1" type="submit">
                                                <input value="Send to All" class="mes-reply-all linkbtn bluebtn button disabled" id="reply-form5a871ad0d3040-submit" name="reply-form5a871ad0d3040-submit" type="submit">
                                            </div>
                                            <div class="clearfix"></div>
                                        </form>
                                    </div>
                                </div>

                                <div class="message_sending"><span class="loading">Sending the message…</span></div>

                                <div class="message_sent">Message sent!</div>

                                <div class="clearfix"></div>

                                <div class="rollup-quest"></div>
                            </div>



                        </div>
                        <div class="quest">
                            <div class="colwrap">
                                <div class="cols col1 bidder">
                                    <div class="quest-expander" id="id-for-this-quest-5141178" title="Click to expand or hide reply form">&nbsp;</div>
                                    <a href="#" title="View profile">
                                        <span class="provider accredited branded">
                                            DLSvans DLSvans DLSvans DLSvans
                                            <span class="badge_container">
                                                <img class="accredited" src="img/dashboard/badges/accredited_genie.png" alt="Rate a Genie Accredited" title="Rate a Genie Accredited">
                                                <img class="branded" src="img/dashboard/badges/badge_provider_branded.png" alt="Branded genies" title="Branded genies">
                                            </span> <span class="jobs">(82)</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="cols col2 when">11 hours ago</div>
                                <div class="cols col3 quest">Question about issue</div>
                                <div class="cols col4 actions"><span class="main-option linkbtn pinkbtn quest-reply">Reply</span></div>

                            </div>

                            <div class="is-more">
                                <div class="reply_block">
                                    <div class="reply-options">
                                    </div>
                                    <div class="reply-form">
                                        <form action="#" method="post" enctype="multipart/form-data" id="reply-forma871ad0d3040" accept-charset="UTF-8">
                                            <div>
                                                <input name="__IDENTreply-forma871ad0d3040__" value="1" type="hidden">
                                                <input name="__TIMESTAMP" value="1517583867" type="hidden">
                                                <input name="__fw-token" value="__fw-token-ffac0666042757c9167b481cd10e52325a747dfbea03f" type="hidden">
                                            </div>
                                            <input name="send_all" id="reply-forma871ad0d3040-send_all" value="0" type="hidden">
                                            <div class="form-row" id="form-row-reply-forma871ad0d3040-message_response">
                                                <label for="reply-forma871ad0d3040-message_response">Reply Now:</label>
                                                <textarea id="reply-forma871ad0d3040-message_response" name="message_response"></textarea>
                                            </div>
                                            <div class="buttons">
                                                <input value="Send" class="mes-reply pinkbtn button" id="reply-forma871ad0d3040-submit-1" name="reply-forma871ad0d3040-submit-1" type="submit">
                                                <input value="Send to All" class="mes-reply-all linkbtn bluebtn button disabled" id="reply-forma871ad0d3040-submit" name="reply-forma871ad0d3040-submit" type="submit">
                                            </div>
                                            <div class="clearfix"></div>
                                        </form>
                                    </div>
                                </div>

                                <div class="message_sending"><span class="loading">Sending the message…</span></div>

                                <div class="message_sent">Message sent!</div>

                                <div class="clearfix"></div>

                                <div class="rollup-quest"></div>
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



    <?php include 'inc/customerfooter.php'; ?>
</div>

<div class="popup__overlay del_event">
    <div class="popup blue">
        <a class="popup__close" href="#" title="Close">&nbsp;</a>
        <div class="form-head">Confirming of an action</div>
        <div class="popup-inner">


            <form accept-charset="UTF-8" action="#" id="popup_form" method="post">

                <div class="form-quest">Are you sure that you want <span>to close this listing</span>?</div>
                <div class="buttons">
                    <input type="button" class="yes-btn linkbtn pinkbtn" value="Close">
                    <input type="button" class="no-btn linkbtn greenbtn" value="Cancel">

                </div>
                <div class="form_mes"></div>
            </form>


        </div>
    </div>
</div>

<div class="popup__overlay rate_event">
    <div class="popup">
        <a class="popup__close" href="#" title="Close">&nbsp;</a>
        <!--<div class="form-head">Confirming of an action</div>-->
        <div class="popup-inner forms-wrap">

            <form action="#" method="post" enctype="multipart/form-data"  id="rate" class="blueform clearfix" accept-charset="UTF-8">
                <div class="innerwrap ">
                    <div class="text"><p>Please leave feedback on the job</p></div>

                    <div class="form-group">
                        <label>What feedback do you want to make?</label>
                        <div class="rad-group">
                            <div class="rad-item">
                                <input name="choices" id="positive_fb" value="positive" checked="checked" type="radio">
                                <label for="positive_fb" id="label_positive_fb">Positive Feedback</label>
                            </div>
                            <div class="rad-item">
                                <input name="choices" id="neutral_fb" value="neutral" type="radio">
                                <label for="neutral_fb" id="label_neutral_fb">Neutral Feedback</label>
                            </div>
                            <div class="rad-item">
                                <input name="choices" id="negative_fb" value="negative" type="radio">
                                <label for="negative_fb" id="label_negative_fb">Negative Feedback</label>
                            </div>

                        </div>

                    </div>
                    <div class="form-group">
                        <label for="mes-fb" title="Mandatory field">Comment <span class="mandatory">*</span></label>
                        <textarea class="form-control" placeholder="Feedback" name="mes-fb" id="mes-fb" required="required"></textarea>
                        <p class="error">Please enter correct information</p>

                    </div>



                    <div class="form-actions">
                        <input type="submit" value="Rate" class="linkbtn greenbtn button" id="contact-form-submit" name="contact-form-submit">
                    </div>

                </div>
                <div class="form-mes"></div>
            </form>


        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery.min.js"></script>
<!--<script src="js/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="js/jcarousel.responsive.js"></script>-->
<script src="js/popper.min.js" crossorigin="anonymous"></script>
<script src="bootstrap/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="js/jquery.maskedinput.js" crossorigin="anonymous"></script>
<script src="js/jquery.colorbox-min.js"></script>
<script src="js/jquery.colorbox.js"></script>

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

    $( ".yes-btn" ).click(function() {
        $('.del_event').css('display', 'none');
        $('.job')
            .removeClass( "activejob" )
            .addClass( "closed" );
        //$('.close-job').remove();
        $('.job-details').prepend('<div class="pinkbox">Job is closed</div>');
        $('.listing-actions').html('<span class="main-option linkbtn bluebtn">RELIST</span><span class="linkbtn pinkbtn">RELIST WITH BIDS</span><span class="rate linkbtn greenbtn">Rate A Genie</span>');

        r = $('.rate_event');
        $('.rate').click(function() {

            r.css('display', 'block');
            return false;
        });

        $('.edit-rate').click(function () {
            r
                .find('.innerwrap')
                .css('display', 'block');
            r
                .find('.form-mes')
                .css('display', 'none');
            r.css('display', 'block');
            return false;
        })
        r.click(function(event) {
            e2 = event || window.event;
            if (e2.target == this) {
                $(r).css('display', 'none')
            }
        });
        $('.popup__close').click(function() {
            r.css('display', 'none');
        });

    });
    $( ".no-btn" ).click(function() {
        $('.del_event').css('display', 'none');

    });

    p = $('.del_event');
    $('.close-job').click(function() {

        p.css('display', 'block');
        return false;
    });
    p.click(function(event) {
        e = event || window.event;
        if (e.target == this) {
            $(p).css('display', 'none')
        }
    });
    $('.popup__close').click(function() {
        p.css('display', 'none');
    });

    $(window).on('load',function() {
        $( "#rate" ).on( "submit", function( event ) {
            $(this)
                .find('.innerwrap')
                .css('display', 'none');
            $(this)
                .trigger('reset')
                .find('.form-mes')
                .css('display', 'block')
                .text('Thank you for your feedback!');
            $('.rate').remove();
            $('#feedback-wrap')
                .css('display', 'block');


            event.preventDefault();
            //console.log( $( this ).serialize() );
        });


        $(".group1").colorbox({rel:'group1', maxWidth:"100%", maxHeight:"100%", title:""});

    });





</script>

</body>
</html>