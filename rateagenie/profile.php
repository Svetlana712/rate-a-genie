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

    <title>Customer profile</title>
</head>
<body>
<div id="profile" class="customer">
    <?php include 'inc/customerheader.php'; ?>

    <div class="container clearfix">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-12">
                <div class="page_title">
                    <div class="wrap">
                        <h1>Profile & Preferences</h1>
                        <ul id="breadcrumb">
                            <li><a href="#">Rate A Genie</a></li>
                            <li>Profile & Preferences</li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-12">

                <form id="user_info"  action="contact_form.php" enctype="multipart/form-data" method="post" accept-charset="UTF-8">

                    <div id="left-col">
                        <div class="form-group" id="form-group-profile_image">
                            <div class="file-preview ">
                                <img data-value="" src="img/dashboard/dashboard_profile_default.png" id="profile-image-thumb">
                                <button type="button" class="linkbtn greenbtn button upload-profile-image hidden" id="profile-image-change">Change</button>
                            </div>
                        </div>
                        <div class="form-group">
                            <input name="profile_image" id="profile_image" value="" data-custom-image="true" class="file-upload file-upload" type="file">
                        </div>
                    </div>
                    <div id="right-col">
                        <div class="form-group">
                            <label for="first_name">First name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" value="" placeholder="First name">
                            <p class="error">Please enter correct information</p>
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text"  class="form-control" id="last_name" name="last_name" value="" placeholder="Last Name">
                            <p class="error">Please enter correct information</p>
                        </div>
                        <div class="form-group">
                            <label for="email">Email <span class="mandatory">*</span></label>
                            <input  type="text" class="form-control" id="email" name="email" value="" placeholder="Email" required="required">
                            <p class="error">Please enter correct information</p>
                        </div>
                        <div class="form-group">
                            <label for="nickname">Username</label>
                            <input  type="text" class="form-control" name="nickname" id="nickname" value="" maxlength="8" type="text" placeholder="Username">
                            <p class="error">Please enter correct information</p>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control form_phone" id="phone" name="phone" value="">
                            <p class="error">Please enter correct information</p>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" name="address" value="" placeholder="Address">
                            <p class="error">Please enter correct information</p>
                        </div>
                        <div class="form-group">
                            <label for="password">New password</label>
                            <input type="password" class="form-control" name="password" id="password" value="" maxlength="50" type="password">
                            <p class="error">Please enter correct information</p>
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Confirm new password</label>
                            <input type="password" class="form-control" name="confirm_password" id="confirm_password" value="" maxlength="50" type="password">
                            <p class="error">Please enter correct information</p>
                        </div>
                        <div class="wrapper">

                            <div class="form-group" id="qoute_notification">
                                <h3>Quote Notification Emails</h3>
                                <div class="rad-group">
                                    <div class="rad-item">
                                        <input name="email_bid_notifications_choices" id="email_bid_notifications_choices0" value="instant" checked="checked" type="radio">
                                        <label for="email_bid_notifications_choices0" id="labelemail_bid_notifications_choices0">Send me an email everytime I receive a quote.</label>
                                    </div>
                                    <div class="rad-item">
                                        <input name="email_bid_notifications_choices" id="email_bid_notifications_choices1" value="daily" type="radio">
                                        <label for="email_bid_notifications_choices1" id="labelemail_bid_notifications_choices1">Send me a daily summary email of received quotes.</label>
                                    </div>
                                    <div class="rad-item">
                                        <input name="email_bid_notifications_choices" id="email_bid_notifications_choices2" value="never" type="radio">
                                        <label for="email_bid_notifications_choices2" id="labelemail_bid_notifications_choices2">Do not email me when I receive new quotes.</label>
                                    </div>
                                </div>
                                <h3>Unsubscribe</h3>
                                <div class="check-box-group">
                                    <div class="check-box-item"><input name="generic_unsubscribe[]" id="generic_unsubscribe0" value="generic_unsubscribe" type="checkbox">
                                        <label for="generic_unsubscribe0" id="labelgeneric_unsubscribe0">Unsubscribe from all emails</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" id="other_notification">
                                <h3>Other Notification Emails</h3>
                                <div class="check-box-group">
                                    <div class="check-box-item">
                                        <input name="email_notifications[]" id="email_notifications0" value="forward_messages" checked="checked" type="checkbox">
                                        <label for="email_notifications0" id="labelemail_notifications0">Forward messages and questions from transport providers to my email.</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" id="rag_credit">
                                <h3>My Rate a genie Credit</h3>
                                <p>You currently have <strong>£0</strong> Rate a genie Credit.</p>
                                <div class="highlight-text">Did you know you can earn £5 every time you <a href="#">recommend a friend</a> to use Rate a genie.</div>
                            </div>
                            <input value="Save" class="linkbtn bluebtn button disabled" id="profile-submit" name="profile-submit" type="submit">

                            <div class="form-mes"></div>
                        </div>
                    </div>

                </form>


                <!--
                <div class="card-body">
            <h5 class="card-title">Something</h5>
            <div id="tasks_container">
                <table class="table" id="tasks">
                    <tbody><tr>
                        <th>Task ID</th>
                        <th>Brand</th>
                        <th>Item Model</th>
                        <th>Issue</th>
                        <th>Bids</th>
                        <th>Actions</th>
                    </tr>

                </tbody></table>
            </div>
        </div>
                -->


            </div>
        </div>

    </div>

    <?php include 'inc/customerfooter.php'; ?>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
<script src="js/popper.min.js" crossorigin="anonymous"></script>
<script src="bootstrap/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="js/jquery.maskedinput.js" crossorigin="anonymous"></script>
<script type="text/javascript">
    jQuery(window).on('load',function() {
        jQuery(".form_phone").mask("(999) 999-99-99");
        jQuery( "#user_info" ).on( "submit", function( event ) {
            event.preventDefault();
            //console.log( $( this ).serialize() );
        });
        jQuery(".upload-profile-image").on("click", function (event) {
            jQuery("#profile_image").trigger("click");
        })

    });

</script>


</body>
</html>