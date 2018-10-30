<!DOCTYPE >
<html lang="en">
<head>
    <title>OZ DOLLARS | Product List</title>
    <?php include_once("master/plugin.php") ?>
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" href="js/owl.carousel.js"></script>
    <style type="text/css">

    </style>
</head>
<body>
<?php include_once("master/header.php") ?>
<section class="product_maincontainer">
    <div class="product_section">
        <div class="col-md-2 filter_right_fixed">
            <div class="product_filter_container" id="product_filter_container">
                <div class="product_filter_head">
                    Product Category
                </div>
                <div class="search_filter">
                    <input type="text" class="main_filter_search" placeholder="search"/>
                    <div class="filter_search_icon">
                        <i class="mdi mdi-magnify"></i>
                    </div>
                </div>
                <ul class="product_list_ul style-scroll" id="filter_data">
                    <li class="product_list_li selected" onclick="get_items(this)" id="0">All Products</li>
                    <li class="product_list_li" onclick="get_items(this)" id="1">Medieval Armour</li>
                    <li class="product_list_li" onclick="get_items(this)" id="2">Mini Medieval Helmets</li>
                    <li class="product_list_li" onclick="get_items(this)" id="3">Medieval Helmets</li>
                    <li class="product_list_li" onclick="get_items(this)" id="4">Antique Pad Lock</li>
                    <li class="product_list_li" onclick="get_items(this)" id="5">Brass Bells</li>
                    <li class="product_list_li" onclick="get_items(this)" id="7">Fireman Helmet</li>
                    <li class="product_list_li" onclick="get_items(this)" id="8">Hour Glass</li>
                    <li class="product_list_li" onclick="get_items(this)" id="9">Key Chains</li>
                    <li class="product_list_li" onclick="get_items(this)" id="12">Magnifying Glass</li>
                    <li class="product_list_li" onclick="get_items(this)" id="15"> Musical Instrument</li>
                    <li class="product_list_li" onclick="get_items(this)" id="19">Pocket Watch</li>
                    <li class="product_list_li" onclick="get_items(this)" id="20"> Table Clock</li>
                    <li class="product_list_li" onclick="get_items(this)" id="22">Telescope</li>
                    <li class="product_list_li" onclick="get_items(this)" id="23"> World Globe</li>
                    <li class="product_list_li" onclick="get_items(this)" id="24">Compass</li>
                    <li class="product_list_li" onclick="get_items(this)" id="25">Diver Helmet</li>
                    <li class="product_list_li" onclick="get_items(this)" id="26">Sextant</li>
                    <li class="product_list_li" onclick="get_items(this)" id="28">Ship Items</li>
                    <li class="product_list_li" onclick="get_items(this)" id="29">Sundial</li>
                    <li class="product_list_li" onclick="get_items(this)" id="30">Taddy bear</li>
                    <li class="product_list_li" onclick="get_items(this)" id="31">Toys</li>
                </ul>
            </div>
        </div>
        <div class="col-md-10">
            <div class="view_headbox">
                <div class="viewtype_txt">Product List</div>
                <div class="product_search_box">
                    <input type="text" class="header_search" autocomplete="off" onautocomplete="false"
                           placeholder="Search by product" onkeyup="HeaderSearchFilter(this);">
                    <input type="hidden" name="search" id="search_user_id">
                    <i class="product_search_icon mdi mdi-magnify"></i>
                </div>
            </div>
            <div class="owl-carousel brics_5">
                <div class="item">
                    <div class="product_block">
                        <div class="save_amt">Save Rs. 10</div>

                        <div class="product_amt">
                            <span class="product_amt_less">
        <i class="mdi mdi-currency-inr"></i>40.00</span>
                            <span class="product_amt_real">
        <i class="mdi mdi-currency-inr"></i>50.00</span>
                        </div>
                        <div class="product_img">
                            <img src="images/teddy-3.png">
                            <div class="hover_center_block">
                                <div class="product_hover_block" onclick="Initialize_ProductDetails();"
                                     data-toggle="modal"
                                     data-target="#Modal_ViewProductDetails">
                                    <div class="mdi mdi-magnify"></div>
                                </div>
                            </div>
                        </div>
                        <div class="product_name">Teddy Bear</div>
                        <div class="product_qty">
                            <select class="form-control product_drop">
                                <option value="5">$ 50</option>
                                <option value="6">Qtv 2 - $ 90</option>
                            </select>
                        </div>

                        <div class="spinner_withbtn">
                            <div class="input-group qty_box">
                                <span class="qty_txt">Qty</span>
                                <input type="number" class="form-control text-center qty_edittxt" min="0" max="10"
                                       value="0">
                            </div>
                            <button class="spinner_addcardbtn btn-primary" type="button" onclick="AddTOcart(this);">
                                <i class="mdi mdi-basket-unfill"></i> <span class="button-group_text">Add</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="product_block">
                        <div class="save_amt">Save Rs. 10</div>
                        <div class="product_amt">
                            <span class="product_amt_less">
        <i class="mdi mdi-currency-inr"></i>40.00</span>
                            <span class="product_amt_real">
        <i class="mdi mdi-currency-inr"></i>50.00</span>
                        </div>
                        <div class="product_img">
                            <img src="images/teddy-1.jpg">
                            <div class="hover_center_block">
                                <div class="product_hover_block" onclick="Initialize_ProductDetails();"
                                     data-toggle="modal"
                                     data-target="#Modal_ViewProductDetails">
                                    <div class="mdi mdi-magnify"></div>
                                </div>
                            </div>
                        </div>
                        <div class="product_name">Teddy Bear</div>
                        <div class="product_qty">
                            <select class="form-control product_drop">
                                <option value="5">$ 50</option>
                                <option value="6">Qtv 2 - $ 90</option>
                            </select>
                        </div>
                        <div class="spinner_withbtn">
                            <div class="input-group qty_box">
                                <span class="qty_txt">Qty</span>
                                <input type="number" class="form-control text-center qty_edittxt" min="0" max="10"
                                       value="0">
                            </div>
                            <button class="spinner_addcardbtn btn-primary" type="button" onclick="AddTOcart(this);">
                                <i class="mdi mdi-basket-unfill"></i> <span class="button-group_text">Add</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="product_block">
                        <div class="save_amt">Save Rs. 10</div>

                        <div class="product_amt">
                            <span class="product_amt_less">
        <i class="mdi mdi-currency-inr"></i>40.00</span>
                            <span class="product_amt_real">
        <i class="mdi mdi-currency-inr"></i>50.00</span>
                        </div>
                        <div class="product_img">
                            <img src="images/teddy-4.jpg">
                            <div class="hover_center_block">
                                <div class="product_hover_block" onclick="Initialize_ProductDetails();"
                                     data-toggle="modal"
                                     data-target="#Modal_ViewProductDetails">
                                    <div class="mdi mdi-magnify"></div>
                                </div>
                            </div>
                        </div>
                        <div class="product_name">Teddy Bear</div>
                        <div class="product_qty">
                            <select class="form-control product_drop">
                                <option value="5">$ 50</option>
                                <option value="6">Qtv 2 - $ 90</option>
                            </select>
                        </div>

                        <div class="spinner_withbtn">
                            <div class="input-group qty_box">
                                <span class="qty_txt">Qty</span>
                                <input type="number" class="form-control text-center qty_edittxt" min="0" max="10"
                                       value="0">
                            </div>
                            <button class="spinner_addcardbtn btn-primary" type="button" onclick="AddTOcart(this);">
                                <i class="mdi mdi-basket-unfill"></i> <span class="button-group_text">Add</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="product_block">
                        <div class="save_amt">Save Rs. 10</div>
                        <div class="product_amt">
                            <span class="product_amt_less">
        <i class="mdi mdi-currency-inr"></i>40.00</span>
                            <span class="product_amt_real">
        <i class="mdi mdi-currency-inr"></i>50.00</span>
                        </div>
                        <div class="product_img">
                            <img src="images/teddy-7.jpg">
                            <div class="hover_center_block">
                                <div class="product_hover_block" onclick="Initialize_ProductDetails();"
                                     data-toggle="modal"
                                     data-target="#Modal_ViewProductDetails">
                                    <div class="mdi mdi-magnify"></div>
                                </div>
                            </div>
                        </div>
                        <div class="product_name"> Teddy Bear</div>
                        <div class="product_qty">
                            <select class="form-control product_drop">
                                <option value="5">$ 50</option>
                                <option value="6">Qtv 2 - $ 90</option>
                            </select>
                        </div>
                        <div class="spinner_withbtn">
                            <div class="input-group qty_box">
                                <span class="qty_txt">Qty</span>
                                <input type="number" class="form-control text-center qty_edittxt" min="0" max="10"
                                       value="0">
                            </div>
                            <button class="spinner_addcardbtn btn-primary" type="button" onclick="AddTOcart(this);">
                                <i class="mdi mdi-basket-unfill"></i> <span class="button-group_text">Add</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="product_block">
                        <div class="save_amt">Save Rs. 10</div>

                        <div class="product_amt">
                            <span class="product_amt_less">
        <i class="mdi mdi-currency-inr"></i>40.00</span>
                            <span class="product_amt_real">
        <i class="mdi mdi-currency-inr"></i>50.00</span>
                        </div>
                        <div class="product_img">
                            <img src="images/1.jpg">
                            <div class="hover_center_block">
                                <div class="product_hover_block" onclick="Initialize_ProductDetails();"
                                     data-toggle="modal"
                                     data-target="#Modal_ViewProductDetails">
                                    <div class="mdi mdi-magnify"></div>
                                </div>
                            </div>
                        </div>
                        <div class="product_name"> Diver Helmet (Scuba)</div>
                        <div class="product_qty">
                            <select class="form-control product_drop">
                                <option value="5">1 kg - Rs.18.00</option>
                                <option value="6">500 gm - Rs.9.00</option>
                            </select>
                        </div>

                        <div class="spinner_withbtn">
                            <div class="input-group qty_box">
                                <span class="qty_txt">Qty</span>
                                <input type="number" class="form-control text-center qty_edittxt" min="0" max="10"
                                       value="0">
                            </div>
                            <button class="spinner_addcardbtn btn-primary" type="button" onclick="AddTOcart(this);">
                                <i class="mdi mdi-basket-unfill"></i> <span class="button-group_text">Add</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="product_block">
                        <div class="save_amt">Save Rs. 10</div>
                        <div class="product_amt">
                            <span class="product_amt_less">
        <i class="mdi mdi-currency-inr"></i>40.00</span>
                            <span class="product_amt_real">
        <i class="mdi mdi-currency-inr"></i>50.00</span>
                        </div>
                        <div class="product_img">
                            <img src="images/5.jpg">
                            <div class="hover_center_block">
                                <div class="product_hover_block" onclick="Initialize_ProductDetails();"
                                     data-toggle="modal"
                                     data-target="#Modal_ViewProductDetails">
                                    <div class="mdi mdi-magnify"></div>
                                </div>
                            </div>
                        </div>
                        <div class="product_name"> Diver Helmet (Scuba)</div>
                        <div class="product_qty">
                            <select class="form-control product_drop">
                                <option value="5">$90</option>
                                <option value="6">Qty 2 - $150</option>
                            </select>
                        </div>
                        <div class="spinner_withbtn">
                            <div class="input-group qty_box">
                                <span class="qty_txt">Qty</span>
                                <input type="number" class="form-control text-center qty_edittxt" min="0" max="10"
                                       value="0">
                            </div>
                            <button class="spinner_addcardbtn btn-primary" type="button" onclick="AddTOcart(this);">
                                <i class="mdi mdi-basket-unfill"></i> <span class="button-group_text">Add</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="product_block">
                        <div class="save_amt">Save Rs. 10</div>

                        <div class="product_amt">
                            <span class="product_amt_less">
        <i class="mdi mdi-currency-inr"></i>40.00</span>
                            <span class="product_amt_real">
        <i class="mdi mdi-currency-inr"></i>50.00</span>
                        </div>
                        <div class="product_img">
                            <img src="images/4.jpg">
                            <div class="hover_center_block">
                                <div class="product_hover_block" onclick="Initialize_ProductDetails();"
                                     data-toggle="modal"
                                     data-target="#Modal_ViewProductDetails">
                                    <div class="mdi mdi-magnify"></div>
                                </div>
                            </div>
                        </div>
                        <div class="product_name"> Diver Helmet (Scuba)</div>
                        <div class="product_qty">
                            <select class="form-control product_drop">
                                <option value="5">$90</option>
                                <option value="6">Qty 2 - $150</option>
                            </select>
                        </div>

                        <div class="spinner_withbtn">
                            <div class="input-group qty_box">
                                <span class="qty_txt">Qty</span>
                                <input type="number" class="form-control text-center qty_edittxt" min="0" max="10"
                                       value="0">
                            </div>
                            <button class="spinner_addcardbtn btn-primary" type="button" onclick="AddTOcart(this);">
                                <i class="mdi mdi-basket-unfill"></i> <span class="button-group_text">Add</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="product_block">
                        <div class="save_amt">Save Rs. 10</div>
                        <div class="product_amt">
                            <span class="product_amt_less">
        <i class="mdi mdi-currency-inr"></i>40.00</span>
                            <span class="product_amt_real">
        <i class="mdi mdi-currency-inr"></i>50.00</span>
                        </div>
                        <div class="product_img">
                            <img src="images/2.jpg">
                            <div class="hover_center_block">
                                <div class="product_hover_block" onclick="Initialize_ProductDetails();"
                                     data-toggle="modal"
                                     data-target="#Modal_ViewProductDetails">
                                    <div class="mdi mdi-magnify"></div>
                                </div>
                            </div>
                        </div>
                        <div class="product_name">Diver Helmet (Scuba)</div>
                        <div class="product_qty">
                            <select class="form-control product_drop">
                                <option value="5">$90</option>
                                <option value="6">Qty 2 - $150</option>
                            </select>
                        </div>
                        <div class="spinner_withbtn">
                            <div class="input-group qty_box">
                                <span class="qty_txt">Qty</span>
                                <input type="number" class="form-control text-center qty_edittxt" min="0" max="10"
                                       value="0">
                            </div>
                            <button class="spinner_addcardbtn btn-primary" type="button" onclick="AddTOcart(this);">
                                <i class="mdi mdi-basket-unfill"></i> <span class="button-group_text">Add</span>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<?php include_once("master/footer.php") ?>
