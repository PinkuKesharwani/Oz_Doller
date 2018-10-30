<!DOCTYPE >
<html lang="en">
<head>
    <title>Oz Doller | About us</title>
    <?php include_once("master/plugin.php") ?>
    <style type="text/css">
        .about-us-main-box {
            margin-top: 100px;
        }

        .about-us-blog-box {
            margin-top: 100px;
            margin-bottom: 100px;
        }

        .about-us-image-outer-box {
            position: relative;
            border: 4px solid #e6d7a7;
            width: 410px;
            height: 400px;
        }

        .about-us-image-inner-box {
            position: absolute;
            top: 44px;
            left: 44px;
        }

        .about-us-contant p {
            font-size: 21px;
            font-family: -webkit-body;
            color: #636362;
            line-height: 47px;
        }

        .about-us-contant h1 {
            font-family: -webkit-body;
        }

        .about-us-contant h2 {

            font-family: -webkit-body;
            font-weight: 600;
            font-size: 35px;
        }

        .about-us-blog-section h2 {
            font-family: -webkit-body;
            font-weight: 600;
            font-size: 35px;
        }

        .about-us-blog-section {
            text-align: center;
        }

        .about-blog-img {
            width: 100%;
            height: 285px;
        }

        .about-blog {
            background: #fafafa;
            display: flex;
        }

        .about-blog-box {
            width: 50%;
        }

        .blog-contant-about {
            text-align: center;
            line-height: 33px;
            padding: 20px;
            color: #616161;
        }

        .blog-contant-about h4 {
            font-size: 21px;
            /*color: #8e8c8c;*/
        }

        .blog-contant-about p {
            font-size: 16px;

        }

        .blog-contant-about p span {
            margin-right: 5px;
        }

        .aboutus-main-img {
            width: 420px;
            min-height: 410px;

        }
    </style>
</head>
<body>
<?php include_once("master/header.php") ?>
<section class="product_maincontainer about-us-main-box">
    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <div class="about-us-image-outer-box">
                    <div class="about-us-image-inner-box">
                        <img src="images/oz-images/about-img.jpg" class="aboutus-main-img" alt="oz-doller"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-us-contant">
                    <h1>WELCOME TO OZDOLLARS</h1>
                    <p>
                        Ozdollars incorporated in 2017, is one stop destination for those looking for Home Decor,
                        Nautical gift, Décor, Medieval Antique reproduction items from worldwide in various designs
                        sizes. Each of our product maintains the most decent prices around at the highest possible
                        quality.
                        Ozdollars believes in building a long term relationship with the buyers by providing best
                        quality products, packing and smooth deliveries.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="product_maincontainer about-us-blog-box">
    <div class="container">
        <div class="about-us-blog-section">
            <h2>Lastest new of week</h2>
            <div class="organic_border">
                <span class="organic_icons"></span>
            </div>
        </div>
        <div class="row about-blog">
            <div class="about-blog-box">
                <div class="blog-img">
                    <img src="images/oz-images/blog-about-img.jpg" class="about-blog-img">
                </div>
            </div>
            <div class="about-blog-box">
                <div class="blog-contant-about">
                    <h4>Blog</h4>
                    <p>13 Spaces with High-Style Ceilings</p>
                    <p>
                        <span class="mdi mdi-clock"></span>October 5, 2017
                        <span class="mdi mdi-account"></span>Admin
                    </p>
                    <p>This country home in Hampshire, England, was built from chalk in 1904, and it was used as a
                        boarding school for...</p>
                    <a href="">View More</a>
                </div>
            </div>
        </div>
        <div class="row about-blog">
            <div class="about-blog-box">
                <div class="blog-contant-about">
                    <h4>Blog</h4>
                    <p>13 Spaces with High-Style Ceilings</p>
                    <p>
                        <span class="mdi mdi-clock"></span>October 5, 2017
                        <span class="mdi mdi-account"></span>Admin
                    </p>

                    <p>This country home in Hampshire, England, was built from chalk in 1904, and it was used as a
                        boarding school for...</p>
                    <a>View More</a>
                </div>
            </div>
            <div class="about-blog-box">
                <div class="blog-img">
                    <img src="images/oz-images/blog-about-img.jpg" class="about-blog-img">
                </div>
            </div>

        </div>
    </div>
</section>
<?php include_once("master/footer.php") ?>
</body>
