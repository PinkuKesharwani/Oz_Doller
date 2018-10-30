<!DOCTYPE>
<html lang="en">
<head>
    <title>OZ DOLLARS | My Shopping Cart</title>
    <?php include_once("master/plugin.php")?>
    <style type="text/css">

    </style>
</head>
<body class="body_color">
<?php include_once("master/header.php") ?>
<section class="product_section">
    <div class="container">
        <div class="mycart_mainbox">
            <div class="mycart_fixedamount_box">
                <div class="order_listbox">
                    <div class="carousal_head">
                        <span class="filter_head_txt slider_headtxt">Price Details</span>
                    </div>
                    <div class="cart_price_details_box">
                    <div class="option_availability">
                        <div class="option_txt">Price (3 items) </div>
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
                    </div>
                    <div class="option_availability">
                        <div class="option_txt">Amount Payable</div>
                        <div class="order_amt">
                            <i class="mdi mdi-currency-inr"></i>1000.00
                        </div>
                    </div>
                    <hr>
                   <!-- <div class="product_btn_box">
                        <a class="btn btn-warning" href="product_list.php"><i class="mdi mdi-basket basic_icon_margin"></i>Continue</a>
                        <a class="btn btn-success pull-right" href="checkout.php"><i class="mdi mdi-currency-inr basic_icon_margin"></i>Place Order</a>
                    </div>-->
                    <div class="product_btn_box">
                        <a class="btn btn-warning btn-sm" href="allproduct.php"><i class="mdi mdi-basket basic_icon_margin"></i>Keep Shopping</a>
                        <a class="btn keep-shoping pull-right btn-sm" href="checkout.php"><i class="mdi mdi-currency-inr basic_icon_margin"></i>Place Order</a>
                    </div>
                </div>
            </div>
            <div class="order_listbox">
                <div class="carousal_head">
                    <span class="filter_head_txt slider_headtxt">My Cart (3)</span>
                </div>
                <div class="order_list_container">
                    <div class="order_row border-none">
                        <div class="order_details_box">
                            <div class="col-md-8 col-sm-12">
                                <div class="productdetails_order_row">
                                    <div class="order_product_imgbox">
                                        <img src="images/4.jpg" alt="Organic product">


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
                            <div class="col-md-4 col-sm-12">
                                <div class="track_del_address">Free delivery by 15-May-2018</div>
                                <div class="order_amt"><i class="mdi mdi-currency-inr"></i> 300.00</div>
                                <div class="spinner_withbtn my_cartbtnbox">
                                    <div class="input-group qty_box">
                                        <span class="qty_txt">Qty</span>
                                        <input type="number" class="form-control text-center qty_edittxt" min="1" max="10" value="1">
                                    </div>
                                    <button class="spinner_addcardbtn btn-danger" type="button" onclick="AddTOcart(this);">
                                        <span class="mdi mdi-close close_btn"></span> <span class="button-group_text">Remove</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="order_row border-none">

                        <div class="order_details_box">
                            <div class="col-md-8 col-sm-12">
                                <div class="productdetails_order_row">
                                    <div class="order_product_imgbox">
                                        <img src="images/2.jpg" alt="Oz Dollars">


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
                            <div class="col-md-4 col-sm-12">
                                <div class="track_del_address">Free delivery by 15-May-2018</div>
                                <div class="order_amt"><i class="mdi mdi-currency-inr"></i> 300.00</div>
                                <div class="spinner_withbtn my_cartbtnbox">
                                    <div class="input-group qty_box">
                                        <span class="qty_txt">Qty</span>
                                        <input type="number" class="form-control text-center qty_edittxt" min="1" max="10" value="1">
                                    </div>
                                    <button class="spinner_addcardbtn btn-danger" type="button" onclick="AddTOcart(this);">
                                        <span class="mdi mdi-close close_btn"></span> <span class="button-group_text">Remove</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="order_row border-none">
                        <div class="order_details_box">
                            <div class="col-md-8 col-sm-12">
                                <div class="productdetails_order_row">
                                    <div class="order_product_imgbox">
                                        <img src="images/1.jpg" alt="Oz Dollars">
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
                            <div class="col-md-4 col-sm-12">
                                <div class="track_del_address">Free delivery by 15-May-2018</div>
                                <div class="order_amt"><i class="mdi mdi-currency-inr"></i> 300.00</div>
                                <div class="spinner_withbtn my_cartbtnbox">
                                    <div class="input-group qty_box">
                                        <span class="qty_txt">Qty</span>
                                        <input type="number" class="form-control text-center qty_edittxt" min="1" max="10" value="1">
                                    </div>
                                    <button class="spinner_addcardbtn btn-danger" type="button" onclick="AddTOcart(this);">
                                        <span class="mdi mdi-close close_btn"></span> <span class="button-group_text">Remove</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include_once("master/footer.php") ?>
</body>
</html>
