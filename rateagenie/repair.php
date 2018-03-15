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
    <link rel="stylesheet" href="css/dropzone.css">

    <title>Repair your device</title>
</head>
<body>

<?php include 'inc/customerheader.php'; ?>

<div class="repair">
    <div class="container clearfix">
    <div class="row">
        <div class="col-xs-12">
            <h1>Repair your device</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <form action="contact_form.php" method="post" enctype="multipart/form-data"  id="repairform" class="clearfix" accept-charset="UTF-8">
                <div class="innerwrap">
                    <div class="text"><p>Our trusted genies will send you quotes so you can chose which to fix your broken device</p></div>
                    <div class="form-group">
                        <label for="repair_form_issue" title="Mandatory field">Issue <span class="mandatory">*</span></label>
                        <textarea class="form-control" placeholder="Issue" name="repair_form_issue" id="repair_form_issue" required="required"></textarea>
                        <p class="error">Issue field is required</p>
                    </div>
                    <div class="form-group">
                        <label for="repair_form_descr">Description</label>
                        <textarea class="form-control" placeholder="Description" name="repair_form_descr" id="repair_form_descr"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="repair_form_type">Type of device</label>
                        <select id="repair_form_type" name="repair_form_type" class="form-control">
                            <option value="1">smartphone</option>
                            <option value="2">laptop</option>
                            <option value="3">pc</option>
                            <option value="4">tv</option>
                            <option value="5">monitor</option>
                            <option value="6">other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="repair_form_brand">Brand</label>
                        <select id="repair_form_brand" name="repair_form_brand" class="form-control">
                            <option value="0">All</option>
                            <option value="1">Desktop Computers</option>
                            <option value="2">Laptops</option>
                            <option value="3">Mobiles / Tablets</option>
                            <option value="4">TVs / Monitors</option>
                            <option value="5">Other...</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="repair_form_model">Model</label>
                        <select id="repair_form_model" name="repair_form_model" class="form-control">
                            <option value="0">All</option>
                            <option value="1">Iphone</option>
                            <option value="2">Macbook</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="upload-file">Add Photos</label>
                        <div class="dropzone dz-clickable" id="upload-file" name="upload-file-form">

                        </div>

                        <input id="image" class="images" hidden="">
                    </div>

                    <div class="form-actions">
                        <input type="submit" value="Get prices" class="linkbtn greenbtn button" id="contact-form-submit" name="contact-form-submit">
                    </div>

                </div>
            </form>
        </div>


    </div>


</div>

</div>

<?php include 'inc/customerfooter.php'; ?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/dropzone.js" crossorigin="anonymous"></script>

<script src="js/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
<script src="js/jquery-3.1.0.js"></script>
<script src="js/popper.min.js" crossorigin="anonymous"></script>
<script src="bootstrap/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="js/jquery.maskedinput.js" crossorigin="anonymous"></script>
<script src="js/mydropzone.js"></script>
<script>
    jQuery(window).on('load',function() {
        jQuery(".form_phone").mask("(999) 999-99-99");
        jQuery( "#repairform" ).on( "submit", function( event ) {
            event.preventDefault();
            //console.log( $( this ).serialize() );
        });



    });

</script>
</body>
</html>