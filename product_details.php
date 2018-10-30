<!DOCTYPE>
<html lang="en">
<head>
    <title>Product Details</title>
    <?php include_once("master/plugin.php") ?>
    <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
</head>
<body class="body_color">
<?php include_once("master/header.php") ?>
<section class="product_viewblock">
    <div class="container-fluid">
        <div class="all_data_view">
            <div class="col-sm-5 filter_right_fixed">
                <div class="product_magnifyimages_box" id="product_details_containner">
                    <div class="magnify">
                        <div class="large" id="view_large_bg"></div>
                        <img class="small" id="view_images" src="images/1.jpg"/>
                    </div>
                    <div class="product_images_thumbbox">
                        <img class="product_brics_images" src="images/1.jpg" onclick="appendimages(this);">
                        <img class="product_brics_images" src="images/2.jpg" onclick="appendimages(this);">
                        <img class="product_brics_images" src="images/4.jpg" onclick="appendimages(this);">
                        <img class="product_brics_images" src="images/5.jpg" onclick="appendimages(this);">
                    </div>
                    <div class="availability_boxes">
                        <div class="more_details_txtrow">
                            <div class="option_txt">Price :</div>
                            <div class="order_amt"><i class="mdi mdi-currency-usd"></i>300.00</div>
                        </div>
                        <div class="more_details_txtrow">
                            <div class="option_txt">Qty :</div>
                            <input type="number" min="1" max="10" class="form-control text-center more_details_qty"
                                   value="1">
                        </div>
                        <div class="product_btn_box">
                            <div class="btn btn-warning product_add_tocard" onclick="AddTOcart(this);"
                                 style="margin-right: 6%;">
                                <i class="mdi mdi-basket"></i>Add To card
                            </div>
                            <a href="checkout.php" class="btn keep-shoping product_add_tocard"><i
                                        class="mdi mdi-cart"></i>Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="more_productother_details">
                    <div class="more_product_head">
                        Divers Helmet
                    </div>
                    <div class="product_row">
                        <div class="rating_box" onclick="Rating_slide();">
                            <div class="star_with_txt">
                                <i class="mdi mdi-star"></i>4.0
                            </div>
                            15 Ratings
                        </div>
                        <div class="review_box" onclick="Review_slide();">
                            <div class="star_with_txt">
                                <i class="mdi mdi-message-reply-text"></i></div>
                            05 Reviews
                        </div>
                    </div>
                    <div class="product_row" style="display: none">
                        <div class="real_amt">
                            <i class="mdi mdi-currency-inr"></i>
                            150.00
                        </div>
                        <div class="less_amt">
                            <i class="mdi mdi-currency-inr"></i>
                            180.00
                        </div>
                    </div>
                    <div class="more_product_head product_mainhead">Delivery</div>

                    <div class="option_availability">
                        <div class="option_txt">Delivery</div>
                        <div class="product_right_txt">
                            Usually delivered in 1-2 days.
                        </div>
                    </div>
                    <div class="more_product_head product_mainhead">
                        Specifications :
                    </div>
                    <div class="option_availability">
                        <div class="option_txt">Brand</div>
                        <div class="product_right_txt">
                            Vintage World
                        </div>
                    </div>
                    <div class="option_availability">
                        <div class="option_txt">Model Name</div>
                        <div class="product_right_txt">
                            DH100
                        </div>
                    </div>
                    <div class="option_availability">
                        <div class="option_txt">Product Name</div>
                        <div class="product_right_txt">
                            Diver Helmet (Scuba)
                        </div>
                    </div>
                    <div class="option_availability">
                        <div class="option_txt">Pack Contents</div>
                        <div class="product_right_txt">
                            Deep Sea Divers Helmet US Navy Mark V
                        </div>
                    </div>
                    <div class="option_availability">
                        <div class="option_txt">Colour</div>
                        <div class="product_right_txt">
                            Antique Brass & Copper Finish
                        </div>
                    </div>
                    <div class="option_availability">
                        <div class="option_txt">Materials</div>
                        <div class="product_right_txt">
                            Brass & Copper Mix
                        </div>
                    </div>
                    <div class="option_availability">
                        <div class="option_txt">Product Width</div>
                        <div class="product_right_txt">
                            180mm
                        </div>
                    </div>
                    <div class="option_availability">
                        <div class="option_txt">Product Diameter</div>
                        <div class="product_right_txt">
                            160mm
                        </div>
                    </div>
                    <div class="option_availability">
                        <div class="option_txt">Product Height</div>
                        <div class="product_right_txt">
                            180mm
                        </div>
                    </div>
                    <div class="option_availability">
                        <div class="option_txt">Product Weight</div>
                        <div class="product_right_txt">
                            1157g
                        </div>
                    </div>

                    <div class="option_availability">
                        <div class="option_txt">Shipped From</div>
                        <div class="product_right_txt">
                            Melbourne
                        </div>
                    </div>
                    <div class="option_availability">
                        <div class="option_txt">Shipping Provider</div>
                        <div class="product_right_txt">
                            Australia Post & All Major Courier Services
                        </div>
                    </div>

                    <div class="option_availability">
                        <div class="option_txt">Returns</div>
                        <div class="product_right_txt">
                            Easy Return & Exchange
                        </div>
                    </div>
                    <div class="option_availability">
                        <div class="option_txt">Insurance</div>
                        <div class="product_right_txt">
                            Recommended At Extra Cost, Please Ask For Details
                        </div>
                    </div>

                    <div class="more_product_head product_mainhead">
                        Further Information
                    </div>
                    <div class="more_product_details">
                        Visit our Facebook page, Vintage Nautical Australia.
                    </div>
                    <div class="more_product_head product_mainhead">
                        Key Attributes
                    </div>
                    <div class="more_product_details">
                        Front Window, Book Shelf Size, Hand Made, Vintage Antique Finish
                    </div>
                    <div class="more_product_head product_mainhead">
                        Uses
                    </div>
                    <div class="more_product_details">
                        Home Decor, Gift, Souvenir, Collectable, History, Art and Craft.
                    </div>
                    <div class="more_product_head product_mainhead">
                        Disclaimer
                    </div>
                    <div class="more_product_details">
                        All of our items are handmade (HANDCRAFTED) by master artisans who employ techniques (TOOLS)
                        and traditions that are often centuries old. Some natural blemishes or imperfections are to
                        be expected. These are not product flaws. Instead, they are precisely what make these pieces
                        so extraordinary and beautiful
                    </div>
                    <div class="more_product_head product_mainhead">
                        Description
                    </div>
                    <div class="more_product_details">
                        From 1916 to 1984 the Mark V was notorious for being one of the best-known nautical diving
                        helmets in the world used by the US Navy. Morse, Schrader, Desco and Miller Dunn were four
                        renowned companies that produced the Mark V with very slight differences. Currently, due to
                        a limited amount available on the market, Morse and Desco still produce new maritime helmets
                        on customer demand. The standard Mark V diving helmet weighs approximately 25kg offering
                        provisions for communications, underwear vision, and head protection to deep sea divers.

                        There’s something ominous, almost intimidating in the grandiose size and shape of the
                        diver’s helmets first designed and used in middle of the 19th century. Is it the lack of
                        observable features of the diver beneath it? The arrogance of human invention in forging a
                        miniature topside atmosphere in a bubble of copper, brass or other steels, materials known
                        for their heavy weight and mass? Or is it these helmets and their matching suits symbolise
                        the human urge to go where we are not supposed to and do there what shouldn’t be done, our
                        need to be the master of not just our domain but the god that controls and understands
                        everything as far as our (telescopic, electronic) eyes can see? Food for thought.

                        Regardless, with it’s life-size scale, kilo’s of gleaming copper and shiny brass, authentic
                        craftsmanship and antique styling, a Vintage World Divers Helmet an eye-catching slice (or,
                        more accurately, slab) of pioneering history in any setting. Give it pride of place in the
                        company foyer, the boardroom or the Director’s office at work. Or place it amongst your
                        vintage collection at home and watch the eyes of your guests widen as they take in the
                        show-stopping beauty of what could just be the greatest gift idea ever for someone with a
                        passion for the sea and ocean, battling an obsession with man’s history of expedition and
                        knowledge seeking, or for that person who just likes beautiful, meaningful things.
                    </div>
                    <div class="more_product_head product_mainhead" id="rating_product_row">
                        Ratings :
                    </div>
                    <div class="product_row">
                        <div class="well well-sm">
                            <div class="row">
                                <div class="col-xs-12 col-md-6 text-center">
                                    <h1 class="rating-num">
                                        4.0</h1>
                                    <div class="rating">
                                        <span class="glyphicon glyphicon-star"></span><span
                                                class="glyphicon glyphicon-star">
                            </span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star">
                            </span><span class="glyphicon glyphicon-star-empty"></span>
                                    </div>
                                    <div>
                                        <span class="glyphicon glyphicon-user"></span>15 total
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <div class="row rating-desc">
                                        <div class="col-xs-3 col-md-3 text-right">
                                            <span class="glyphicon glyphicon-star"></span>5
                                        </div>
                                        <div class="col-xs-8 col-md-9">
                                            <div class="progress progress-striped">
                                                <div class="progress-bar progress-bar-success" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                                                     style="width: 80%">
                                                    <span class="sr-only">80%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end 5 -->
                                        <div class="col-xs-3 col-md-3 text-right">
                                            <span class="glyphicon glyphicon-star"></span>4
                                        </div>
                                        <div class="col-xs-8 col-md-9">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-success" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                                                     style="width: 60%">
                                                    <span class="sr-only">60%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end 4 -->
                                        <div class="col-xs-3 col-md-3 text-right">
                                            <span class="glyphicon glyphicon-star"></span>3
                                        </div>
                                        <div class="col-xs-8 col-md-9">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-info" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                                                     style="width: 40%">
                                                    <span class="sr-only">40%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end 3 -->
                                        <div class="col-xs-3 col-md-3 text-right">
                                            <span class="glyphicon glyphicon-star"></span>2
                                        </div>
                                        <div class="col-xs-8 col-md-9">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-warning" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                                                     style="width: 20%">
                                                    <span class="sr-only">20%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end 2 -->
                                        <div class="col-xs-3 col-md-3 text-right">
                                            <span class="glyphicon glyphicon-star"></span>1
                                        </div>
                                        <div class="col-xs-8 col-md-9">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-danger" role="progressbar"
                                                     aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                                     style="width: 15%">
                                                    <span class="sr-only">15%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end 1 -->
                                    </div>
                                    <!-- end row -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="more_product_head product_mainhead" id="review_product_row">
                        Reviews :
                    </div>
                    <div class="product_row">
                        <div class="review-block">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="images/testominial_img4.jpg" class="img-rounded">
                                    <div class="review-block-name"><a href="#">Sandhya Borkar</a></div>
                                    <div class="review-block-date">29-jun-2018</div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="review-block-rate">
                                        <button type="button" class="btn keep-shoping btn-xs"
                                                aria-label="Left Align">
                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        </button>
                                        <button type="button" class="btn keep-shoping btn-xs"
                                                aria-label="Left Align">
                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        </button>
                                        <button type="button" class="btn keep-shoping btn-xs"
                                                aria-label="Left Align">
                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        </button>
                                        <button type="button" class="btn keep-shoping btn-grey btn-xs"
                                                aria-label="Left Align">
                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        </button>
                                        <button type="button" class="btn btn-default btn-grey btn-xs"
                                                aria-label="Left Align">
                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        </button>
                                    </div>

                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="images/testominial_img5.jpg" class="img-rounded">
                                    <div class="review-block-name"><a href="#">Anurag Agrawal</a></div>
                                    <div class="review-block-date">29-jun-2018</div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="review-block-rate">
                                        <button type="button" class="btn keep-shoping btn-xs"
                                                aria-label="Left Align">
                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        </button>
                                        <button type="button" class="btn keep-shoping btn-xs"
                                                aria-label="Left Align">
                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        </button>
                                        <button type="button" class="btn keep-shoping btn-xs"
                                                aria-label="Left Align">
                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        </button>
                                        <button type="button" class="btn keep-shoping btn-grey btn-xs"
                                                aria-label="Left Align">
                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        </button>
                                        <button type="button" class="btn keep-shoping  btn-xs"
                                                aria-label="Left Align">
                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        </button>
                                    </div>
                                    <div class="review-block-title">this was nice in buy</div>
                                    <div class="review-block-description">I found this product very satisfactory.
                                        got rid of unwanted scars. A must buy for all dealing with scars and marks.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="similer-product">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="view_similiour_headbox">
                <div class="viewtype_txt">Similar Products</div>
                <a href="allproduct.php" class="btn keep-shoping pull-right"><i class="mdi mdi-briefcase-check basic_icon_margin"></i>View All</a>
            </div>
            <div class="more_productother_details">
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
                            <i class="mdi mdi-basket"></i> <span class="button-group_text">Add</span></button>
                    </div>
                </div>
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
                            <i class="mdi mdi-basket"></i> <span class="button-group_text">Add</span></button>
                    </div>
                </div>
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
                            <i class="mdi mdi-basket"></i> <span class="button-group_text">Add</span></button>
                    </div>
                </div>
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
                            <i class="mdi mdi-basket"></i> <span class="button-group_text">Add</span></button>
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
    function appendimages(dis) {
        var src_no = $(dis).attr('src');
        $('#view_images').attr('src', src_no);
        $('#view_large_bg').css('background-image', 'url("' + src_no + '")');
        Initialize_ProductDetails();
    }
    function Initialize_ProductDetails() {
        var native_width = 0;
        var native_height = 0;
        $(".large").css("background", "url('" + $(".small").attr("src") + "') no-repeat");
        //Now the mousemove function
        $(".magnify").mousemove(function (e) {
            if (!native_width && !native_height) {
                var image_object = new Image();
                image_object.src = $(".small").attr("src");
                native_width = image_object.width;
                native_height = image_object.height;
            }
            else {
                var magnify_offset = $(this).offset();
                var mx = e.pageX - magnify_offset.left;
                var my = e.pageY - magnify_offset.top;
                if (mx < $(this).width() && my < $(this).height() && mx > 0 && my > 0) {
                    $(".large").fadeIn(100);
                }
                else {
                    $(".large").fadeOut(100);
                }
                if ($(".large").is(":visible")) {
                    var rx = Math.round(mx / $(".small").width() * native_width - $(".large").width() / 2) * -1;
                    var ry = Math.round(my / $(".small").height() * native_height - $(".large").height() / 2) * -1;
                    var bgp = rx + "px " + ry + "px";
                    var px = mx - $(".large").width() / 2;
                    var py = my - $(".large").height() / 2;
                    $(".large").css({left: px, top: py, backgroundPosition: bgp});
                }
            }
        });
    }
    function AddTOcart(dis) {
        var cart = $('#baskit_block');
        var cart_counter = $('#baskit_counter');
        var cart_value = Number($(cart_counter).text());
        cart_value++;
        //var imgtodrag = $(dis).parent().parent().find("img").eq(0);
        var imgtodrag = $('#view_images').eq(0);
        if (imgtodrag) {
            var imgclone = imgtodrag.clone()
                .offset({
                    top: imgtodrag.offset().top,
                    left: imgtodrag.offset().left
                })
                .css({
                    'opacity': '0.5',
                    'position': 'absolute',
                    'height': '150px',
                    'width': '150px',
                    'z-index': '100'
                })
                .appendTo($('body'))
                .animate({
                    'top': cart.offset().top + 10,
                    'left': cart.offset().left + 10,
                    'width': 50,
                    'height': 50
                }, 1000, 'easeInOutExpo');

            setTimeout(function () {
                cart.effect("shake", {
                    times: 1
                }, 100);
                cart_counter.text(cart_value);
            }, 1500);

            imgclone.animate({
                'width': 0,
                'height': 0
            }, function () {
                $(this).detach()
            });
        }
    }
    $(document).ready(function () {
        Initialize_ProductDetails();
    });
    function Rating_slide() {
        var rating_position = $('#rating_product_row').offset().top;
        $('html, body').animate({scrollTop: rating_position - 95}, 1000);
    }
    function Review_slide() {
        var review_position = $('#review_product_row').offset().top;
        $('html, body').animate({scrollTop: review_position - 95}, 1000);
    }
</script>
</body>
</html>