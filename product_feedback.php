<!DOCTYPE>
<html lang="en">
<head>
    <title>OZ DOLLARS | Product Feedback</title>
    <?php include_once("master/plugin.php") ?>
    <style type="text/css">

    </style>
    <script type="text/javascript">
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
        function SelectStar(dis) {
            $(dis).parent().find('input.rating-value').val($(dis).data('rating'));
            var $star_rating = $(dis).parent().find('.mdi');
            $star_rating.each(function() {
                if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
                    return $(this).removeClass('mdi-star-outline').addClass('mdi-star');
                } else {
                    return $(this).removeClass('mdi-star').addClass('mdi-star-outline');
                }
            });
        }
    </script>
</head>
<body class="body_color">
<?php include_once("master/header.php")?>
<section class="feedback_block">
    <div class="container-fluid">
        <div class="col-sm-12 col-md-9">
            <div class="order_listbox">
                <div class="carousal_head">
                    <span class="filter_head_txt slider_headtxt">Ratings & Reviews</span>
                </div>
                <div class="order_list_container">
                    <div class="order_row border-none">
                        <div class="order_details_box">
                            <div class="col-md-6 col-sm-12">
                                <div class="productdetails_order_row">
                                    <div class="order_product_imgbox">
                                        <img src="images/1.jpg" alt="Organic product">
                                    </div>
                                    <div class="product_name">
                                        Divers Helmet
                                    </div>
                                    <div class="option_availability">
                                        <div class="option_txt">Brand</div>
                                        <div class="product_right_txt">
                                            Vintage World
                                        </div>
                                    </div>
                                    <div class="option_availability">
                                        <div class="option_txt">Product Name</div>
                                        <div class="product_right_txt">
                                            Vintage Nautical Scuba Divers Helmet Green Antique Finish US Navy mk V Full Size
                                        </div>
                                    </div>

                             
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="feedback_heading">Rate this product</div>
                                <div class="feedback_txt">
                                    <div class="star-rating">
                                         <span onclick="SelectStar(this)" class="mdi mdi-star-outline" data-rating="1"
                                              data-toggle="tooltip" data-placement="top" title="Very Bad"></span>
                                         <span onclick="SelectStar(this)" class="mdi mdi-star-outline" data-rating="2"
                                              data-toggle="tooltip" data-placement="top" title="Bad"></span>
                                         <span onclick="SelectStar(this)" class="mdi mdi-star-outline" data-rating="3"
                                              data-toggle="tooltip" data-placement="top" title="Good"></span>
                                         <span onclick="SelectStar(this)" class="mdi mdi-star-outline" data-rating="4"
                                              data-toggle="tooltip" data-placement="top" title="Very Good"></span>
                                         <span onclick="SelectStar(this)" class="mdi mdi-star-outline" data-rating="5"
                                              data-toggle="tooltip" data-placement="top" title="Excellent"></span>
                                        <input type="hidden" name="whatever1" class="rating-value" value="">
                                    </div>
                                </div>
                                <div class="feedback_txt">
                                    <textarea class="form-control glo_txtarea" placeholder="Please give review for product" ></textarea>
                                </div>
                                <div class="btn  btn-sm pull-right keep-shoping">
                                    <span class="mdi mdi-playlist-edit basic_icon_margin"></span>Submit
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="order_row border-none">
                        <div class="order_details_box">
                            <div class="col-md-6 col-sm-12">
                                <div class="productdetails_order_row">
                                    <div class="order_product_imgbox">
                                        <img src="images/2.jpg" alt="Organic product">
                                    </div>
                                    <div class="product_name">
                                        Divers Helmet
                                    </div>
                                    <div class="option_availability">
                                        <div class="option_txt">Brand</div>
                                        <div class="product_right_txt">
                                            Vintage World
                                        </div>
                                    </div>
                                    <div class="option_availability">
                                        <div class="option_txt">Product Name</div>
                                        <div class="product_right_txt">
                                            Vintage Nautical Scuba Divers Helmet Green Antique Finish US Navy mk V Full Size
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="feedback_heading">Rate this product</div>
                                <div class="feedback_txt">
                                    <div class="star-rating">
                                        <span onclick="SelectStar(this)" class="mdi mdi-star-outline" data-rating="1" data-toggle="tooltip" data-placement="top" title="Very Bad"></span>
                                        <span onclick="SelectStar(this)" class="mdi mdi-star-outline" data-rating="2" data-toggle="tooltip" data-placement="top" title="Bad"></span>
                                        <span onclick="SelectStar(this)" class="mdi mdi-star-outline" data-rating="3" data-toggle="tooltip" data-placement="top" title="Good"></span>
                                        <span onclick="SelectStar(this)" class="mdi mdi-star-outline" data-rating="4" data-toggle="tooltip" data-placement="top" title="Very Good"></span>
                                        <span onclick="SelectStar(this)" class="mdi mdi-star-outline" data-rating="5" data-toggle="tooltip" data-placement="top" title="Excellent"></span>
                                        <input type="hidden" name="whatever1" class="rating-value" value="">
                                    </div>
                                </div>
                                <div class="feedback_txt">
                                    <textarea class="form-control glo_txtarea" placeholder="Please give review for product" ></textarea>
                                </div>
                                <div class="btn keep-shoping btn-sm pull-right">
                                    <span class="mdi mdi-playlist-edit basic_icon_margin"></span>Submit
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="order_row border-none">
                        <div class="order_details_box">
                            <div class="col-md-6 col-sm-12">
                                <div class="productdetails_order_row">
                                    <div class="order_product_imgbox">
                                        <img src="images/1.jpg" alt="Organic product">
                                    </div>
                                    <div class="product_name">
                                        Divers Helmet
                                    </div>
                                    <div class="option_availability">
                                        <div class="option_txt">Brand</div>
                                        <div class="product_right_txt">
                                            Vintage World
                                        </div>
                                    </div>
                                    <div class="option_availability">
                                        <div class="option_txt">Product Name</div>
                                        <div class="product_right_txt">
                                            Vintage Nautical Scuba Divers Helmet Green Antique Finish US Navy mk V Full Size
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="feedback_heading">Rate this product</div>
                                <div class="feedback_txt">
                                    <div class="star-rating">
                                         <span onclick="SelectStar(this)" class="mdi mdi-star-outline" data-rating="1"
                                              data-toggle="tooltip" data-placement="top" title="Very Bad"></span>
                                         <span onclick="SelectStar(this)" class="mdi mdi-star-outline" data-rating="2"
                                              data-toggle="tooltip" data-placement="top" title="Bad"></span>
                                         <span onclick="SelectStar(this)" class="mdi mdi-star-outline" data-rating="3"
                                              data-toggle="tooltip" data-placement="top" title="Good"></span>
                                         <span onclick="SelectStar(this)" class="mdi mdi-star-outline" data-rating="4"
                                              data-toggle="tooltip" data-placement="top" title="Very Good"></span>
                                         <span onclick="SelectStar(this)" class="mdi mdi-star-outline" data-rating="5"
                                              data-toggle="tooltip" data-placement="top" title="Excellent"></span>
                                        <input type="hidden" name="whatever1" class="rating-value" value="">
                                    </div>
                                </div>
                                <div class="feedback_txt">
                                    <textarea class="form-control glo_txtarea" placeholder="Please give review for product" ></textarea>
                                </div>
                                <div class="btn keep-shoping btn-sm pull-right">
                                    <span class="mdi mdi-playlist-edit basic_icon_margin"></span>Submit
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-3">
            <div class="order_listbox">
                <div class="carousal_head">
                    <span class="filter_head_txt slider_headtxt">What makes a good review</span>
                </div>
                <div class="order_list_container">
                    <div class="feedback_heading">
                        Have you used this product?
                    </div>
                    <div class="feedback_txt">
                        Your review should be about your experience with the product.
                    </div>
                    <hr>
                    <div class="feedback_heading">
                        Why review a product?
                    </div>
                    <div class="feedback_txt">
                        Your valuable feedback will help fellow shoppers decide!
                    </div>
                    <hr>
                    <div class="feedback_heading">
                        How to review a product?
                    </div>
                    <div class="feedback_txt">
                        Your review should include facts. An honest opinion is always appreciated.
                    </div>
                </div>
            </div>
        </div>
</section>
<?php include_once("master/footer.php") ?>
</body>
</html>