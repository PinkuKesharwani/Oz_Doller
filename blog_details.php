<!DOCTYPE >
<html lang="en">
<head>
    <title>Oz Doller | Blog Details</title>
    <?php include_once("master/plugin.php") ?>
    <style type="text/css">
        .blog_detail_box {
            -webkit-line-clamp: 100;
        }
        .view_similiour_headbox
        {
            margin-bottom: 10px;
            width: 100%;
        }
        .blog_details_container {
            display: inline-block;
            width: 100%;
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .blog_details_imgbox {
            width: 100%;
        }

        .blog_details_imgbox img {
            width: 100%;
            -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, .18), 0 4px 15px 0 rgba(0, 0, 0, .15);
            box-shadow: 0 5px 11px 0 rgba(0, 0, 0, .18), 0 4px 15px 0 rgba(0, 0, 0, .15);
            -webkit-border-radius: .25rem;
            border-radius: .25rem;
        }

        .blog_details_txtbox {
            text-align: center;
            padding: 20px;
            width: 96%;
            background: #ffffff;
            border-radius: .25rem;
            margin-left: 2%;
            z-index: 10;
            margin-top: -30px;
            box-shadow: rgba(0, 0, 0, 0.08) 5px 8px 20px, rgba(72, 67, 67, 0.23) 0px 2px 5px;
        }

        .blog_details_btnbox {
            display: inline-block;
            width: 100%;
            margin-top: 10px;
        }

        .blog-details-btn {
            padding: 8px 20px;
            color: #ffffff !important;
            border-radius: 30px;
            margin: 0px 5px;
            outline: none;
        }

        .blog-details-btn:hover, .blog-details-btn:active, .blog-details-btn:focus {
            webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, .18), 0 4px 15px 0 rgba(0, 0, 0, .15);
            box-shadow: 0 5px 11px 0 rgba(0, 0, 0, .18), 0 4px 15px 0 rgba(0, 0, 0, .15);
            outline: 0;
        }

        .blog-details-btn i {
            margin-right: 10px;
            border-right: solid thin #ffffffbd;
            padding-right: 10px;
        }
        .related_row_title
        {
            font-size: 18px;
            color: #e4002b;
            text-shadow: 1px 1px #ff00006b;
        }
        .similar_blog_list {
            background: #ffffff;
        }
        .simi_row {
            width: 100%;
            position: relative;
            padding: 5px 5px 0px 75px;
            border-bottom: solid thin #e1e1e1;
            min-height: 72px;
            cursor: pointer;
        }
        .simi_img_box {
            position: absolute;
            width: 60px;
            height: 60px;
            border: solid 3px #ffffff;
            left: 5px;
            box-shadow: rgba(0, 0, 0, 0) 5px 0px 0px 20px, rgba(74, 70, 70, 0.23) 0px 2px 5px;
        }
        .simi_img_box img {
            width: 100%;
            height: 100%;
        }
        .simi_by {
            font-size: 12px;
            color: #7d7d7d;
            margin-top: 5px;
        }
        .simi_row:hover  .related_row_title
        {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<?php include_once("master/header.php") ?>
<section class="product_maincontainer">
    <div class="product_section">
        <div class="main_heading contact_head">
            <div class="main_head_txt">
                Blog Details
            </div>
            <div class="organic_border">
                <span class="organic_icons"></span>
            </div>

        </div>
        <div class="container">
            <div class="main_blog_container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="blog_details_container">
                            <div class="blog_details_imgbox">
                                <img src="images/oz-images/about-img.jpeg">
                            </div>
                            <div class="blog_details_txtbox">
                                <div class="blog_container">
                                    <h3 class="h3_heading">
                                        Title of the blog</h3>
                                    <div class="name">
                                        <span>Written by</span>
                                        <span class="heading_blog_client_name">Deeksha Vishwakarma, </span>
                                        <span>23/01/2018</span>
                                    </div>
                                    <p class="blog_detail_box">Nemo enim ipsam voluptatem quia voluptas sit aspernatur
                                        aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                                        voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia
                                        dolor sit amet, psam voluptatem quia consectetur. Nemo enim ipsam voluptatem
                                        quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
                                        dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui
                                        dolorem ipsum quia dolor sit amet, psam voluptatem quia consectetur.</p>
                                    <div class="blog_details_btnbox">
                                        <button class="btn blog-details-btn fb">

                                            <i class="mdi mdi-facebook"></i>Facebook
                                        </button>
                                        <button class="btn blog-details-btn tw">

                                            <i class="mdi mdi-twitter"></i>Twitter
                                        </button>
                                        <button class="btn blog-details-btn googleplus">

                                            <i class="mdi mdi-google-plus"></i>Google+
                                        </button>
                                        <button class="btn blog-details-btn linkedin">

                                            <i class="mdi mdi-linkedin"></i>Linkedin
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="view_similiour_headbox">
                            <div class="viewtype_txt">Similar Blogs</div>
                        </div>
                        <div class="similar_blog_list">
                            <div class="simi_row">
                                <div class="simi_img_box">
                                    <img src="images/oz-images/about-img.jpeg" />
                                </div>
                                <div class="simi_details">
                                    <div class="related_row_title">Related blog title</div>
                                    <div class="simi_by">DEEKSHA VISHWAKARMA, 23/01/2018</div>
                                </div>
                            </div>
                            <div class="simi_row">
                                <div class="simi_img_box">
                                    <img src="images/oz-images/blog-about-img.jpg" />
                                </div>
                                <div class="simi_details">
                                    <div class="related_row_title">Related blog title</div>
                                    <div class="simi_by">DEEKSHA VISHWAKARMA, 23/01/2018</div>
                                </div>
                            </div>
                            <div class="simi_row">
                                <div class="simi_img_box">
                                    <img src="images/oz-images/about-oz-center.png" />
                                </div>
                                <div class="simi_details">
                                    <div class="related_row_title">Related blog title</div>
                                    <div class="simi_by">DEEKSHA VISHWAKARMA, 23/01/2018</div>
                                </div>
                            </div>
                            <div class="simi_row">
                                <div class="simi_img_box">
                                    <img src="images/oz-images/oz-fevicon.png" />
                                </div>
                                <div class="simi_details">
                                    <div class="related_row_title">Related blog title</div>
                                    <div class="simi_by">DEEKSHA VISHWAKARMA, 23/01/2018</div>
                                </div>
                            </div>
                            <div class="simi_row">
                                <div class="simi_img_box">
                                    <img src="images/oz-images/about-img.jpeg" />
                                </div>
                                <div class="simi_details">
                                    <div class="related_row_title">Related blog title</div>
                                    <div class="simi_by">DEEKSHA VISHWAKARMA, 23/01/2018</div>
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
