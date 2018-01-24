<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">

    <title>Contact the team</title>
</head>
</head>
<body>
<div class="contactTeam">
<div class="container clearfix">
    <div class="row">
        <div class="col-xs-12">
            <h1>Contact the team</h1>
            <p class="visible-xs">
                Use the contact form to get in touch with us, one of our support team
                will reply to you regarding your enquiry as soon as possible, this can
                take up to 24 hours.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-7 col-lg-6">
            <form action="contact_form.php" method="post" enctype="multipart/form-data"  id="contactform" class="clearfix" accept-charset="UTF-8">
                <div class="innerwrap">
                    <div class="form-group">
                        <label for="contact_form_name">Your Name* <span class="mandatory">*</span></label>
                        <input class="form-control input-lg" type="text" placeholder="Your Name" name="contact_form_name" id="contact_form_name" required="required">
                        <p class="error">Please enter correct information</p>
                    </div>
                    <div class="form-group">
                        <label for="contact_form_email">E-mail* <span class="mandatory">*</span></label>
                        <input class="form-control input-lg" type="text" placeholder="E-mail (phone for mobile accounts)" name="contact_form_email" id="contact_form_email" required="required">
                        <p class="error">Please enter correct information</p>
                    </div>
                    <div class="form-group">
                        <label for="contact_form_phone">Contact Number</label>
                        <input class="form-control input-lg form_phone" type="text" placeholder="Contact Number" name="contact_form_phone" id="contact_form_phone">
                        <p class="error">Please enter correct information</p>
                    </div>
                    <div class="form-group">
                        <label for="contact_form_msgtype">Message Type* <span class="mandatory">*</span></label>
                        <select id="contact_form_msgtype" name="contact_form_msgtype" class="form-control input-lg">
                            <option value="suggestions@rateagenie.com">Suggestion</option>
                            <option value="feedback@rateagenie.com">Feedback</option>
                            <option value="report@rateagenie.com">Report Violation</option>
                            <option value="help@rateagenie.com">Help</option>
                            <option value="administrator@rateagenie.com">Support</option>
                            <option value="press@rateagenie.com">Marketing</option>
                            <option value="info@rateagenie.com">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="contact_form_subj">Message Subject* <span class="mandatory">*</span></label>
                        <input class="form-control input-lg" type="text" placeholder="Message Subject" name="contact_form_subj" id="contact_form_subj" required="required">
                        <p class="error">Please enter correct information</p>
                    </div>
                    <div class="form-group">
                        <label for="contact_form_msg">Message* <span class="mandatory">*</span></label>
                        <textarea class="form-control input-lg" placeholder="Message" name="contact_form_msg" id="contact_form_msg" required="required"></textarea>
                        <p class="error">Please enter correct information</p>
                    </div>
                    <div class="form-group">
                        <div id="captcha">

                        </div>
                    </div>
                    <div class="form-actions">
                        <input type="submit" value="Send" class="btn btn-primary btn-lg button" id="contact-form-submit" name="contact-form-submit">
                    </div>

                </div>
            </form>
        </div>

        <div class="col-xs-12 col-sm-5 col-lg-offset-2 col-lg-4 infoblock"> <!--infoBox-->
            <p class="hidden-xs">
                Use the contact form to get in touch with us, one of our support team
                will reply to you regarding your enquiry as soon as possible, this can
                take up to 24 hours.
            </p>
            <div class="callteam">
                <div class="oscar"><img class="hidden-xs" src="https://cdn.anyvan.com/images/v3/oscar.png" alt="">
                    <p>
                        For a faster response you can give us a phone call.
                        We look forward to hearing from you.
                    </p>
                </div><a class="phone" href="tel:+442038723050"><span class="number"> 020 3872 3050</span></a>
                <div class="row">
                    <div class="col-xs-6">Monday to Friday</div>
                    <div class="col-xs-6">8:00am - 9:00pm</div>
                </div>
                <div class="row">
                    <div class="col-xs-6">Saturday</div>
                    <div class="col-xs-6">9:00am - 6:00pm</div>
                </div>
                <div class="row">
                    <div class="col-xs-6">Sunday</div>
                    <div class="col-xs-6">9:00am - 5:00pm</div>
                </div>
            </div>
        </div>
    </div>
    <div class="csMob visible-xs">
        <p>Our customer service team are waiting to help you.</p>
    </div>

</div>
    <div class="officeWrapper">
        <div class="container hidden-xs">
            <div class="row">
                <div class="col-sm-7 col-lg-6">
                    <div class="cs">Our customer service team<br>are waiting to help you.</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="js/jquery.maskedinput.js" crossorigin="anonymous"></script>
<script type="text/javascript">
    jQuery(window).on('load',function() {
        jQuery(".form_phone").mask("(999) 999-99-99");
        jQuery( "contactform" ).on( "submit", function( event ) {
            event.preventDefault();
            console.log( $( this ).serialize() );
        });

    });

</script>
</body>
</html>