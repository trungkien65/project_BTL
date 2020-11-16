<!DOCTYPE html>
<html lang="zxx">
<head>
    <base href="<?php echo $_SERVER['SCRIPT_NAME'] ?>"
    <meta charset="UTF-8">
    <title>Trang chủ</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Toys Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--//meta tags ends here-->
    <!--booststrap-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <!--//booststrap end-->
    <!-- font-awesome icons -->
    <link href="assets/css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
    <!-- //font-awesome icons -->
    <!-- For Clients slider -->
    <link rel="stylesheet" href="assets/css/flexslider.css" type="text/css" media="all" />
    <!--flexs slider-->
    <link href="assets/css/JiSlider.css" rel="stylesheet">
    <!--Shoping cart-->
    <link rel="stylesheet" href="assets/css/shop.css" type="text/css" />
    <!--//Shoping cart-->
    <!--stylesheets-->
    <link href="assets/css/style.css" rel='stylesheet' type='text/css' media="all">
    <!--//stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700,900&amp;subset=latin-ext"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<!--header-->
    <?php require_once 'header.php';?>
<!--header-->
<div class="main-content">
    <div class="container">
        <?php if (isset($_SESSION['error'])): ?>
            <div class="alert alert-danger">
                <?php
                echo $_SESSION['error'];
                unset($_SESSION['error']);
                ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($this->error)): ?>
            <div class="alert alert-danger">
                <?php
                echo $this->error;
                ?>
            </div>
        <?php endif; ?>

        <?php if (isset($_SESSION['success'])): ?>
            <div class="alert alert-success">
                <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            </div>
        <?php endif; ?>
    </div>
    <!--    hiển thị nội dung động -->
    <?php echo $this->content; ?>
</div>

<!--<section class="about py-lg-4 py-md-3 py-sm-3 py-3" id="about">
    <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
        <h3 class="title text-center mb-lg-5 mb-md-4  mb-sm-4 mb-3">Best Products</h3>
        <div class="row banner-below-w3l">
            <div class="col-lg-4 col-md-6 col-sm-6 text-center banner-agile-flowers">
                <img src="images/a1.jpg" class="img-thumbnail" alt="">
                <div class="banner-right-icon">
                    <h4 class="pt-3">Baby Toys</h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 text-center banner-agile-flowers">
                <img src="images/a2.jpg" class="img-thumbnail" alt="">
                <div class="banner-right-icon">
                    <h4 class="pt-3">Lite-Brite</h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 text-center banner-agile-flowers">
                <img src="images/a3.jpg" class="img-thumbnail" alt="">
                <div class="banner-right-icon">
                    <h4 class="pt-3">Key Toys</h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mt-3 text-center banner-agile-flowers">
                <img src="images/a4.jpg" class="img-thumbnail" alt="">
                <div class="banner-right-icon">
                    <h4 class="pt-3">Play Toys</h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mt-3 text-center banner-agile-flowers">
                <img src="images/a5.jpg" class="img-thumbnail" alt="">
                <div class="banner-right-icon">
                    <h4 class="pt-3">Gift Toys</h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mt-3 text-center banner-agile-flowers">
                <img src="images/a6.jpg" class="img-thumbnail" alt="">
                <div class="banner-right-icon">
                    <h4 class="pt-3">Soft Toys</h4>
                </div>
            </div>
        </div>
    </div>
