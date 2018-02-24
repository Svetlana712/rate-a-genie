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
<div id="dashboard" class="customer">
    <?php include 'inc/customerheader.php'; ?>

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
                        <li><a href="#tabs-1">Active Jobs</a></li>
                        <li><a href="#tabs-2">Messages</a></li>
                        <li><a href="#tabs-3">Previous Jobs</a></li>
                    </ul>
                    <div id="tabs-1">
                        <div class="tab-inner">
                            <div class="tab-item listing">
                                <div class="main-container">
                                    <div class="col1 cols">
                                        <div class="img-container">
                                            <img src="img/dashboard/icon-category/null_image.png" alt="No thumbnail">
                                            <div class="accepted"></div>
                                        </div>
                                    </div>
                                    <div class="col2 cols">
                                        <div class="title" title="Broken screen"><a href="#"><span>Broken screen</span></a></div>
                                        <div class="date">Stapleford to Bere Alston</div>
                                        <div class="distance">256 miles</div>
                                    </div>
                                    <div class="col3 cols">
                                        <p class="best_price expired">Expired Job with no quotes</p>
                                    </div>
                                    <div class="col4 cols main-options">
                                        <a class="main-option linkbtn greenbtn view-quotes" href="#">VIEW QUOTES</a>
                                        <a class="main-option linkbtn bluebtn" href="#">RELIST</a>
                                        <a class="second-option linkbtn pinkbtn" href="#">Upgrade to premium</a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="listing-options">
                                    <div class="listing-more-options">
                                        <ul>
                                            <li class="option-delete"><a href="#" class="more-option">Delete</a></li>
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-information ng-scope">
                                <p><span class="no-listings">You have no active listings -</span>
                                    <a href="repair.html">Create a new listing here</a></p>
                            </div>
                        </div>

                    </div>
                    <div id="tabs-2" class="mailbox">
                        <div class="tab-inner">
                            <div class="ajax-paged" id="mailbox-inbox"><!-- class ajax-paged required to make pagination work -->
                                <div id="mailbox-selector">
                                    <p>Inbox | <a href="#" id="choose-sent">Sent</a></p>
                                </div>

                                <div class="grid-header-row">
                                    <div class="inner-cont">
                                    <span class="cols col1">&nbsp;</span>
                                    <span class="subject cols col2">Subject</span>
                                    <span class="username cols col3">From</span>
                                    <span class="lowest_bid cols col4">Quote</span>
                                    <span class="date cols col5"><a class="sorted-desc" href="#">Received</a></span>
                                    <span class="delete cols linkbtn bluebtn col6">Delete</span>
                                    </div>
                                </div>
                                <div class="mobile-grid-header-row">
                                    <div class="inner-cont">
                                        <span class="delete linkbtn bluebtn">Delete selected</span>
                                    </div>
                                </div>
                                <div data-id="56538705" id="ajax-get-message-thread-56538705" class="message has-more read-1 first-row">
                                    <div class="inner-cont">
                                        <div class="status unread cols col1"> &nbsp;</div>

                                        <div class="subject cols col2">GREEN 1100 Litre ROLLTOP Wheelie Bin with Drop...</div>
                                        <div class="username cols col3"><span class="provider accredited branded">DLSvans<span class="badge_container"> <img class="accredited" src="img/dashboard/badges/badge_provider_accredited.png" alt="Rate a Genie Accredited" title="Rate a Genie Accredited"> <img class="branded" src="img/dashboard/badges/badge_provider_branded.png" alt="Branded vans" title="Branded vans"></span> <span class="jobs">(82)</span></span></div>

                                        <div class="lowest_bid cols col4">&nbsp;</div>

                                        <div class="date cols col5"><span class="time-label" title="2017-11-07 16:53:10">86 days ago</span></div>
                                        <div class="delete cols col6"><input id="delete-comment-56538705" value="56538705" name="delete-comment-56538705" type="checkbox"></div>
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
                                                    <p class="chatting_nickname">DLSvans</p>
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
                                <div data-id="56536189" id="ajax-get-message-thread-56536189" class="message has-more read-1">
                                    <div class="inner-cont">
                                        <div class="status read cols col1"> &nbsp;</div>

                                        <div class="subject cols col2">GREEN 1100 Litre ROLLTOP Wheelie Bin with Drop...</div>
                                        <div class="username cols col3"><span class="provider accredited branded">Dlams<span class="badge_container"> <img class="accredited" src="img/dashboard/badges/badge_provider_accredited.png" alt="Rate a Genie Accredited" title="Rate a Genie Accredited"> <img class="branded" src="img/dashboard/badges/badge_provider_branded.png" alt="Branded vans" title="Branded vans"></span> <span class="jobs">(65)</span></span></div>

                                        <div class="lowest_bid cols col4">&nbsp;</div>

                                        <div class="date cols col5"><span class="time-label" title="2017-11-07 15:26:16">86 days ago</span></div>
                                        <div class="delete cols col6"><input id="delete-comment-56536189" value="56536189" name="delete-comment-56536189" type="checkbox"></div>
                                    </div>
                                    <div class="is-more">
                                        <div class="reply_block">
                                            <div class="reply-options">
                                            </div>
                                            <div class="reply-form">
                                                <form action="#" method="post" enctype="multipart/form-data" id="reply-form5a757c1334c65" accept-charset="UTF-8">
                                                    <div>
                                                        <input name="__IDENTreply-form5a747dfc3fd7b__" value="1" type="hidden">
                                                        <input name="__TIMESTAMP" value="1517583867" type="hidden">
                                                        <input name="__fw-token" value="__fw-token-ffac0666042757c9167b481cd10e52325a747dfbea03f" type="hidden">
                                                    </div>
                                                    <input name="send_all" id="reply-form5a757c1334c65-send_all" value="0" type="hidden">
                                                    <div class="form-row" id="form-row-reply-form5a757c1334c65-message_response">
                                                        <label for="reply-form5a757c1334c65-message_response">Reply Now:</label>
                                                        <textarea id="reply-form5a757c1334c65-message_response" name="message_response"></textarea>
                                                    </div>
                                                    <div class="buttons">
                                                        <input value="Send" class="mes-reply pinkbtn button" id="reply-form5a757c1334c65-submit-1" name="reply-form5a757c1334c65-submit-1" type="submit">
                                                        <input value="Send to All" class="mes-reply-all linkbtn bluebtn button disabled" id="reply-form5a757c1334c65-submit" name="reply-form5a747dfc3fd7b-submit" type="submit">
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
                                                    <p class="chatting_nickname">Dlams</p>
                                                </div>
                                            </div>
                                            <div class="bubble with-whois">
                                                <div class="arrow"></div>
                                                <div class="created_at">
                                                    7 Nov, 15:26
                                                </div>
                                                <div class="content">
                                                    hi we are available
                                                </div>
                                            </div>

                                            <div class="whois">
                                                <div class="whois-arrow"></div>
                                                <div class="about-title">About Me</div>
                                                <ul class="about">
                                                    <li>Feedback <span>93%</span></li>
                                                    <li>Jobs Completed <span>65</span></li>
                                                    <li>Insurance <span class="cross"></span></li>
                                                    <li>Verified <span class="tick"></span></li>
                                                </ul>
                                                <a href="#" class="linkbtn greenbtn view-prof">View Profile</a>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="clear" style="height:20px"></div>

                                        <div class="rollup"></div></div>
                                </div>
                                <div data-id="56507477" id="ajax-get-message-thread-56507477" class="message has-more read-1 ">
                                    <div class="inner-cont">
                                        <div class="status read cols col1"> &nbsp;</div>

                                        <div class="subject cols col2">GREEN 1100 Litre ROLLTOP Wheelie Bin with Drop...</div>
                                        <div class="username cols col3"><span class="provider online recommended_lvl5 accredited">Safelym1<span class="badge_container"> <img class="recommended_lvl5" src="img/dashboard/badges/badge_provider_recommended_lvl5.png" alt="Completed over 250 jobs + minimum 95% positive feedback" title="Completed over 250 jobs + minimum 95% positive feedback"> <img class="accredited" src="img/dashboard/badges/badge_provider_accredited.png" alt="Rate a Genie Accredited" title="Rate a Genie Accredited"></span> <span class="jobs">(285)</span></span></div>

                                        <div class="lowest_bid cols col4">&nbsp;</div>

                                        <div class="date cols col5"><span class="time-label" title="2017-11-06 12:20:14">87 days ago</span></div>
                                        <div class="delete cols col6"><input id="delete-comment-56507477" value="56507477" name="delete-comment-56507477" type="checkbox"></div>
                                    </div>
                                    <div class="is-more">
                                        <div class="reply_block">
                                            <div class="reply-options">
                                            </div>
                                            <div class="reply-form">
                                                <form action="#" method="post" enctype="multipart/form-data" id="reply-form5a757dce8eb86" accept-charset="UTF-8">
                                                    <div>
                                                        <input name="__IDENTreply-form5a757dce8eb86__" value="1" type="hidden">
                                                        <input name="__TIMESTAMP" value="1517583867" type="hidden">
                                                        <input name="__fw-token" value="__fw-token-ffac0666042757c9167b481cd10e52325a747dfbea03f" type="hidden">
                                                    </div>
                                                    <input name="send_all" id="reply-form5a757dce8eb86-send_all" value="0" type="hidden">
                                                    <div class="form-row" id="form-row-reply-form5a757dce8eb86-message_response">
                                                        <label for="reply-form5a757dce8eb86-message_response">Reply Now:</label>
                                                        <textarea id="reply-form5a757dce8eb86-message_response" name="message_response"></textarea>
                                                    </div>
                                                    <div class="buttons">
                                                        <input value="Send" class="mes-reply pinkbtn button" id="reply-form5a757dce8eb86-submit-1" name="reply-form5a747dfc3fd7b-submit-1" type="submit">
                                                        <input value="Send to All" class="mes-reply-all linkbtn bluebtn button disabled" id="reply-form5a757dce8eb86-submit" name="reply-form5a757dce8eb86-submit" type="submit">
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
                                                            <img src="img/dashboard/cust/thumb_1381960.jpg" alt="">
                                                            <span class="badge_container">
                                                                <span class="recommended_lvl5" title="Completed over 250 jobs + minimum 95% positive feedback"></span>
                                                                <span class="accredited" title="Rate a Genie Accredited"></span>
                                                            </span>
                                                        </div>
                                                    </a>
                                                    <p class="chatting_nickname">Safelym1</p>
                                                </div>
                                            </div>
                                            <div class="bubble with-whois">
                                                <div class="arrow"></div>
                                                <div class="created_at">
                                                    6 Nov, 12:20
                                                </div>
                                                <div class="content">
                                                    Please ask us if we're available anymore, before accepting our BID. Thanks.
                                                </div>
                                            </div>

                                            <div class="whois">
                                                <div class="whois-arrow"></div>
                                                <div class="about-title">About Me</div>
                                                <ul class="about">
                                                    <li>Feedback <span>100%</span></li>
                                                    <li>Jobs Completed <span>285</span></li>
                                                    <li>Insurance <span class="tick"></span></li>
                                                    <li>Verified <span class="tick"></span></li>
                                                    <li>Recommended <span class="tick"></span></li>
                                                </ul>
                                                <a href="#" class="linkbtn greenbtn view-prof">View Profile</a>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="clear" style="height:20px"></div>

                                        <div class="rollup"></div>
                                    </div>
                                </div>
                                <div data-id="53204973" id="ajax-get-message-thread-53204973" class="message has-more read-1">
                                    <div class="inner-cont">
                                    <div class="status read cols col1"> &nbsp;</div>

                                    <div class="subject cols col2">TIROLL GRASS SLEDGE Used Condition</div>
                                    <div class="username cols col3"><span class="provider power_shield_gold recommended_lvl5 accredited">AMGlt<span class="badge_container"> <img class="power_shield_gold" src="img/dashboard/badges/badge_provider_power_shield_gold.png" alt="Gold Power Mover – Over 1000+ Jobs" title="Gold Power Mover – Over 1000+ Jobs"> <img class="recommended_lvl5" src="img/dashboard/badges/badge_provider_recommended_lvl5.png" alt="Completed over 250 jobs + minimum 95% positive feedback" title="Completed over 250 jobs + minimum 95% positive feedback"> <img class="accredited" src="img/dashboard/badges/badge_provider_accredited.png" alt="Rate a Genie Accredited" title="Rate a Genie Accredited"></span> <span class="jobs">(1450)</span></span></div>

                                    <div class="lowest_bid cols col4"><a class="accept_bid" href="#">£95</a></div>

                                    <div class="date cols col5"><span class="time-label" title="2017-05-10 12:42:07">10/05/2017</span></div>
                                        <div class="delete cols col6"><input id="delete-comment-53204973" value="53204973" name="delete-comment-53204973" type="checkbox"></div>
                                    </div>
                                    <div class="is-more">
                                        <div class="reply_block">
                                            <div class="reply-options">
                                                <a class="message-accept-button" href="#">Accept quote</a>
                                            </div>
                                            <div class="reply-form">
                                                <form action="#" method="post" enctype="multipart/form-data" id="reply-form5a75850316d3b" accept-charset="UTF-8">
                                                    <div>
                                                        <input name="__IDENTreply-form5a757dce8eb86__" value="1" type="hidden">
                                                        <input name="__TIMESTAMP" value="1517583867" type="hidden">
                                                        <input name="__fw-token" value="__fw-token-ffac0666042757c9167b481cd10e52325a747dfbea03f" type="hidden">
                                                    </div>
                                                    <input name="send_all" id="reply-form5a75850316d3b-send_all" value="0" type="hidden">
                                                    <div class="form-row" id="form-row-reply-form5a75850316d3b-message_response">
                                                        <label for="reply-form5a75850316d3b-message_response">Reply Now:</label>
                                                        <textarea id="reply-form5a75850316d3b-message_response" name="message_response"></textarea>
                                                    </div>
                                                    <div class="buttons">
                                                        <input value="Send" class="mes-reply pinkbtn button" id="reply-form5a75850316d3b-submit-1" name="reply-form5a75850316d3b-submit-1" type="submit">
                                                        <input value="Send to All" class="mes-reply-all linkbtn bluebtn button disabled" id="reply-form5a75850316d3b-submit" name="reply-form5a75850316d3b-submit" type="submit">
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
                                                            <img src="img/dashboard/cust/thumb_2369630.jpg" alt="">
                                                            <span class="badge_container">
                                                                <span class="power_shield_gold" title="Gold Power Mover – Over 500+ Jobs"></span>
                                                                <span class="recommended_lvl5" title="Completed over 250 jobs + minimum 95% positive feedback"></span>
                                                                <span class="accredited" title="Rate a Genie Accredited"></span>
                                                            </span>
                                                        </div>
                                                    </a>
                                                    <p class="chatting_nickname">AMGlt</p>
                                                </div>
                                            </div>
                                            <div class="bubble with-whois">
                                                <div class="arrow"></div>
                                                <div class="created_at">
                                                    10 May, 12:42
                                                </div>
                                                <div class="content">
                                                    Please read before accepting our bid:<br><br>Our quote include:&nbsp;<br>
                                                    1.Fully equipped Luton Van (trolleys; Cargo blankets; straps; tools; tails lift; bungees)&nbsp;<br>
                                                    2.Loading/unloading and transport of your item/s&nbsp;<br>
                                                    3.Goods in Transit Insurance cover up to £10K<br>4.Public Liability Insurance cover up to £1M<br>
                                                    5.Load and/or unload within 25 meters of the doorway&nbsp;<br>6.Collection/delivery up to first floor&nbsp;<br>
                                                    7.Loading/unloading time up to 25 min&nbsp;<br><br>To avoid any misunderstanding please provide following information:&nbsp;<br>
                                                    1.Full list of items&nbsp;<br>2.Size and weight of the item&nbsp;<br>3.Floor number (flights of stairs/lift) from both sides&nbsp;<br>
                                                    4.Business or private addresses and opening time if it is a business place&nbsp;<br>5.Parking issues&nbsp;<br><br>
                                                    &nbsp;PLEASE NOTE:&nbsp;<br>Please make sure that your items are ready to moved&nbsp;<br>
                                                    If the items are too heavy for ONE PERSON, help will be needed for loading/unloading.&nbsp;<br>
                                                    Our offer is based on ONE MAN with Luton Van. If you need two porters, please let us know but please note that, maybe this will cost
                                                    you  extra charge.&nbsp;<br>Your list of items need to be at least 95% accurate.&nbsp;<br>
                                                    Extra charge will be applied if you are not notified us for the Items which are not on the list.<br>
                                                    The job has to be paid CASH on moving day or paid in advance through Bank transfer or PayPal&nbsp;<br>
                                                    Parking permission is the customer’s responsibility. In case that our van receives a penalty charge, it is also customer’s
                                                    responsibility to pay it.&nbsp;<br>All jobs can be cancelled for free up to 72 hours before the agreed day/date. If the cancellation
                                                    happens less than 72 hours before agreed day/date, charges up to 50% from the original price will be applied.&nbsp;<br><br>
                                                    PLEASE PAY ATTENTION: IF THE MOVING OF THE ITEM/S WITHOUT DAMAGING ISN’T POSSIBLE, WE WILL KEEP OUR RIGHT TO REFUSE TO COLLECT OR
                                                    DELIVER IT.&nbsp;<br>PLEASE NOTE THAT YOU ALWAYS HAVE TO CHECK AVAILABILITY WITH US BEFORE ACCEPTING OUR QUOTE. OTHERWISE, WE WILL
                                                    KEEP OUR RIGHT TO CANCEL IT OR CHANGE OUR PRICE!!!&nbsp;<br>By accepting our quote you also accept our terms and conditions!&nbsp;<br>
                                                    <br>Valeriya<br>AMGlt Team&nbsp;
                                                </div>
                                            </div>

                                            <div class="whois">
                                                <div class="whois-arrow"></div>
                                                <div class="about-title">About Me</div>
                                                <ul class="about">
                                                    <li>Quote <span>£95</span></li>
                                                    <li>Feedback <span>98%</span></li>
                                                    <li>Jobs Completed <span>1450</span></li>
                                                    <li>Insurance <span class="tick"></span></li>
                                                    <li>Verified <span class="tick"></span></li>
                                                    <li>Recommended <span class="tick"></span></li>
                                                    <li>Dates <span>Flexible</span></li>
                                                </ul>
                                                <a href="#" class="linkbtn greenbtn view-prof">View Profile</a>
                                                <a href="#" class="linkbtn pinkbtn view-prof">Accept Quote (£95)</a>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="clear" style="height:20px"></div>

                                        <div class="rollup"></div>
                                    </div>
                                </div>
                                <div data-id="53148902" id="ajax-get-message-thread-53148902" class="message has-more read-1">
                                    <div class="inner-cont">
                                    <div class="status read cols col1 replied"> &nbsp;</div>

                                    <div class="subject cols col2">TIROLL GRASS SLEDGE Used Condition</div>
                                    <div class="username cols col3"><span class="provider online power_shield_gold recommended_lvl5 accredited branded">Promasyl<span class="badge_container"> <img class="power_shield_gold" src="img/dashboard/badges/badge_provider_power_shield_gold.png" alt="Gold Power Mover – Over 1000+ Jobs" title="Gold Power Mover – Over 1000+ Jobs"> <img class="recommended_lvl5" src="img/dashboard/badges/badge_provider_recommended_lvl5.png" alt="Completed over 250 jobs + minimum 95% positive feedback" title="Completed over 250 jobs + minimum 95% positive feedback"> <img class="accredited" src="img/dashboard/badges/badge_provider_accredited.png" alt="Rate a Genie Accredited" title="Rate a Genie Accredited"> <img class="branded" src="img/dashboard/badges/badge_provider_branded.png" alt="Branded vans" title="Branded vans"></span> <span class="jobs">(2496)</span></span></div>

                                    <div class="lowest_bid cols col4"><a class="accept_bid" href="#">£100</a></div>

                                    <div class="date cols col5"><span class="time-label" title="2017-05-08 14:06:08">08/05/2017</span></div>
                                        <div class="delete cols col6"><input id="delete-comment-53148902" value="53148902" name="delete-comment-53148902" type="checkbox"></div>
                                    </div>
                                    <div class="is-more">
                                        <div class="reply_block">
                                            <div class="reply-options">
                                                <a class="message-accept-button" href="#">Accept quote</a>
                                            </div>
                                            <div class="reply-form">
                                                <form action="#" method="post" enctype="multipart/form-data" id="reply-form5a770d8a6a3a7" accept-charset="UTF-8">
                                                    <div>
                                                        <input name="__IDENTreply-form5a757dce8eb86__" value="1" type="hidden">
                                                        <input name="__TIMESTAMP" value="1517583867" type="hidden">
                                                        <input name="__fw-token" value="__fw-token-ffac0666042757c9167b481cd10e52325a747dfbea03f" type="hidden">
                                                    </div>
                                                    <input name="send_all" id="reply-form5a770d8a6a3a7-send_all" value="0" type="hidden">
                                                    <div class="form-row" id="form-row-reply-form5a770d8a6a3a7-message_response">
                                                        <label for="reply-form5a770d8a6a3a7-message_response">Reply Now:</label>
                                                        <textarea id="reply-form5a770d8a6a3a7-message_response" name="message_response"></textarea>
                                                    </div>
                                                    <div class="buttons">
                                                        <input value="Send" class="mes-reply pinkbtn button" id="reply-form5a770d8a6a3a7-submit-1" name="reply-form5a770d8a6a3a7-submit-1" type="submit">
                                                        <input value="Send to All" class="mes-reply-all linkbtn bluebtn button disabled" id="reply-form5a770d8a6a3a7-submit" name="reply-form5a770d8a6a3a7-submit" type="submit">
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
                                                    8 May, 14:19
                                                    <div class="sent">Sent!</div>
                                                </div>
                                                <div class="content">
                                                    Hi, thats too expensive. sorry
                                                </div>
                                            </div>

                                            <div class="clear"></div>
                                        </div>


                                        <div class="thread_item provider-first">
                                            <div class="user">
                                                <div class="profile_image">
                                                    <a href="#">
                                                        <div class="profile-image provider accredited">
                                                            <img src="img/dashboard/cust/thumb_2280601.jpg" alt="">
                                                            <span class="badge_container">
                                                                <span class="power_shield_gold" title="Gold Power Mover – Over 500+ Jobs"></span>
                                                                <span class="recommended_lvl5" title="Completed over 250 jobs + minimum 95% positive feedback"></span>
                                                                <span class="accredited" title="Rate a Genie Accredited"></span>
                                                            </span>
                                                        </div>
                                                    </a>
                                                    <p class="chatting_nickname">Promasyl</p>
                                                </div>
                                            </div>
                                            <div class="bubble with-whois">
                                                <div class="arrow"></div>
                                                <div class="created_at">
                                                    8 May, 14:06
                                                </div>
                                                <div class="content">
                                                    Dear customer,<br>We're more than happy to handle this job for you.<br>We are friendly and reliable with experience in furniture
                                                    removal from <br>single items to complete re-locations.<br>We provide:<br>- 2 hardworking men <br>- Loading,unloading and transport<br>
                                                    - All straps, blankets and trolley on board.<br>Please make sure that you have provided an inventory <br>that is as accurate as
                                                    possible because this quote is based on your list of items . <br>Before accepting our quote,please ceck availability.<br>
                                                    Kind regards
                                                </div>
                                            </div>

                                            <div class="whois">
                                                <div class="whois-arrow"></div>
                                                <div class="about-title">About Me</div>
                                                <ul class="about">
                                                    <li>Quote <span>£100</span></li>
                                                    <li>Feedback <span>99%</span></li>
                                                    <li>Jobs Completed <span>2520</span></li>
                                                    <li>Insurance <span class="tick"></span></li>
                                                    <li>Verified <span class="tick"></span></li>
                                                    <li>Recommended <span class="tick"></span></li>
                                                    <li>Dates <span>Flexible</span></li>
                                                </ul>
                                                <a href="#" class="linkbtn greenbtn view-prof">View Profile</a>
                                                <a href="#" class="linkbtn pinkbtn view-prof">Accept Quote (£100)</a>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="clear" style="height:20px"></div>

                                        <div class="rollup"></div>
                                    </div>
                                </div>
                                <div data-id="46517669" id="ajax-get-message-thread-46517669" class="message has-more read-1 ">
                                    <div class="inner-cont">
                                    <div class="status read cols col1"> &nbsp;</div>

                                    <div class="subject cols col2">Parcel (20x15x15in)</div>
                                    <div class="username cols col3"><span class="provider power_shield_silver recommended_lvl5 accredited">CAE_VAN<span class="badge_container"> <img class="power_shield_silver" src="img/dashboard/badges/badge_provider_power_shield_silver.png" alt="Silver Power Mover – Over 500+ Jobs" title="Silver Power Mover – Over 500+ Jobs"> <img class="recommended_lvl5" src="img/dashboard/badges/badge_provider_recommended_lvl5.png" alt="Completed over 250 jobs + minimum 95% positive feedback" title="Completed over 250 jobs + minimum 95% positive feedback"> <img class="accredited" src="img/dashboard/badges/badge_provider_accredited.png" alt="Rate a Genie Accredited" title="Rate a Genie Accredited"></span> <span class="jobs">(516)</span></span></div>

                                    <div class="lowest_bid cols col4">&nbsp;</div>

                                    <div class="date cols col5"><span class="time-label" title="2016-10-21 15:44:29">21/10/2016</span></div>
                                        <div class="delete cols col6"><input id="delete-comment-46517669" value="46517669" name="delete-comment-46517669" type="checkbox"></div>
                                    </div>
                                    <div class="is-more">
                                        <div class="reply_block">
                                            <div class="reply-options">
                                            </div>
                                            <div class="reply-form">
                                                <form action="#" method="post" enctype="multipart/form-data" id="reply-form5a7714cbc0d2a" accept-charset="UTF-8">
                                                    <div>
                                                        <input name="__IDENTreply-form5a7714cbc0d2a__" value="1" type="hidden">
                                                        <input name="__TIMESTAMP" value="1517583867" type="hidden">
                                                        <input name="__fw-token" value="__fw-token-ffac0666042757c9167b481cd10e52325a747dfbea03f" type="hidden">
                                                    </div>
                                                    <input name="send_all" id="reply-form5a7714cbc0d2a-send_all" value="0" type="hidden">
                                                    <div class="form-row" id="form-row-reply-form5a7714cbc0d2a-message_response">
                                                        <label for="reply-form5a7714cbc0d2a-message_response">Reply Now:</label>
                                                        <textarea id="reply-form5a7714cbc0d2a-message_response" name="message_response"></textarea>
                                                    </div>
                                                    <div class="buttons">
                                                        <input value="Send" class="mes-reply pinkbtn button" id="reply-form5a7714cbc0d2a-submit-1" name="reply-form5a7714cbc0d2a-submit-1" type="submit">
                                                        <input value="Send to All" class="mes-reply-all linkbtn bluebtn button disabled" id="reply-form5a770d8a6a3a75a7714cbc0d2a-submit" name="reply-form5a7714cbc0d2a-submit" type="submit">
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
                                                            <img src="img/dashboard/cust/thumb_2170030.jpg" alt="">
                                                            <span class="badge_container">
                                                                <span class="power_shield_gold" title="Gold Power Mover – Over 500+ Jobs"></span>
                                                                <span class="recommended_lvl5" title="Completed over 250 jobs + minimum 95% positive feedback"></span>
                                                                <span class="accredited" title="Rate a Genie Accredited"></span>
                                                            </span>
                                                        </div>
                                                    </a>
                                                    <p class="chatting_nickname">ACE_VAN</p>
                                                </div>
                                            </div>
                                            <div class="bubble with-whois">
                                                <div class="arrow"></div>
                                                <div class="created_at">
                                                    21 Oct, 15:44
                                                </div>
                                                <div class="content">
                                                    Not at that time unfortunately, can I be collected early afternoon?
                                                </div>
                                            </div>

                                            <div class="whois">
                                                <div class="whois-arrow"></div>
                                                <div class="about-title">About Me</div>
                                                <ul class="about">
                                                    <li>Feedback <span>100%</span></li>
                                                    <li>Jobs Completed <span>512</span></li>
                                                    <li>Insurance <span class="tick"></span></li>
                                                    <li>Verified <span class="tick"></span></li>
                                                    <li>Recommended <span class="tick"></span></li>
                                                </ul>
                                                <a href="#" class="linkbtn greenbtn view-prof">View Profile</a>
                                            </div>
                                            <div class="clear"></div>
                                        </div>

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
                                                    21 Oct, 11:01
                                                    <div class="sent">Sent!</div>
                                                </div>
                                                <div class="content">
                                                    hi i left my bag in Camden and there is no one there until 20:00. would it be ok to pick it up then and deliver tmrw?
                                                </div>
                                            </div>

                                            <div class="clear"></div>
                                        </div>
                                        <div class="thread_item">
                                            <div class="user">
                                                <div class="profile_image">
                                                    <a href="#">
                                                        <div class="profile-image provider accredited">
                                                            <img src="img/dashboard/cust/thumb_2170030.jpg" alt="">
                                                            <span class="badge_container">
                                                                <span class="power_shield_gold" title="Gold Power Mover – Over 500+ Jobs"></span>
                                                                <span class="recommended_lvl5" title="Completed over 250 jobs + minimum 95% positive feedback"></span>
                                                                <span class="accredited" title="Rate a Genie Accredited"></span>
                                                            </span>
                                                        </div>
                                                    </a>
                                                    <p class="chatting_nickname">ACE_VAN</p>
                                                </div>
                                            </div>
                                            <div class="bubble with-whois">
                                                <div class="arrow"></div>
                                                <div class="created_at">
                                                    21 Oct, 7:44
                                                </div>
                                                <div class="content">
                                                    Hi, Is tomorrow possible? I can complete this job for £120 if so.
                                                </div>
                                            </div>

                                        </div>

                                        <div class="clearfix"></div>

                                        <div class="rollup"></div>
                                    </div>
                                </div>
                                <div data-id="46500857" id="ajax-get-message-thread-46500857" class="message has-more read-1 ">
                                    <div class="inner-cont">
                                    <div class="status read cols col1 replied"> &nbsp;</div>

                                    <div class="subject cols col2">Parcel (20x15x15in)</div>
                                    <div class="username cols col3"><span class="provider power_shield_silver recommended_lvl5 accredited">BartNW<span class="badge_container"> <img class="power_shield_silver" src="img/dashboard/badges/badge_provider_power_shield_silver.png" alt="Silver Power Mover – Over 500+ Jobs" title="Silver Power Mover – Over 500+ Jobs"> <img class="recommended_lvl5" src="img/dashboard/badges/badge_provider_recommended_lvl5.png" alt="Completed over 250 jobs + minimum 95% positive feedback" title="Completed over 250 jobs + minimum 95% positive feedback"> <img class="accredited" src="img/dashboard/badges/badge_provider_accredited.png" alt="Rate a Genie Accredited" title="Rate a Genie Accredited"></span> <span class="jobs">(555)</span></span></div>

                                    <div class="lowest_bid cols col4">&nbsp;</div>

                                    <div class="date cols col5"><span class="time-label" title="2016-10-21 09:18:09">21/10/2016</span></div>
                                        <div class="delete cols col6"><input id="delete-comment-46500857" value="46500857" name="delete-comment-46500857" type="checkbox"></div>
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
                                                                <span class="power_shield_gold" title="Gold Power Mover – Over 500+ Jobs"></span>
                                                                <span class="recommended_lvl5" title="Completed over 250 jobs + minimum 95% positive feedback"></span>
                                                                <span class="accredited" title="Rate a Genie Accredited"></span>
                                                            </span>
                                                        </div>
                                                    </a>
                                                    <p class="chatting_nickname">BartNW</p>
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
                                                                <span class="power_shield_gold" title="Gold Power Mover – Over 500+ Jobs"></span>
                                                                <span class="recommended_lvl5" title="Completed over 250 jobs + minimum 95% positive feedback"></span>
                                                                <span class="accredited" title="Rate a Genie Accredited"></span>
                                                            </span>
                                                        </div>
                                                    </a>
                                                    <p class="chatting_nickname">BartNW</p>
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

                                <div class="main-pagination">
                                    <ul>
                                        <li class="page-indicator">Page 1 of 2</li>
                                        <!--<li class="page-first controls"></li> -->
                                        <li class="page-prev controls"><span class="previous-page-link">Prev</span></li>
                                        <!--<li class="surrounding-pages"></li> -->
                                        <li class="page-next controls"><a class="next-page-link" href="#">Next</a></li>
                                        <!--<li class="page-last controls"></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div id="tabs-3">
                        <div class="tab-inner">
                            <div class="tab-item listing">
                                <div class="main-container">
                                    <div class="col1 cols">
                                        <div class="img-container">
                                            <img src="img/dashboard/icon-category/null_image.png" alt="No thumbnail">
                                            <div class="accepted"></div>
                                        </div>
                                    </div>
                                    <div class="col2 cols">
                                        <div class="title" title="GREEN 1100 Litre ROLLTOP Wheelie Bin with Drop Down Front Recycling or Storage 2"><a href="#"><span>GREEN 1100 Litre ROLLTOP Wheelie Bin with Drop...</span></a></div>
                                        <div class="date">Stapleford to Bere Alston</div>
                                        <div class="distance">256 miles</div>
                                    </div>
                                    <div class="col3 cols">
                                        <p class="best_price expired">Expired Job with no quotes</p>
                                    </div>
                                    <div class="col4 cols main-options">
                                        <a class="main-option linkbtn greenbtn view-quotes" href="#">VIEW QUOTES</a>
                                        <a class="main-option linkbtn bluebtn" href="#">RELIST</a>
                                        <a class="second-option linkbtn pinkbtn" href="#">RELIST WITH BIDS</a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="listing-options">
                                    <div class="listing-more-options">
                                        <ul>
                                            <li class="option-delete"><a href="#" class="more-option">Delete</a></li>
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-item listing">
                                <div class="main-container">
                                    <div class="col1 cols">
                                        <div class="img-container">
                                            <img src="img/dashboard/icon-category/null_image_parcels.png" alt="No thumbnail">
                                            <div class="accepted"></div>
                                        </div>
                                    </div>
                                    <div class="col2 cols">
                                        <div class="title" title="Parcel (20x15x15in)"><a href="#"><span>Parcel (20x15x15in)</span></a></div>
                                        <div class="date">London to Pucklechurch</div>
                                        <div class="distance">112 miles</div>
                                    </div>
                                    <div class="col3 cols">
                                        <p class="best_price">Expired Job with<br><span>1 quote:</span></p>
                                        <p class="quote">£98</p>
                                    </div>
                                    <div class="col4 cols main-options">
                                        <a class="main-option linkbtn bluebtn" href="#">RELIST</a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="listing-options">
                                    <div class="listing-more-options">
                                        <ul>
                                            <li class="option-delete"><a href="#" class="more-option">Delete</a></li>
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-item listing">
                            <div class="main-container">
                                <div class="col1 cols">
                                    <div class="img-container">
                                        <img src="img/dashboard/icon-category/null_image_general_goods_move.png" alt="No thumbnail">
                                        <div class="accepted"></div>
                                    </div>
                                </div>
                                <div class="col2 cols">
                                    <div class="title" title="Moss"><a href="#"><span>Moss</span></a></div>
                                    <div class="date">Neittäväntie 818 to Bere Alston</div>
                                    <div class="distance">2,163 miles</div>
                                </div>
                                <div class="col3 cols">
                                    <p class="best_price">Expired Job with<br><span>1 quote:</span></p>
                                    <p class="quote">£1500</p>
                                </div>
                                <div class="col4 cols main-options">
                                    <a class="main-option linkbtn bluebtn" href="#">RELIST</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="listing-options">
                                <div class="listing-more-options">
                                    <ul>
                                        <li class="option-delete"><a href="#" class="more-option">Delete</a></li>
                                    </ul>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-item listing">
                            <div class="main-container">
                                <div class="col1 cols">
                                    <div class="img-container">
                                        <img src="img/dashboard/icon-category/null_image_general_goods_move.png" alt="No thumbnail">
                                        <div class="accepted"></div>
                                    </div>
                                </div>
                                <div class="col2 cols">
                                    <div class="title" title="Pickup 10 x 25kg bags of reindeer food in sealed bags (not on pallet)"><a href="#"><span>Pickup 10 x 25kg bags of reindeer food in sealed...</span></a></div>
                                    <div class="date">Blithbury to Bere Alston</div>
                                    <div class="distance">231 miles</div>
                                </div>
                                <div class="col3 cols">
                                    <p class="best_price">Expired Job with<br><span>9 quotes:</span></p>
                                    <p class="quote">£223</p>
                                </div>
                                <div class="col4 cols main-options">
                                    <a class="main-option linkbtn bluebtn" href="#">RELIST</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="listing-options">
                                <div class="listing-more-options">
                                    <ul>
                                        <li class="option-delete"><a href="#" class="more-option">Delete</a></li>
                                    </ul>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-item listing">
                            <div class="main-container">
                                <div class="col1 cols">
                                    <div class="img-container acceptedvis">
                                        <img src="img/dashboard/icon-category/null_image_vehicle-parts.png" alt="No thumbnail">
                                        <div class="accepted"></div>
                                    </div>
                                </div>
                                <div class="col2 cols">
                                    <div class="title" title="Inner door handle"><a href="#"><span>Inner door handle</span></a></div>
                                    <div class="date">Alphington to Tavistock</div>
                                    <div class="distance">40 miles</div>
                                </div>
                                <div class="col3 cols">
                                    <p class="best_price">Accepted price from <br><span>3 quotes:</span></p>
                                    <p class="quote">£30</p>
                                </div>
                                <div class="col4 cols main-options">
                                    <a class="main-option linkbtn greenbtn" target="_blank" href="#">VIEW COMPANY'S DETAILS</a>
                                    <a class="main-option linkbtn bluebtn" href="#">RELIST</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="listing-options">
                                <div class="listing-more-options">
                                    <ul>
                                        <li class="option-tracking"><a href="#" class="more-option option-tracker">Track your driver</a></li>
                                        <li class="option-addresses"><a href="#" class="more-option option-details">Edit Addresses</a></li>
                                        <li class="option-view-invoice"><a href="#" class="more-option option-invoice">View Invoice</a></li>
                                        <li class="option-archive"><a href="#" class="more-option option-archive-listing">Archive</a></li>
                                    </ul>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-item listing">
                            <div class="main-container">
                                <div class="col1 cols">
                                    <div class="img-container">
                                        <img src="img/dashboard/icon-category/null_image_livestock_move.png" alt="No thumbnail">
                                        <div class="accepted"></div>
                                    </div>
                                </div>
                                <div class="col2 cols">
                                    <div class="title" title="1 male reindeer after Xmas some time."><a href="#"><span>1 male reindeer after Xmas some time.</span></a></div>
                                    <div class="date">Ripon to Bere Alston</div>
                                    <div class="distance">350 miles</div>
                                </div>
                                <div class="col3 cols">
                                    <p class="best_price">Expired Job with <br><span>3 quotes:</span></p>
                                    <p class="quote">£424</p>
                                </div>
                                <div class="col4 cols main-options">
                                    <a class="main-option linkbtn bluebtn" href="#">RELIST</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="listing-options">
                                <div class="listing-more-options">
                                    <ul>
                                        <li class="option-delete"><a href="#" class="more-option">Delete</a></li>
                                    </ul>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-item listing">
                            <div class="main-container">
                                <div class="col1 cols">
                                    <div class="img-container acceptedvis">
                                        <img src="img/dashboard/icon-category/862780.jpg" alt="No thumbnail">
                                        <div class="accepted"></div>
                                    </div>
                                </div>
                                <div class="col2 cols">
                                    <div class="title" title="Life Fitness T9i treadmill"><a href="#"><span>Life Fitness T9i treadmill</span></a></div>
                                    <div class="date">Bognor Regis to Yelverton</div>
                                    <div class="distance">195 miles</div>
                                </div>
                                <div class="col3 cols">
                                    <p class="best_price">Accepted price from <br><span>9 quotes:</span></p>
                                    <p class="quote">£114</p>
                                </div>
                                <div class="col4 cols main-options">
                                    <a class="main-option linkbtn greenbtn" target="_blank" href="#">VIEW COMPANY'S DETAILS</a>
                                    <a class="main-option linkbtn bluebtn" href="#">RELIST</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="listing-options">
                                <div class="listing-more-options">
                                    <ul>
                                        <li class="option-tracking"><a href="#" class="more-option option-tracker">Track your driver</a></li>
                                        <li class="option-addresses"><a href="#" class="more-option option-details">Edit Addresses</a></li>
                                        <li class="option-view-invoice"><a href="#" class="more-option option-invoice">View Invoice</a></li>
                                        <li class="option-archive"><a href="#" class="more-option option-archive-listing">Archive</a></li>
                                    </ul>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <?php include 'inc/customerfooter.php'; ?>
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