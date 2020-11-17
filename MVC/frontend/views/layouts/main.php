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
    <link href="assets/css/style1.css" rel='stylesheet' type='text/css' media="all">
    <!--//stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700,900&amp;subset=latin-ext"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<div class="color-bg">
    <div class="set-width">
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

        </div>
        <?php echo $this->content; ?>
        <!--<section class="about py-lg-4 py-md-3 py-sm-3 py-3" id="about">
            <div class="container py-lg-5 py-md-5 py-sm-4 py-4">

            </div>
        </section>-->
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
    </div>
</div>

</body>
</html>