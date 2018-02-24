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

    <title>Customer profile - view by genie</title>
</head>
<body>
<div id="view-profile" class="customer">
    <?php include 'inc/genieheader.php'; ?>

    <div class="container clearfix">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-12">
                <div class="page_title">
                    <div class="wrap">
                        <h1>Justblu</h1>
                        <ul id="breadcrumb">
                            <li><a href="#">Rate A Genie</a></li>
                            <li>View customer profile</li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-12">
                <div class="profile-wrapper">
                    <div class="prof-left">
                        <div class="particulars">
                            <h3>Particulars</h3>
                            <div class="user-info">
                                <div class="info-item"><label>Member Since</label><div class="value">03/09/2015</div></div>
                                <div class="info-item"><label>Jobs completed</label><div class="value">1</div></div>
                                <div class="info-item"><label>Reputation</label><div class="value">0</div></div>

                            </div>

                            <div class="feedback-summary">
                                <div class="grid-header-row">
                                    <div class="inner-cont">
                                        <div class="cols col1">&nbsp;</div>
                                        <div class="cols col2">Last month</div>
                                        <div class="cols col3">6 months</div>
                                        <div class="cols col4">12 months</div>
                                    </div>
                                </div>
                                <div class="grid-cont">
                                    <div class="inner-cont">
                                        <div class="grid-row">
                                            <div class="cols col1"><div class="feedback-icons iconPlus" title="Positive Feedback">+</div></div>
                                            <div class="cols col2">0</div>
                                            <div class="cols col3">0</div>
                                            <div class="cols col4">0</div>
                                        </div>
                                        <div class="grid-row">
                                            <div class="cols col1"><div class="feedback-icons iconSlash" title="Neutral Feedback">/</div></div>
                                            <div class="cols col2">0</div>
                                            <div class="cols col3">0</div>
                                            <div class="cols col4">0</div>
                                        </div>
                                        <div class="grid-row">
                                            <div class="cols col1"><div class="feedback-icons iconMinus" title="Negative Feedback">-</div></div>
                                            <div class="cols col2">0</div>
                                            <div class="cols col3">0</div>
                                            <div class="cols col4">0</div>
                                        </div>

                                    </div>
                                </div>


                            </div>

                        </div>

                    </div>
                    <div class="prof-right">
                        <div class="feedback">
                            <h3>My Feedback</h3>
                            <div class="data-grid">
                                <p class="noRecords"><span class="user-nickname">Justblu</span>does not yet have any feedback</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>


                </div>






            </div>
        </div>

    </div>

    <?php include 'inc/geniefooter.php'; ?>
</div>
<div class="popup__overlay report_event">
    <div class="popup pink">
        <a class="popup__close" href="#" title="Close">&nbsp;</a>
        <div class="form-head">Report content</div>
        <div class="popup-inner">


            <form accept-charset="UTF-8" action="#" id="popup_report" method="post">

                <div class="form-group">
                    <label for="contact_form_msg">Let us know why the comment is inappropriate</label>
                    <textarea class="form-control" placeholder="Reason" name="contact_form_msg" id="contact_form_msg" required="required"></textarea>
                    <p class="error">This field is required</p>
                </div>
                <div class="form-group">
                    <label for="contact_form_email">E-mail</label>
                    <input class="form-control" type="text" placeholder="E-mail of current user" name="contact_form_email" id="report_form_email" required="required">
                    <p class="error">This field is required</p>
                </div>
                <div class="buttons">
                    <input type="submit" class="yes-btn linkbtn pinkbtn" value="Send report">
                    <input type="button" class="no-btn popup__close linkbtn greenbtn" value="Cancel">

                </div>
                <div class="form-mes">&nbsp;</div>

            </form>


        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
<script src="js/popper.min.js" crossorigin="anonymous"></script>
<script src="bootstrap/bootstrap.min.js" crossorigin="anonymous"></script>
<script>
    jQuery(window).on('load',function() {
        jQuery( "#popup_report" ).on( "submit", function( event ) {
            jQuery(this)
                .trigger('reset')
                .find('.form-mes')
                .css('display', 'block')
                .text('Report is sent');
            event.preventDefault();

            //console.log( $( this ).serialize() );
        });

    });

    p = $('.report_event');
    $('.report').click(function() {

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
</script>

</body>
</html>