<div id="Modal_ViewProductDetails" class="modal fade-scale" tabindex="-1" aria-labelledby="myModalLabel" role="dialog">
    <div class="modal-dialog product_details_model">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> Divers Helmet</h4>
            </div>
            <div class="modal-body">
                <div class="all_data_view">
                    <div class="col-sm-6">
                        <div class="magnifyimages_box">
                            <div class="magnify">
                                <div class="large" id="view_large_bg"></div>
                                <img class="small" id="view_images" src="images/1.jpg"/>
                            </div>
                            <div class="images_thumbbox">
                                <img class="brics_images" src="images/1.jpg" onclick="appendimages(this);"/>
                                <img class="brics_images" src="images/2.jpg" onclick="appendimages(this);"/>
                                <img class="brics_images" src="images/3.jpg" onclick="appendimages(this);"/>
                                <img class="brics_images" src="images/4.jpg" onclick="appendimages(this);"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="more_other_details">
                            <div class="more_product_head">
                                Divers Helmet
                            </div>
                            <div class="more_details_txtrow">
                                <div class="option_txt">Price :</div>
                                <div class="order_amt"><i class="mdi mdi-currency-usd"></i>300.00</div>
                            </div>
                            <div class="more_details_txtrow">
                                <div class="option_txt">Qty :</div>
                                <input type="number" min="1" max="10" class="form-control text-center more_details_qty" value="1"/>
                            </div>
                            <div class="more_details_txtrow">
                                <div class="product_viewmore_btn_box">
                                    <div class="btn btn-warning btn-sm">
                                        <i class="mdi mdi-basket-unfill basic_icon_margin"></i>Add To card
                                    </div>
                                    <a href="checkout.php" class="btn keep-shoping btn-sm pull-right"><i class="mdi mdi-cart basic_icon_margin"></i>Buy Now</a>
                                </div>
                            </div>
                            <div class="more_product_head">
                                Description :
                            </div>
                            <div class="more_product_details">
                                Fortune Plus Soya Oil Pouch 1 LT Fortune Plus Soya Oil Pouch 1 LT Fortune Plus Soya Oil
                                Pouch 1 LTFortune Plus Soya Oil Pouch 1 LT Fortune Plus Soya Oil Pouch 1 LT
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div id="Modal_NotifyMe" class="modal fade-scale" tabindex="-1" aria-labelledby="myModalLabel" role="dialog">
    <div class="modal-dialog notifyme_model">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Notify Me for Product</h4>
            </div>
            <div class="modal-body">
                <div class="all_data_view">
                    <div class="model_row">
                        <input type="text" class="form-control" placeholder="Email Id"/>
                    </div>
                    <div class="model_row">
                        <input type="text" class="form-control" placeholder="Mobile No."/>
                    </div>
                    <div class="model_row">
                        <input type="text" class="form-control" placeholder="city"/>
                    </div>
                    <div class="model_row">
                        <textarea class="form-control glo_txtarea" placeholder="Massage for product"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $(".brics_5").owlCarousel({
            items: 4,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 1000,
            autoplayHoverPause: true,
            navigation: true
        });
    });
</script>
</body>
</html>
