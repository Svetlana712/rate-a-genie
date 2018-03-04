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

    <title>Messages</title>
</head>
<body>
<div id="messages" class="genie">
    <?php include 'inc/genieheader.php'; ?>

    <div class="content">

        <div class="container clearfix">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-12">
                <div class="page_title">
                    <div class="wrap">
                        <h1>Messages</h1>
                        <ul id="breadcrumb">
                            <li><a href="#">Rate A Genie</a></li>
                            <li>Messages</li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-12">


                <div id="rooms">
                    <div class="rooms-header">
                        <div class="left-col">
                            <div class="room-search">
                                <div class="wrap">
                                    <div id="form-search-mes">
                                        <input name="search-mes" id="search-mes" value="" maxlength="255" class="form-control" placeholder="Search message" type="text">
                                    </div>
                                    <input value="Search message" class="search-icon" id="chat-search" name="chat-search" type="button" onclick="javascript: return false;" title="Search">

                                </div>
                            </div>

                        </div>
                        <div class="right-col">
                            <div class="current-room">
                                <div class="room-title">
                                    <div class="mes-from"><a href="view-prof-cust.php" class="user-name" title="View profile">Maxim</a><span class="time" title="Tuesday, January 16, 2018 5:36 PM">5:36 PM</span> </div>
                                    <div class="room-name"><a href="jobgenie.php" title="View job posting">Broken Screen GREEN 1100 Litre ROLLTOP Wheelie Bin with Drop...</a></div>
                                </div>
                                <div class="actions">
                                    <a class="linkbtn greenbtn" href="jobgenie.php">View job posting</a>
                                </div>


                            </div>

                        </div>
                    </div>
                    <div class="return-list-room linkbtn pinkbtn">Back to room list</div>
                    <div class="rooms-content">
                        <div class="left-col">
                            <div class="room-filters">
                                <form action="#" method="post" id="filter-room-form" accept-charset="UTF-8">
                                    <div class="form-inner">
                                        <div id="filter-room">
                                            <select name="filter-sel" id="filter-sel" class="form-control">
                                                <option value="0">All recent</option>
                                                <option value="1">Unread</option>
                                                <option value="2">Accepted bid</option>
                                            </select>
                                        </div>

                                    </div>

                                </form>
                            </div>
                            <div class="list-room">
                                <div class="room active">
                                    <div class="room-icon away" title="away"><img src="img/dashboard/dashboard_profile_default.png" alt="Room icon"></div>
                                    <div class="room-info">
                                        <div class="mes-from"><span class="user-name">Maxim</span><span class="date">12/16/18</span> </div>
                                        <div class="mes-cont"><span class="job-title">Broken Screen GREEN 1100 Litre ROLLTOP Wheelie Bin with Drop...</span><span class="unread-col" title="Unread message">2</span></div>
                                    </div>
                                    <div class="room-messages-box">

                                            <div class="room-messages-list">
                                                <div class="room-message current-user">
                                                    <div class="user-icon online" title="online"><img src="img/faqs/team-member6.png" alt="Current user image"></div>
                                                    <div class="mes-content">
                                                        <div class="mes-title">
                                                            <span class="mes-author">Laura</span>
                                                            <span class="time" title="Tuesday, January 16, 2018 5:36 PM">5:36 PM</span>
                                                        </div>
                                                        <div class="mes-inner">
                                                            <div class="mes-text">
                                                                Hi<br>Please accept my bid by clicking on accept and we can book you in asap.<br>Thanks<br>Lawrance
                                                            </div>
                                                            <div class="mes-actions">
                                                                <div class="edit-mes" title="Edit Message"></div>
                                                                <div class="del-mes" title="Delete Message"></div>
                                                            </div>

                                                        </div>
                                                        <div class="attached">
                                                            <h5>Attachments</h5>
                                                            <div class="attached-content">
                                                                <div class="attach-item"><a href="img/dashboard/iconPlus.png" class="attach-link" target="_blank">iconPlus.png</a><span class="del-attach" title="Delete attachment"></span> </div>
                                                                <div class="attach-item"><a href="img/dashboard/iconPlus.png" class="attach-link" target="_blank">iconPlus.png</a><span class="del-attach" title="Delete attachment"></span> </div>
                                                                <div class="attach-item"><a href="img/dashboard/iconPlus.png" class="attach-link" target="_blank">iconPlus.png</a><span class="del-attach" title="Delete attachment"></span> </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="room-message">
                                                    <div class="user-icon away" title="away"><img src="img/dashboard/dashboard_profile_default.png" alt="User image"></div>
                                                    <div class="mes-content">
                                                        <div class="mes-title">
                                                            <span class="mes-author">Maxim</span>
                                                            <span class="time" title="Tuesday, January 16, 2018 5:48 PM">5:48 PM</span>
                                                        </div>
                                                        <div class="mes-inner">
                                                            <div class="mes-text">
                                                                Hi, thats too expensive. sorry
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="room-message deleted">
                                                    <div class="user-icon away" title="away"><img src="img/dashboard/dashboard_profile_default.png" alt="User image"></div>
                                                    <div class="mes-content">
                                                        <div class="mes-title">
                                                            <span class="mes-author">Maxim</span><span class="deleted-mes mes-changes" title="Message deleted"></span>
                                                            <span class="time" title="Tuesday, January 16, 2018 5:48 PM">5:48 PM</span>
                                                        </div>
                                                        <div class="mes-inner">
                                                            <div class="mes-text">
                                                                Message deleted
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="room-message deleted">
                                                    <div class="user-icon away" title="away"><img src="img/dashboard/dashboard_profile_default.png" alt="User image"></div>
                                                    <div class="mes-content">
                                                        <div class="mes-title">
                                                            <span class="mes-author">Maxim</span><span class="deleted-mes mes-changes" title="Message deleted"></span>
                                                            <span class="time" title="Tuesday, January 16, 2018 5:48 PM">5:48 PM</span>
                                                        </div>
                                                        <div class="mes-inner">
                                                            <div class="mes-text">
                                                                Message deleted
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="room-message current-user deleted">
                                                    <div class="user-icon online" title="online"><img src="img/faqs/team-member6.png" alt="Current user image"></div>
                                                    <div class="mes-content">
                                                        <div class="mes-title">
                                                            <span class="mes-author">Laura</span><span class="deleted-mes mes-changes" title="Message deleted"></span>
                                                            <span class="time" title="Tuesday, January 16, 2018 6:36 PM">6:36 PM</span>
                                                        </div>

                                                        <div class="mes-inner">
                                                            <div class="mes-text">
                                                                Message deleted
                                                            </div>
                                                            <div class="mes-actions">
                                                                <div class="edit-mes" title="Edit Message"></div>
                                                                <div class="del-mes" title="Delete Message"></div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="room-message current-user edited">
                                                    <div class="user-icon online" title="online"><img src="img/faqs/team-member6.png" alt="Current user image"></div>
                                                    <div class="mes-content">
                                                        <div class="mes-title">
                                                            <span class="mes-author">Laura</span><span class="edited-mes mes-changes" title="Message edited"></span>
                                                            <span class="time" title="Tuesday, January 16, 2018 6:36 PM">16:36 PM</span>
                                                        </div>

                                                        <div class="mes-inner">
                                                            <div class="mes-text">
                                                                I can decrease bid a little
                                                            </div>
                                                            <div class="mes-actions">
                                                                <div class="edit-mes" title="Edit Message"></div>
                                                                <div class="del-mes" title="Delete Message"></div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="room-message edited">
                                                    <div class="user-icon away" title="away"><img src="img/dashboard/dashboard_profile_default.png" alt="User image"></div>
                                                    <div class="mes-content">
                                                        <div class="mes-title">
                                                            <span class="mes-author">Maxim</span><span class="edited-mes mes-changes" title="Message edited"></span>
                                                            <span class="time" title="Tuesday, January 16, 2018 7:48 PM">7:48 PM</span>
                                                        </div>
                                                        <div class="mes-text">
                                                            No. Thanks
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="room-message current-user">
                                                    <div class="user-icon online" title="online"><img src="img/faqs/team-member6.png" alt="Current user image"></div>
                                                    <div class="mes-content">
                                                        <div class="mes-title">
                                                            <span class="mes-author">Laura</span>
                                                            <span class="time" title="Tuesday, January 16, 2018 5:36 PM">5:36 PM</span>
                                                        </div>
                                                        <div class="mes-inner">
                                                            <div class="mes-text">
                                                                Hi<br>Please accept my bid by clicking on accept and we can book you in asap. Please accept my bid by clicking on accept and we can book you in asap. Please accept my bid by clicking on accept and we can book you in asap. Please accept my bid by clicking on accept and we can book you in asap. Please accept my bid by clicking on accept and we can book you in asap.<br>Thanks<br>Lawrance
                                                            </div>
                                                            <div class="mes-actions">
                                                                <div class="edit-mes" title="Edit Message"></div>
                                                                <div class="del-mes" title="Delete Message"></div>
                                                            </div>

                                                        </div>
                                                        <div class="attached">
                                                            <h5>Attachments</h5>
                                                            <div class="attached-content">
                                                                <div class="attach-item"><a href="img/dashboard/iconPlus.png" class="attach-link" target="_blank">iconPlus.png</a><span class="del-attach" title="Delete attachment"></span> </div>
                                                                <div class="attach-item"><a href="img/dashboard/iconPlus.png" class="attach-link" target="_blank">iconPlus.png</a><span class="del-attach" title="Delete attachment"></span> </div>
                                                                <div class="attach-item"><a href="img/dashboard/iconPlus.png" class="attach-link" target="_blank">iconPlus.png</a><span class="del-attach" title="Delete attachment"></span> </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="room-message">
                                                    <div class="user-icon away" title="away"><img src="img/dashboard/dashboard_profile_default.png" alt="User image"></div>
                                                    <div class="mes-content">
                                                        <div class="mes-title">
                                                            <span class="mes-author">Maxim</span>
                                                            <span class="time" title="Tuesday, January 16, 2018 5:48 PM">5:48 PM</span>
                                                        </div>
                                                        <div class="mes-inner">
                                                            <div class="mes-text">
                                                                Hi, thats too expensive. sorry
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>


                                                <div class="room-message current-user edited unread">
                                                    <div class="user-icon online" title="online"><img src="img/faqs/team-member6.png" alt="Current user image"></div>
                                                    <div class="mes-content">
                                                        <div class="mes-title">
                                                            <span class="mes-author">Laura</span><span class="edited-mes mes-changes" title="Message edited"></span><span class="unread-mes mes-changes" title="Message unread"></span>
                                                            <span class="time" title="Tuesday, January 16, 2018 6:36 PM">6:36 PM</span>
                                                        </div>

                                                        <div class="mes-inner">
                                                            <div class="mes-text">
                                                                I can decrease bid a little
                                                            </div>
                                                            <div class="mes-actions">
                                                                <div class="edit-mes" title="Edit Message"></div>
                                                                <div class="del-mes" title="Delete Message"></div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="room-message current-user unread">
                                                    <div class="user-icon online" title="online"><img src="img/faqs/team-member6.png" alt="Current user image"></div>
                                                    <div class="mes-content">
                                                        <div class="mes-title">
                                                            <span class="mes-author">Laura</span><span class="unread-mes mes-changes" title="Message unread"></span>
                                                            <span class="time" title="Tuesday, January 16, 2018 6:36 PM">6:36 PM</span>
                                                        </div>

                                                        <div class="mes-inner">
                                                            <div class="mes-text">
                                                                I can decrease bid a little
                                                            </div>
                                                            <div class="mes-actions">
                                                                <div class="edit-mes" title="Edit Message"></div>
                                                                <div class="del-mes" title="Delete Message"></div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>


                                            </div>


                                    </div>
                                </div>
                                <div class="room">
                                    <div class="room-icon online" title="online"><img src="img/faqs/team-member5.png" alt="Room icon"></div>
                                    <div class="room-info">
                                        <div class="mes-from"><span class="user-name">Helen</span><span class="date">1/10/18</span> </div>
                                        <div class="mes-cont"><span class="job-title">Software problem</span></div>
                                    </div>
                                    <div class="room-messages-box">

                                        <div class="room-messages-list">
                                            <div class="room-message current-user">
                                                <div class="user-icon online" title="online"><img src="img/faqs/team-member6.png" alt="Current user image"></div>
                                                <div class="mes-content">
                                                    <div class="mes-title">
                                                        <span class="mes-author">Laura</span>
                                                        <span class="time" title="Tuesday, January 16, 2018 5:36 PM">5:36 PM</span>
                                                    </div>
                                                    <div class="mes-inner">
                                                        <div class="mes-text">
                                                            Hi<br>Please accept my bid by clicking on accept and we can book you in asap.<br>Thanks<br>Lawrance
                                                        </div>
                                                        <div class="mes-actions">
                                                            <div class="edit-mes" title="Edit Message"></div>
                                                            <div class="del-mes" title="Delete Message"></div>
                                                        </div>

                                                    </div>
                                                    <div class="attached">
                                                        <h5>Attachments</h5>
                                                        <div class="attached-content">
                                                            <div class="attach-item"><a href="img/dashboard/iconPlus.png" class="attach-link" target="_blank">iconPlus.png</a><span class="del-attach" title="Delete attachment"></span> </div>
                                                            <div class="attach-item"><a href="img/dashboard/iconPlus.png" class="attach-link" target="_blank">iconPlus.png</a><span class="del-attach" title="Delete attachment"></span> </div>
                                                            <div class="attach-item"><a href="img/dashboard/iconPlus.png" class="attach-link" target="_blank">iconPlus.png</a><span class="del-attach" title="Delete attachment"></span> </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="room-message">
                                                <div class="user-icon away" title="away"><img src="img/faqs/team-member5.png" alt="User image"></div>
                                                <div class="mes-content">
                                                    <div class="mes-title">
                                                        <span class="mes-author">Helen</span>
                                                        <span class="time" title="Tuesday, January 16, 2018 5:48 PM">5:48 PM</span>
                                                    </div>
                                                    <div class="mes-inner">
                                                        <div class="mes-text">
                                                            Hi, thats too expensive. sorry
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="room-message deleted">
                                                <div class="user-icon away" title="away"><img src="img/faqs/team-member5.png" alt="User image"></div>
                                                <div class="mes-content">
                                                    <div class="mes-title">
                                                        <span class="mes-author">Helen</span><span class="deleted-mes mes-changes" title="Message deleted"></span>
                                                        <span class="time" title="Tuesday, January 16, 2018 5:48 PM">5:48 PM</span>
                                                    </div>
                                                    <div class="mes-inner">
                                                        <div class="mes-text">
                                                            Message deleted
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                            <div class="room-message deleted">
                                                <div class="user-icon away" title="away"><img src="img/faqs/team-member5.png" alt="User image"></div>
                                                <div class="mes-content">
                                                    <div class="mes-title">
                                                        <span class="mes-author">Helen</span><span class="deleted-mes mes-changes" title="Message deleted"></span>
                                                        <span class="time" title="Tuesday, January 16, 2018 5:48 PM">5:48 PM</span>
                                                    </div>
                                                    <div class="mes-inner">
                                                        <div class="mes-text">
                                                            Message deleted
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                            <div class="room-message current-user deleted">
                                                <div class="user-icon online" title="online"><img src="img/faqs/team-member6.png" alt="Current user image"></div>
                                                <div class="mes-content">
                                                    <div class="mes-title">
                                                        <span class="mes-author">Laura</span><span class="deleted-mes mes-changes" title="Message deleted"></span>
                                                        <span class="time" title="Tuesday, January 16, 2018 6:36 PM">6:36 PM</span>
                                                    </div>

                                                    <div class="mes-inner">
                                                        <div class="mes-text">
                                                            Message deleted
                                                        </div>
                                                        <div class="mes-actions">
                                                            <div class="edit-mes" title="Edit Message"></div>
                                                            <div class="del-mes" title="Delete Message"></div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="room-message current-user edited">
                                                <div class="user-icon online" title="online"><img src="img/faqs/team-member6.png" alt="Current user image"></div>
                                                <div class="mes-content">
                                                    <div class="mes-title">
                                                        <span class="mes-author">Laura Laura Laura Laura Laura Laura Laura Laura Laura Laura Laura Laura Laura</span><span class="edited-mes mes-changes" title="Message edited"></span>
                                                        <span class="time" title="Tuesday, January 16, 2018 6:36 PM">16:36 PM</span>
                                                    </div>

                                                    <div class="mes-inner">
                                                        <div class="mes-text">
                                                            I can decrease bid a little
                                                        </div>
                                                        <div class="mes-actions">
                                                            <div class="edit-mes" title="Edit Message"></div>
                                                            <div class="del-mes" title="Delete Message"></div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="room-message edited">
                                                <div class="user-icon away" title="away"><img src="img/faqs/team-member5.png" alt="User image"></div>
                                                <div class="mes-content">
                                                    <div class="mes-title">
                                                        <span class="mes-author">Helen</span><span class="edited-mes mes-changes" title="Message edited"></span>
                                                        <span class="time" title="Tuesday, January 16, 2018 7:48 PM">7:48 PM</span>
                                                    </div>
                                                    <div class="mes-text">
                                                        No. Thanks
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="room-message current-user">
                                                <div class="user-icon online" title="online"><img src="img/faqs/team-member6.png" alt="Current user image"></div>
                                                <div class="mes-content">
                                                    <div class="mes-title">
                                                        <span class="mes-author">Laura</span>
                                                        <span class="time" title="Tuesday, January 16, 2018 5:36 PM">5:36 PM</span>
                                                    </div>
                                                    <div class="mes-inner">
                                                        <div class="mes-text">
                                                            Hi<br>Please accept my bid by clicking on accept and we can book you in asap. Please accept my bid by clicking on accept and we can book you in asap. Please accept my bid by clicking on accept and we can book you in asap. Please accept my bid by clicking on accept and we can book you in asap. Please accept my bid by clicking on accept and we can book you in asap.<br>Thanks<br>Lawrance
                                                        </div>
                                                        <div class="mes-actions">
                                                            <div class="edit-mes" title="Edit Message"></div>
                                                            <div class="del-mes" title="Delete Message"></div>
                                                        </div>

                                                    </div>
                                                    <div class="attached">
                                                        <h5>Attachments</h5>
                                                        <div class="attached-content">
                                                            <div class="attach-item"><a href="img/dashboard/iconPlus.png" class="attach-link" target="_blank">iconPlus.png</a><span class="del-attach" title="Delete attachment"></span> </div>
                                                            <div class="attach-item"><a href="img/dashboard/iconPlus.png" class="attach-link" target="_blank">iconPlus.png</a><span class="del-attach" title="Delete attachment"></span> </div>
                                                            <div class="attach-item"><a href="img/dashboard/iconPlus.png" class="attach-link" target="_blank">iconPlus.png</a><span class="del-attach" title="Delete attachment"></span> </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="room-message">
                                                <div class="user-icon away" title="away"><img src="img/faqs/team-member5.png" alt="User image"></div>
                                                <div class="mes-content">
                                                    <div class="mes-title">
                                                        <span class="mes-author">Helen</span>
                                                        <span class="time" title="Tuesday, January 16, 2018 5:48 PM">5:48 PM</span>
                                                    </div>
                                                    <div class="mes-inner">
                                                        <div class="mes-text">
                                                            Hi, thats too expensive. sorry
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>


                                            <div class="room-message current-user edited unread">
                                                <div class="user-icon online" title="online"><img src="img/faqs/team-member6.png" alt="Current user image"></div>
                                                <div class="mes-content">
                                                    <div class="mes-title">
                                                        <span class="mes-author">Laura</span><span class="edited-mes mes-changes" title="Message edited"></span><span class="unread-mes mes-changes" title="Message unread"></span>
                                                        <span class="time" title="Tuesday, January 16, 2018 6:36 PM">6:36 PM</span>
                                                    </div>

                                                    <div class="mes-inner">
                                                        <div class="mes-text">
                                                            I can decrease bid a little
                                                        </div>
                                                        <div class="mes-actions">
                                                            <div class="edit-mes" title="Edit Message"></div>
                                                            <div class="del-mes" title="Delete Message"></div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="room-message current-user unread">
                                                <div class="user-icon online" title="online"><img src="img/faqs/team-member6.png" alt="Current user image"></div>
                                                <div class="mes-content">
                                                    <div class="mes-title">
                                                        <span class="mes-author">Laura</span><span class="unread-mes mes-changes" title="Message unread"></span>
                                                        <span class="time" title="Tuesday, January 16, 2018 6:36 PM">6:36 PM</span>
                                                    </div>

                                                    <div class="mes-inner">
                                                        <div class="mes-text">
                                                            I can decrease bid a little
                                                        </div>
                                                        <div class="mes-actions">
                                                            <div class="edit-mes" title="Edit Message"></div>
                                                            <div class="del-mes" title="Delete Message"></div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>


                                        </div>


                                    </div>
                                </div>
                                <div class="room">
                                    <div class="room-icon" title="offline"><img src="img/faqs/team-member3.png" alt="Room icon"></div>
                                    <div class="room-info">
                                        <div class="mes-from"><span class="user-name">Marie</span><span class="date">1/08/18</span> </div>
                                        <div class="mes-cont"><span class="job-title">Broken Screen</span></div>
                                    </div>
                                    <div class="room-messages-box">
                                        <div class="room-messages-list">
                                            <div class="room-message current-user">
                                                <div class="user-icon online" title="online"><img src="img/faqs/team-member6.png" alt="Current user image"></div>
                                                <div class="mes-content">
                                                    <div class="mes-title">
                                                        <span class="mes-author">Laura</span>
                                                        <span class="time" title="Tuesday, January 16, 2018 5:36 PM">5:36 PM</span>
                                                    </div>
                                                    <div class="mes-inner">
                                                        <div class="mes-text">
                                                            Hi<br>Please accept my bid by clicking on accept and we can book you in asap.<br>Thanks<br>Lawrance
                                                        </div>
                                                        <div class="mes-actions">
                                                            <div class="edit-mes" title="Edit Message"></div>
                                                            <div class="del-mes" title="Delete Message"></div>
                                                        </div>

                                                    </div>
                                                    <div class="attached">
                                                        <h5>Attachments</h5>
                                                        <div class="attached-content">
                                                            <div class="attach-item"><a href="img/dashboard/iconPlus.png" class="attach-link" target="_blank">iconPlus.png</a><span class="del-attach" title="Delete attachment"></span> </div>
                                                            <div class="attach-item"><a href="img/dashboard/iconPlus.png" class="attach-link" target="_blank">iconPlus.png</a><span class="del-attach" title="Delete attachment"></span> </div>
                                                            <div class="attach-item"><a href="img/dashboard/iconPlus.png" class="attach-link" target="_blank">iconPlus.png</a><span class="del-attach" title="Delete attachment"></span> </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="room">
                                    <div class="room-icon" title="offline"><img src="img/faqs/team-member2.png" alt="Room icon"></div>
                                    <div class="room-info">
                                        <div class="mes-from"><span class="user-name">Marie</span><span class="date">1/08/18</span> </div>
                                        <div class="mes-cont"><span class="job-title">Broken Screen</span></div>
                                    </div>
                                    <div class="room-messages-box">
                                        <div class="room-messages-list">
                                            <div class="room-message current-user">
                                                <div class="user-icon online" title="online"><img src="img/faqs/team-member6.png" alt="Current user image"></div>
                                                <div class="mes-content">
                                                    <div class="mes-title">
                                                        <span class="mes-author">Laura</span>
                                                        <span class="time" title="Tuesday, January 16, 2018 5:36 PM">5:36 PM</span>
                                                    </div>
                                                    <div class="mes-inner">
                                                        <div class="mes-text">
                                                            Hi<br>Please accept my bid by clicking on accept and we can book you in asap.<br>Thanks<br>Lawrance
                                                        </div>
                                                        <div class="mes-actions">
                                                            <div class="edit-mes" title="Edit Message"></div>
                                                            <div class="del-mes" title="Delete Message"></div>
                                                        </div>

                                                    </div>
                                                    <div class="attached">
                                                        <h5>Attachments</h5>
                                                        <div class="attached-content">
                                                            <div class="attach-item"><a href="img/dashboard/iconPlus.png" class="attach-link" target="_blank">iconPlus.png</a><span class="del-attach" title="Delete attachment"></span> </div>
                                                            <div class="attach-item"><a href="img/dashboard/iconPlus.png" class="attach-link" target="_blank">iconPlus.png</a><span class="del-attach" title="Delete attachment"></span> </div>
                                                            <div class="attach-item"><a href="img/dashboard/iconPlus.png" class="attach-link" target="_blank">iconPlus.png</a><span class="del-attach" title="Delete attachment"></span> </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="room">
                                    <div class="room-icon" title="offline"><img src="img/faqs/team-member1.png" alt="Room icon"></div>
                                    <div class="room-info">
                                        <div class="mes-from"><span class="user-name">Marie</span><span class="date">1/08/18</span> </div>
                                        <div class="mes-cont"><span class="job-title">Broken Screen</span><span class="unread-col" title="Unread message">1</span></div>
                                    </div>
                                    <div class="room-messages-box">
                                        <div class="room-messages-list">
                                            <div class="room-message current-user">
                                                <div class="user-icon online" title="online"><img src="img/faqs/team-member6.png" alt="Current user image"></div>
                                                <div class="mes-content">
                                                    <div class="mes-title">
                                                        <span class="mes-author">Laura</span>
                                                        <span class="time" title="Tuesday, January 16, 2018 5:36 PM">5:36 PM</span>
                                                    </div>
                                                    <div class="mes-inner">
                                                        <div class="mes-text">
                                                            Hi<br>Please accept my bid by clicking on accept and we can book you in asap.<br>Thanks<br>Lawrance
                                                        </div>
                                                        <div class="mes-actions">
                                                            <div class="edit-mes" title="Edit Message"></div>
                                                            <div class="del-mes" title="Delete Message"></div>
                                                        </div>

                                                    </div>
                                                    <div class="attached">
                                                        <h5>Attachments</h5>
                                                        <div class="attached-content">
                                                            <div class="attach-item"><a href="img/dashboard/iconPlus.png" class="attach-link" target="_blank">iconPlus.png</a><span class="del-attach" title="Delete attachment"></span> </div>
                                                            <div class="attach-item"><a href="img/dashboard/iconPlus.png" class="attach-link" target="_blank">iconPlus.png</a><span class="del-attach" title="Delete attachment"></span> </div>
                                                            <div class="attach-item"><a href="img/dashboard/iconPlus.png" class="attach-link" target="_blank">iconPlus.png</a><span class="del-attach" title="Delete attachment"></span> </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="room">
                                    <div class="room-icon" title="offline"><img src="img/faqs/team-member2.png" alt="Room icon"></div>
                                    <div class="room-info">
                                        <div class="mes-from"><span class="user-name">Marie</span><span class="date">1/08/18</span> </div>
                                        <div class="mes-cont"><span class="job-title">Broken Screen</span></div>
                                    </div>
                                    <div class="room-messages-box">
                                        <div class="room-messages-list">
                                            <div class="room-message current-user">
                                                <div class="user-icon online" title="online"><img src="img/faqs/team-member6.png" alt="Current user image"></div>
                                                <div class="mes-content">
                                                    <div class="mes-title">
                                                        <span class="mes-author">Laura</span>
                                                        <span class="time" title="Tuesday, January 16, 2018 5:36 PM">5:36 PM</span>
                                                    </div>
                                                    <div class="mes-inner">
                                                        <div class="mes-text">
                                                            Hi<br>Please accept my bid by clicking on accept and we can book you in asap.<br>Thanks<br>Lawrance
                                                        </div>
                                                        <div class="mes-actions">
                                                            <div class="edit-mes" title="Edit Message"></div>
                                                            <div class="del-mes" title="Delete Message"></div>
                                                        </div>

                                                    </div>
                                                    <div class="attached">
                                                        <h5>Attachments</h5>
                                                        <div class="attached-content">
                                                            <div class="attach-item"><a href="img/dashboard/iconPlus.png" class="attach-link" target="_blank">iconPlus.png</a><span class="del-attach" title="Delete attachment"></span> </div>
                                                            <div class="attach-item"><a href="img/dashboard/iconPlus.png" class="attach-link" target="_blank">iconPlus.png</a><span class="del-attach" title="Delete attachment"></span> </div>
                                                            <div class="attach-item"><a href="img/dashboard/iconPlus.png" class="attach-link" target="_blank">iconPlus.png</a><span class="del-attach" title="Delete attachment"></span> </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                            </div>
                                <div class="room-message-form">
                                <form action="#" class="form-mes-reply" enctype="multipart/form-data" method="post" accept-charset="UTF-8">
                                    <div class="form-inner">
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Message" name="mes-reply" id="mes-reply" required="required"></textarea>
                                            <p class="error">Please enter correct information</p>
                                        </div>
                                        <div class="form-group form-left">
                                            <input multiple="multiple" id="attach-files" name="files[]" class="file-upload" type="file">
                                        </div>
                                        <div class="form-group form-btn">
                                            <input type="submit" value="Send" class="btn bluebtn linkbtn" id="mes-form-submit" name="mes-form-submit">
                                        </div>

                                        <div class="form-mes"></div>
                                    </div>
                                </form>
                            </div>
                            </div>
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
<script src="js/jquery-3.1.0.js" crossorigin="anonymous"></script>
<script src="js/jquery-1.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js" crossorigin="anonymous"></script>
<script src="bootstrap/bootstrap.min.js" crossorigin="anonymous"></script>
<script>

    $( ".room" ).click(function() {
        var $this = $( this ),
            $current_room = $(".current-room "),
            user_name = $this.find(".user-name").text(),
            job_title = $this.find(".job-title").text();

        $( ".room.active" )
            .removeClass( "active" )
        $this
            .addClass( "active" );

        $current_room
            .find( ".user-name" )
            .text(user_name);
        $current_room
            .find( ".room-name" )
            .text(job_title);

        $( "#rooms" )
            .addClass( "chatting" );

    });

    $( ".return-list-room" ).click(function () {
        $( "#rooms" )
            .removeClass( "chatting" );
    })
    



    /*$( ".inner-cont" ).click(function() {
        $( this )
            .parent('.message')
            .toggleClass( "open" );
    });

    $( ".rollup" ).click(function() {
        $( this )
            .closest('.message')
            .toggleClass( "open" );
    });

    $( ".search-expander" ).click(function() {
        $( this )
            .toggleClass( "search-expander-expanded" );
        $( this )
            .closest('.tab-item')
            .toggleClass( "open" );
    });

    function click_expander(event) {
        $( this )
            .closest(event.data.selector)
            .toggleClass( "bidding" );
    }
    $( ".bidbtn" ).on('click',{selector: '.tab-item'},click_expander);
    $( ".cancelbtn" ).on('click',{selector: '.tab-item'},click_expander);*/



</script>


</body>
</html>