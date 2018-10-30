<!DOCTYPE>
<html lang="en">
<head>
    <title>OZ DOLLARS | Checkout</title>
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
        <div class="mycart_mainbox">
            <div class="mycart_fixedamount_box" id="price_details_containner">
                <div class="order_listbox">
                    <div class="carousal_head">
                        <span class="filter_head_txt slider_headtxt">Price Details</span>
                    </div>
                    <div class="cart_price_details_box">
                        <div class="option_availability">
                            <div class="option_txt">Price (3 items)</div>
                            <div class="product_right_txt">
                                <i class="mdi mdi-currency-inr"></i>900.00
                            </div>
                        </div>
                        <div class="option_availability">
                            <div class="option_txt">Delivery Charges</div>
                            <div class="product_right_txt">
                                <i class="mdi mdi-currency-inr"></i>100.00
                            </div>
                        </div>
                        <div class="option_availability">
                            <div class="option_txt">Pay by point</div>
                            <div class="product_right_txt">
                                <div class="point_paybox apply" id="applyamt">
                                    <div class="checkbox">
                                        <input type="checkbox" id="pay_by_point" onchange="Paybypoint(this);"/>
                                    </div>
                                    <i class="mdi mdi-currency-inr"></i>100.00
                                </div>
                            </div>
                        </div>
                        <div class="option_availability" id="promo_code_box" style="display: none">
                            <div class="option_txt">Promo Pay</div>
                            <div class="product_right_txt">
                                <i class="mdi mdi-currency-inr"></i>100.00
                            </div>
                        </div>
                    </div>
                    <div class="option_availability">
                        <div class="option_txt">Net Payable</div>
                        <div class="order_amt">
                            <i class="mdi mdi-currency-inr"></i>1000.00
                        </div>
                    </div>

                    <div class="product_btn_box">
                        <a class="btn btn-warning btn-sm" href="allproduct.php"><i
                                    class="mdi mdi-basket basic_icon_margin"></i>Keep Shopping</a>
                        <a class="btn keep-shoping pull-right btn-sm"><i
                                    class="mdi mdi-currency-inr basic_icon_margin"></i>Proceed To Pay</a>
                    </div>
                    <!--<div class="product_btn_box">
                        <div class="btn btn-success confirm_order_btn">
                            <i class="mdi mdi-currency-inr basic_icon_margin"></i>Proceed To Pay
                        </div>
                    </div>-->
                </div>
            </div>
            <div class="order_listbox margin_bottom0">
                <div class="carousal_head">
                    <span class="filter_head_txt slider_headtxt">Delivery Address</span>
                </div>
                <div class="exis_container style-scroll">
                    <div class="exis_addbox">
                        <div class="first_row">
                            <div class="radio_box">
                                <input type="hidden" id="add_id" name="add_id" value="5">
                                <div class="radio">
                                    <input id="deli_radio_5" onclick="selected_address('5');" value="1" class="gender"
                                           name="add_delivery" type="radio" checked="&quot;checked&quot;">
                                    <label for="deli_radio_5" class="radio-label"></label>
                                </div>
                            </div>
                            <div class="add_name_box">Pinku Kesharwani</div>
                            <div class="contact_box">9589883533</div>
                        </div>

                        <div class="delivery_add">
                            Gohalpur, Jabalpur, Madhya Pradesh - 482002
                        </div>

                        <div class="deli_btnbox">
                            <button type="button" onclick="ChooseAddress('deli_radio_5',5);"
                                    class="btn btn-success btn-sm"><i
                                        class="mdi mdi-home-map-marker basic_icon_margin"></i>Deliver
                                Here
                            </button>

                            <button onclick="AddUpdate_Address('edit',5);" type="button"
                                    class="btn btn-warning pull-right btn-sm"><i
                                        class="mdi mdi-map-marker-radius basic_icon_margin"></i>Edit
                                Address
                            </button>
                        </div>

                    </div>
                    <div class="exis_addbox">
                        <div class="first_row">
                            <div class="radio_box">
                                <div class="radio">
                                    <input id="deli_radio_8" onclick="selected_address('8');" value="1" class="gender"
                                           name="add_delivery" type="radio">
                                    <label for="deli_radio_8" class="radio-label"></label>
                                </div>
                            </div>
                            <div class="add_name_box">Pinku Kesharwani</div>
                            <div class="contact_box">9589883533</div>
                        </div>

                        <div class="delivery_add">
                            SDF ASEDFSDFSD, Jabalpur, Madhya Pradesh - 480003
                        </div>

                        <div class="deli_btnbox">
                            <button type="button" onclick="ChooseAddress('deli_radio_8',8);"
                                    class="btn btn-success btn-sm"><i
                                        class="mdi mdi-home-map-marker basic_icon_margin"></i>Deliver
                                Here
                            </button>

                            <button onclick="AddUpdate_Address('edit',8);" type="button"
                                    class="btn btn-warning pull-right btn-sm"><i
                                        class="mdi mdi-map-marker-radius basic_icon_margin"></i>Edit
                                Address
                            </button>
                        </div>

                    </div>
                    <div class="exis_addbox">
                        <div class="first_row">
                            <div class="radio_box">
                                <div class="radio">
                                    <input id="deli_radio_7" onclick="selected_address('7');" value="1" class="gender"
                                           name="add_delivery" type="radio">
                                    <label for="deli_radio_7" class="radio-label"></label>
                                </div>
                            </div>
                            <div class="add_name_box">Pinku Kesharwani</div>
                            <div class="contact_box">9589883533</div>
                        </div>

                        <div class="delivery_add">
                            assASaa as AS, Jabalpur, Madhya Pradesh - 485330
                        </div>

                        <div class="deli_btnbox">
                            <button type="button" onclick="ChooseAddress('deli_radio_7',7);"
                                    class="btn btn-success btn-sm"><i
                                        class="mdi mdi-home-map-marker basic_icon_margin"></i>Deliver
                                Here
                            </button>

                            <button onclick="AddUpdate_Address('edit',7);" type="button"
                                    class="btn btn-warning pull-right btn-sm"><i
                                        class="mdi mdi-map-marker-radius basic_icon_margin"></i>Edit
                                Address
                            </button>
                        </div>

                    </div>
                    <div class="exis_addbox">
                        <div class="first_row">
                            <div class="radio_box">
                                <div class="radio">
                                    <input id="deli_radio_6" onclick="selected_address('6');" value="1" class="gender"
                                           name="add_delivery" type="radio">
                                    <label for="deli_radio_6" class="radio-label"></label>
                                </div>
                            </div>
                            <div class="add_name_box">Pinku Kesharwani</div>
                            <div class="contact_box">9589883533</div>
                        </div>

                        <div class="delivery_add">
                            Jablpur, Jabalpur, Madhya Pradesh - 482003
                        </div>

                        <div class="deli_btnbox">
                            <button type="button" onclick="ChooseAddress('deli_radio_6',6);"
                                    class="btn btn-success btn-sm"><i
                                        class="mdi mdi-home-map-marker basic_icon_margin"></i>Deliver
                                Here
                            </button>

                            <button onclick="AddUpdate_Address('edit',6);" type="button"
                                    class="btn btn-warning pull-right btn-sm"><i
                                        class="mdi mdi-map-marker-radius basic_icon_margin"></i>Edit
                                Address
                            </button>
                        </div>

                    </div>
                </div>
                <div class="new_addbox">
                    <div class="new_add_head col-sm-12">

                        <div class="add_name_box" id="add_update_head">ADD A NEW ADDRESS</div>

                        <button onclick="AddUpdate_Address('new','0');" type="button"
                                class="btn btn-primary pull-right btn-sm"><i
                                    class="mdi mdi-map-marker-plus basic_icon_margin"></i>Add New
                        </button>
                    </div>

                    <div class="add_update_box" id="content_address_box">
                        <div class="deli_row">
                            <div class="col-sm-6">
                                <input type="text" placeholder="Name*" name="name" id="add_name_update"
                                       class="form-control textWithSpace required" value="Pinku Kesharwani">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Phone No.*" name="contact" id="add_contact_update"
                                       minlength="10" maxlength="10" class="numberOnly form-control required"
                                       value="9589883533">
                            </div>
                        </div>
                        <div class="deli_row">
                            <div class="col-sm-6">
                                <select class="form-control" id="add_city" name="add_city">
                                    <option selected="" value="1">Jabalpur</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Pincode*" name="pincode" id="add_pincode_update"
                                       minlength="6" maxlength="6" class="form-control numberOnly required"
                                       data-original-title="" title="">
                            </div>
                        </div>
                        <div class="deli_row">
                            <div class="col-sm-12">
                                <textarea class="form-control glo_txtarea" id="add_address_update" name="address"
                                          placeholder="Address"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12 address_btnbox">
                            <button id="btn_add_new" type="button" onclick="saveaddress()"
                                    class="btn btn-danger pull-right"><i
                                        class="mdi mdi-map-marker-plus basic_icon_margin"></i>SAVE AND
                                DELIVER
                                HERE
                            </button>
                            <button id="btn_add_update" type="button" onclick="saveaddress()" style="display: none"
                                    class="btn btn-danger pull-right"><i
                                        class="mdi mdi-map-marker-plus basic_icon_margin"></i>UPDATE AND
                                DELIVER
                                HERE
                            </button>
                        </div>
                    </div>

                </div>
                <div class="order_list_container" style="display: none;">
                    <div class="deli_row">
                        <div class="col-sm-6">
                            <div class="radio">
                                <input id="add_1" value="male" class="gender" name="address_radio" type="radio"
                                       checked="" onchange="AddressOption('new');">
                                <label for="add_1" class="radio-label">New</label>
                            </div>

                            <div class="radio">
                                <input id="add_2" onchange="AddressOption('existing');" value="female" class="gender"
                                       name="address_radio" type="radio">
                                <label for="add_2" class="radio-label">Existing</label>
                            </div>
                        </div>
                        <div class="col-sm-6" id="existing_dropbox" style="display:none">
                            <select class="form-control" id="existaddess" name="address_id">
                                <option value="0"> --- Please Select ---</option>
                                <option value="26">Bijendra
                                    , 9876543210, 789 Sanjeevni Nagar Garha
                                    ,
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="deli_row">
                        <div class="col-sm-6">
                            <input type="text" placeholder="Name" class="form-control">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" placeholder="Phone No." class="form-control">
                        </div>
                    </div>
                    <div class="deli_row">
                        <div class="col-sm-6">
                            <input type="text" placeholder="Email Id" class="form-control">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" placeholder="City" class="form-control">
                        </div>
                    </div>
                    <div class="deli_row">
                        <div class="col-sm-12">
                            <textarea class="form-control glo_txtarea" placeholder="Delivery Address"></textarea>
                        </div>
                    </div>
                </div>
                <div class="carousal_head">
                    <span class="filter_head_txt slider_headtxt">Payment Option</span>
                </div>
                <div class="order_list_container">
                    <div class="deli_row">
                        <div class="col-sm-12">
                            <div class="radio">
                                <input id="radio-2" value="female" class="gender" name="gender_radio" type="radio"
                                       checked="" onchange="paymentOption('cash');">
                                <label for="radio-2" class="radio-label">Cash On Delivery</label>
                            </div>
                            <div class="radio">
                                <input id="radio-1" value="male" class="gender" name="gender_radio" type="radio"
                                       onchange="paymentOption('payumoney');">
                                <label for="radio-1" class="radio-label"> Pay With PayUMoney (T&amp;C)</label>
                            </div>


                            <div class="percent_show" id="terms_show" style="display: none">
                                3% Gateway Charge applicable on Total Amount levied by PayUMoney.
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="order_listbox">
                <div class="carousal_head">
                    <span class="filter_head_txt slider_headtxt">Order Summary</span>
                    <a class="btn btn-success btn-sm pull-right" href="mycart.php"><i
                                class="mdi mdi-basket basic_icon_margin"></i>Edit Cart</a>
                </div>
                <div class="order_list_container">
                    <div class="order_row border-none">
                        <div class="order_details_box">
                            <div class="col-sm-9 res_pad0">
                                <div class="productdetails_order_row">
                                    <div class="order_product_imgbox">
                                        <img src="images/4.jpg"
                                             alt="Organic product">

                                    </div>
                                    <div class="product_name">
                                        Lorem ipsum dolor sit amet
                                    </div>
                                    <div class="option_availability">
                                        <div class="option_txt">Product Type </div>
                                        <div class="product_right_txt">
                                            Divers Helmet
                                        </div>
                                    </div>
                                    <div class="option_availability">
                                        <div class="option_txt">Description </div>
                                        <div class="product_right_txt">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 res_pad0">
                                <div class="wish_rightcontainer">
                                    <div class="order_amt margin_top15"><i class="mdi mdi-currency-inr"></i> 75.00
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="order_details_box">
                            <div class="col-sm-9 res_pad0">
                                <div class="productdetails_order_row">
                                    <div class="order_product_imgbox">
                                        <img src="images/2.jpg"
                                             alt="Organic product">
                                    </div>
                                    <div class="product_name">
                                        Lorem ipsum dolor sit amet
                                    </div>
                                    <div class="option_availability">
                                        <div class="option_txt">Product Type </div>
                                        <div class="product_right_txt">
                                            Divers Helmet
                                        </div>
                                    </div>
                                    <div class="option_availability">
                                        <div class="option_txt">Description </div>
                                        <div class="product_right_txt">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 res_pad0">
                                <div class="wish_rightcontainer">
                                    <div class="order_amt margin_top15"><i class="mdi mdi-currency-inr"></i> 55.00
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--            <div class="order_listbox">-->
            <!--                <div class="carousal_head">-->
            <!--                    <span class="filter_head_txt slider_headtxt">Order Summary</span>-->
            <!--                    <a class="btn keep-shoping btn-sm pull-right" href="mycart.php"><i class="mdi mdi-basket basic_icon_margin"></i>Edit Cart</a>-->
            <!--                </div>-->
            <!--                <div class="order_list_container">-->
            <!--                    <div class="order_row border-none">-->
            <!--                        <div class="order_details_box">-->
            <!--                            <div class="col-md-8 col-sm-12">-->
            <!--                                <div class="productdetails_order_row">-->
            <!--                                    <div class="order_product_imgbox check-box-img">-->
            <!--                                        <img src="images/2.jpg" alt="Organic product">-->
            <!--                                    </div>-->
            <!---->
            <!--                                    <div class="product_name">-->
            <!--                                        <a class="product_details_link" href="product_details.php"> Diver Helmet (Scuba) Small</a>-->
            <!--                                    </div>-->
            <!---->
            <!---->
            <!--                                <div class="option_availability">-->
            <!--                                    <div class="option_txt">Qty </div>-->
            <!--                                    <div class="product_right_txt">-->
            <!--                                        1-->
            <!--                                    </div>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                            </div>-->
            <!--                            <div class="col-md-4 col-sm-12">-->
            <!--                                <div class="track_del_address">Free delivery by 15-May-2018</div>-->
            <!--                                <div class="order_amt"><i class="mdi mdi-currency-inr"></i> 300.00</div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                    <div class="order_row border-none">-->
            <!---->
            <!--                        <div class="order_details_box">-->
            <!--                            <div class="col-md-8 col-sm-12">-->
            <!--                                <div class="productdetails_order_row">-->
            <!--                                    <div class="order_product_imgbox check-box-img">-->
            <!--                                        <img src="images/2.jpg" alt="Organic product">-->
            <!---->
            <!---->
            <!--                                    </div>-->
            <!--                                    <div class="product_name">-->
            <!--                                        <a class="product_details_link" href="product_details.php"> Diver Helmet (Scuba) Small</a>-->
            <!--                                    </div>-->
            <!---->
            <!---->
            <!--                                    <div class="option_availability">-->
            <!--                                        <div class="option_txt">Qty </div>-->
            <!--                                        <div class="product_right_txt">-->
            <!--                                            1-->
            <!--                                        </div>-->
            <!--                                    </div>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                            <div class="col-md-4 col-sm-12">-->
            <!--                                <div class="track_del_address">Delivery by 15-May-2018 : ₹100</div>-->
            <!--                                <div class="order_amt"><i class="mdi mdi-currency-inr"></i> 300.00</div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                    <div class="order_row border-none">-->
            <!--                        <div class="order_details_box">-->
            <!--                            <div class="col-md-8 col-sm-12">-->
            <!--                                <div class="productdetails_order_row">-->
            <!--                                    <div class="order_product_imgbox check-box-img">-->
            <!--                                        <img src="images/4.jpg" alt="Organic product">-->
            <!--                                    </div>-->
            <!---->
            <!---->
            <!--                                    <div class="product_name">-->
            <!--                                        <a class="product_details_link" href="product_details.php"> Diver Helmet (Scuba) Small</a>-->
            <!--                                    </div>-->
            <!---->
            <!--                                    <div class="option_availability">-->
            <!--                                        <div class="option_txt">Qty </div>-->
            <!--                                        <div class="product_right_txt">-->
            <!--                                       2-->
            <!--                                        </div>-->
            <!--                                    </div>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                            <div class="col-md-4 col-sm-12">-->
            <!--                                <div class="track_del_address">Free delivery by 15-May-2018</div>-->
            <!--                                <div class="order_amt"><i class="mdi mdi-currency-inr"></i> 300.00</div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
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
