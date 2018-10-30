<!DOCTYPE>
<html lang="en">
<head>
    <title>OZ DOLLARS | Whole Sales Registration</title>
    <?php include_once("master/plugin.php") ?>
    <style type="text/css">


    </style>
    <script type="text/javascript">
        function paymentOption(txt) {
            if (txt == "cash") {
                $('#terms_show').fadeOut();
            } else {
                $('#terms_show').fadeIn();
            }
        }

        var fixed_leftposition;
        function checkOffFixed() {
            if ($('#price_details_containner').offset().top + $('#price_details_containner').height()
                >= $('#footer').offset().top - 30) {
                $('#price_details_containner').removeClass('position_fixed_removed');
                $('#price_details_containner').css('right', 0);
            }
            if ($(document).scrollTop() + window.innerHeight < $('#footer').offset().top) {
                $('#price_details_containner').addClass('position_fixed_removed');
                $('#price_details_containner').css('right', fixed_leftposition);
            }
        }
        $(document).ready(function () {
            /* fixed_leftposition=$('#price_details_containner').offset().left;
             if($(document).scrollTop()<100)
             {
             $('#price_details_containner').css('right' ,fixed_leftposition);
             $('#price_details_containner').addClass('position_fixed_removed');
             }*/
        });
        $(document).scroll(function () {
            // checkOffFixed();
        });
        function PromoSubmit() {
            $('#promo_code_box').show();
        }
        function Paybypoint(dis) {
            if ($(dis).is(":checked")) {
                $('#applyamt').removeClass('apply');
            } else {
                $('#applyamt').addClass('apply');
            }
        }
    </script>
</head>
<body class="body_color">
<?php include_once("master/header.php") ?>
<section class="product_section">
    <div class="container">
        <div class="col-md-10 col-md-offset-1">
                <div class="order_listbox whole_regi_insertbox">
                    <div class="carousal_head">
                    <span class="filter_head_txt slider_headtxt">
Your Personal Details</span>
                    </div>
                    <div class="row">
                    <div class="col-sm-6">
                        <input type="text" placeholder="Name *" class="form-control">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" placeholder="E-Mail Address *" class="form-control">
                    </div>
                        <div class="col-sm-6">
                            <input type="text" placeholder="Telephone Number *" class="form-control">
                        </div>
                    </div>
                    <div class="carousal_head">
                        <span class="filter_head_txt slider_headtxt">Company Details</span>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" placeholder="Company Name *" class="form-control">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" placeholder="ABN *" class="form-control">
                        </div>
                    </div>
                    <div class="carousal_head">
                        <span class="filter_head_txt slider_headtxt">Your Address</span>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" placeholder="Street Address *" class="form-control">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" placeholder="Post Code *" class="form-control">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" placeholder="City *" class="form-control">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" placeholder="State/Territory *" class="form-control">
                        </div>
                        <div class="col-sm-12">
                            <div class="footer_btn">
                                <Button type="button" class="btn  btn-danger applynow-btn"><i class="mdi mdi-send"></i>Apply Now</Button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>
<?php include_once("master/footer.php") ?>
<div class="modal right fade" id="PromoCode" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel2">Promo Code</h4>
            </div>
            <div class="modal-body">
                <div class="deli_row">
                    <input type="text" name="ask_number" autocomplete="off" class="form-control login_txt"
                           placeholder="Enter Promo Code"/>
                </div>
            </div>
            <div class="modal-footer text-center">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="PromoSubmit" onclick="PromoSubmit();">Submit</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>