</section>-->
<!-- //about -->
<!--new Arrivals -->
<!--Customers Review -->
<!--<section class="clients py-lg-4 py-md-3 py-sm-3 py-3" id="clients">
    <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
        <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Customers Review</h3>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-lg-6 clients-w3layouts-row">
                            <div class="least-w3layouts-text-gap">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 news-img">
                                        <img src="images/t1.jpg" alt="" class="image-fluid">
                                    </div>
                                    <div class="col-md-8 col-sm-8 clients-says-w3layouts">
                                        <h4>Milky Deo
                                        </h4>
                                        <span class="mt-2">Duis posuere</span>
                                    </div>
                                    <div class="mt-3 news-agile-text">
                                        <img src="images/tt1.jpg" alt="" class="image-fluid">
                                        <p class="mt-3"><span class="fas fa-quote-left"></span>  velit sagittis vehicula. Duis posuere
                                            ex in mollis iaculis. Suspendisse tincidunt
                                            velit sagittis vehicula. Duis posuere
                                            velit sagittis vehicula. Duis posuere <span class="fas fa-quote-right"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 clients-w3layouts-row">
                            <div class="least-w3layouts-text-gap">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 news-img">
                                        <img src="images/t2.jpg" alt="" class="image-fluid">
                                    </div>
                                    <div class="col-md-8 col-sm-8 clients-says-w3layouts">
                                        <h4>Sam Deo
                                        </h4>
                                        <span class="mt-2">Duis posuere</span>
                                    </div>
                                    <div class="mt-3 news-agile-text">
                                        <img src="images/tt2.jpg" alt="" class="image-fluid">
                                        <p class="mt-3"><span class="fas fa-quote-left"></span>  velit sagittis vehicula. Duis posuere
                                            ex in mollis iaculis. Suspendisse tincidunt
                                            velit sagittis vehicula. Duis posuere
                                            velit sagittis vehicula. Duis posuere <span class="fas fa-quote-right"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-lg-6 clients-w3layouts-row">
                            <div class="least-w3layouts-text-gap">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 news-img">
                                        <img src="images/t1.jpg" alt="" class="image-fluid">
                                    </div>
                                    <div class="col-md-8 col-sm-8 clients-says-w3layouts">
                                        <h4>Milky Deo
                                        </h4>
                                        <span class="mt-2">Duis posuere</span>
                                    </div>
                                    <div class="mt-3 news-agile-text">
                                        <img src="images/tt1.jpg" alt="" class="image-fluid">
                                        <p class="mt-3"><span class="fas fa-quote-left"></span>  velit sagittis vehicula. Duis posuere
                                            ex in mollis iaculis. Suspendisse tincidunt
                                            velit sagittis vehicula. Duis posuere
                                            velit sagittis vehicula. Duis posuere <span class="fas fa-quote-right"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 clients-w3layouts-row">
                            <div class="least-w3layouts-text-gap">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 news-img">
                                        <img src="images/t3.jpg" alt="" class="image-fluid">
                                    </div>
                                    <div class="col-md-8 col-sm-8 clients-says-w3layouts">
                                        <h4>Sam Deo
                                        </h4>
                                        <span class="mt-2">Duis posuere</span>
                                    </div>
                                    <div class="mt-3 news-agile-text">
                                        <img src="images/tt1.jpg" alt="" class="image-fluid">
                                        <p class="mt-3"><span class="fas fa-quote-left"></span>  velit sagittis vehicula. Duis posuere
                                            ex in mollis iaculis. Suspendisse tincidunt
                                            velit sagittis vehicula. Duis posuere
                                            velit sagittis vehicula. Duis posuere <span class="fas fa-quote-right"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-lg-6 clients-w3layouts-row">
                            <div class="least-w3layouts-text-gap">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 news-img">
                                        <img src="images/t2.jpg" alt="" class="image-fluid">
                                    </div>
                                    <div class="col-md-8 col-sm-8 clients-says-w3layouts">
                                        <h4>Milky Deo
                                        </h4>
                                        <span class="mt-2">Duis posuere</span>
                                    </div>
                                    <div class="mt-3 news-agile-text">
                                        <img src="images/tt2.jpg" alt="" class="image-fluid">
                                        <p class="mt-3"><span class="fas fa-quote-left"></span>  velit sagittis vehicula. Duis posuere
                                            ex in mollis iaculis. Suspendisse tincidunt
                                            velit sagittis vehicula. Duis posuere
                                            velit sagittis vehicula. Duis posuere <span class="fas fa-quote-right"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 clients-w3layouts-row">
                            <div class="least-w3layouts-text-gap">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 news-img">
                                        <img src="images/t3.jpg" alt="" class="image-fluid">
                                    </div>
                                    <div class="col-md-8 col-sm-8 clients-says-w3layouts">
                                        <h4>Sam Deo
                                        </h4>
                                        <span class="mt-2">Duis posuere</span>
                                    </div>
                                    <div class="mt-3 news-agile-text">
                                        <img src="images/tt1.jpg" alt="" class="image-fluid">
                                        <p class="mt-3"><span class="fas fa-quote-left"></span> velit sagittis vehicula. Duis posuere
                                            ex in mollis iaculis. Suspendisse tincidunt
                                            velit sagittis vehicula. Duis posuere
                                            velit sagittis vehicula. Duis posuere <span class="fas fa-quote-right"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>-->
<!--//Customers Review -->
<!-- Product-view -->
<!--<section class="product py-lg-4 py-md-3 py-sm-3 py-3">
    <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
        <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Latest Toys</h3>
        <div class=" img-toy-w3l-top">
        </div>
        <div class="mt-lg-4 mt-3 product-info-img">
            <p>velit sagittis vehicula. Duis posuere
                ex in mollis iaculis. Suspendisse tincidunt
                velit sagittis vehicula. Duis posuere
                velit sagittis vehicula. Duis posuere
            </p>
            <div class="clients_more-buttn">
                <a href="shop.html">Shop Now</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 img-toy-w3l-left">
                <div class="toys-img-one">
                </div>
                <div class="mt-lg-4 mt-3 product-info-img">
                    <p>velit sagittis vehicula. Duis posuere
                        ex in mollis iaculis. Suspendisse tincidunt
                        velit sagittis vehicula. Duis posuere
                        velit sagittis vehicula. Duis posuere
                    </p>
                    <div class="clients_more-buttn">
                        <a href="shop.html">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 img-toy-agile-right">
                <div class="toys-img-one-two">
                </div>
                <div class="mt-lg-4 mt-3 product-info-img">
                    <p>velit sagittis vehicula. Duis posuere
                        ex in mollis iaculis. Suspendisse tincidunt
                        velit sagittis vehicula. Duis posuere
                        velit sagittis vehicula. Duis posuere
                    </p>
                    <div class="clients_more-buttn">
                        <a href="shop.html">Shop Now</a>
                    </div>
                </div>
                <div class="toys-img-one-three">
                </div>
                <div class="mt-lg-4 mt-3 product-info-img">
                    <p>velit sagittis vehicula. Duis posuere
                        ex in mollis iaculis. Suspendisse tincidunt
                        velit sagittis vehicula. Duis posuere
                        velit sagittis vehicula. Duis posuere
                    </p>
                    <div class="clients_more-buttn">
                        <a href="shop.html">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>-->
<!--//Product-view-->
<!--//Product-view-->
<!--<section class="premium py-lg-4 py-md-3 py-sm-3 py-3">
    <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
        <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Premium Toys</h3>
        <div class="row">
            <div class="col-lg-6 agileits-toys-left"></div>
            <div class="col-lg-6 agileits-toys-right">
                <div class="sub-agile-info-toys">
                    <p>velit sagittis vehicula. Duis posuere
                        ex in mollis iaculis. Suspendisse tincidunt
                        velit sagittis vehicula. Duis posuere
                        velit sagittis vehicula. Duis posuere
                        ex in mollis iaculis. Suspendisse tincidunt
                        velit sagittis vehicula. Duis posuere
                    </p>
                    <div class="clients_more-buttn">
                        <a href="shop.html" class="mb-0">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-lg-4 mt-md-4 mt-3">
            <div class="col-lg-6 agileits-toys-right">
                <div class="sub-agile-info-toys">
                    <p>velit sagittis vehicula. Duis posuere
                        ex in mollis iaculis. Suspendisse tincidunt
                        velit sagittis vehicula. Duis posuere
                        velit sagittis vehicula. Duis posuere
                        ex in mollis iaculis. Suspendisse tincidunt
                        velit sagittis vehicula. Duis posuere
                    </p>
                    <div class="clients_more-buttn ">
                        <a href="shop.html" class="mb-0">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 agileits-toys-left"></div>
        </div>
    </div>
</section>-->
<!--Product-about-->
<!--<section class="about py-lg-4 py-md-3 py-sm-3 py-3">
    <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
        <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">About Toys</h3>
        <div class="about-products-w3layouts">
            <p>velit sagittis vehicula. Duis posuere
                ex in mollis iaculis. Suspendisse tincidunt
                velit sagittis vehicula. Duis posuere
                velit sagittis vehicula. Duis posuere
                ex in mollis iaculis. Suspendisse tincidunt
                velit sagittis vehicula. Duis posuere
            </p>
            <p class="my-lg-4 my-md-3 my-3">velit sagittis vehicula. Duis posuere
                ex in mollis iaculis. Suspendisse tincidunt
                velit sagittis vehicula. Duis posuere
                ex in mollis iaculis. Suspendisse tincidunt
                velit sagittis vehicula. Duis posuere
                velit sagittis vehicula. Duis posuere
                ex in mollis iaculis. Suspendisse tincidunt
                velit sagittis vehicula. Duis posuere
            </p>
            <p>velit sagittis vehicula. Duis posuere
                ex in mollis iaculis. Suspendisse tincidunt
                velit sagittis vehicula. Duis posuere
                velit sagittis vehicula. Duis posuere
                ex in mollis iaculis. Suspendisse tincidunt
                velit sagittis vehicula. Duis posuere
            </p>
        </div>
    </div>
</section>-->
<!--//Product-about-->
<!--footer-->
    <?php require_once 'footer.php';?>
<!-- //footer -->
<!-- Modal 1-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="register-form">
                    <form action="#" method="post">
                        <div class="fields-grid">
                            <div class="styled-input">
                                <input type="text" placeholder="Your Name" name="Your Name" required="">
                            </div>
                            <div class="styled-input">
                                <input type="email" placeholder="Your Email" name="Your Email" required="">
                            </div>
                            <div class="styled-input">
                                <input type="password" placeholder="password" name="password" required="">
                            </div>
                            <button type="submit" class="btn subscrib-btnn">Login</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- //Modal 1-->
<!--js working-->
<script src='assets/js/jquery-2.2.3.min.js'></script>
<!--//js working-->
<!-- cart-js -->
<script src="assets/js/minicart.js"></script>
<script>
    toys.render();

    toys.cart.on('toys_checkout', function (evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) {}
        }
    });
</script>
<!-- //cart-js -->
<!--responsiveslides banner-->
<script src="assets/js/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider4").responsiveSlides({
            auto: true,
            pager:false,
            nav:true ,
            speed: 900,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
<!--// responsiveslides banner-->
<!--slider flexisel -->
<script src="assets/js/jquery.flexisel.js"></script>
<script>
    $(window).load(function() {
        $("#flexiselDemo1").flexisel({
            visibleItems: 3,
            animationSpeed: 3000,
            autoPlay:true,
            autoPlaySpeed: 2000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint:480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint:640,
                    visibleItems:2
                },
                tablet: {
                    changePoint:768,
                    visibleItems: 2
                }
            }
        });

    });
</script>
<!-- //slider flexisel -->
<!-- start-smoth-scrolling -->
<script src="assets/js/move-top.js"></script>
<script src="assets/js/easing.js"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 900);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
<script>
    $(document).ready(function () {

        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };
        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!-- //here ends scrolling icon -->
<!--bootstrap working-->
<script src="assets/js/bootstrap.min.js"></script>
<!-- //bootstrap working-->
</body>
</html>