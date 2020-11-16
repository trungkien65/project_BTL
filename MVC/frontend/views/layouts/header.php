<?php
//views/layouts/header.php
require_once 'helpers/Helper.php';
?>
<!--header-->
<div class="header-outs" id="home">
    <div class="header-bar">
        <div class="info-top-grid">
            <div class="info-contact-agile">
                <ul>
                    <li>
                        <span class="fas fa-phone-volume"></span>
                        <p>+(000)123 4565 32</p>
                    </li>
                    <li>
                        <span class="fas fa-envelope"></span>
                        <p><a href="mailto:info@example.com">abc@gmail.com</a></p>
                    </li>
                    <li>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container-fluid">
            <div class="hedder-up row">
                <div class="col-lg-3 col-md-3 logo-head">
                    <h1><a class="navbar-brand" href="index.html">Aquarium</a></h1>
                </div>
                <div class="col-lg-5 col-md-6 search-right">
                    <form class="form-inline my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search">
                        <button class="btn" type="submit">Tìm <kiếm></kiếm></button>
                    </form>
                </div>
                <div class="col-lg-4 col-md-3 right-side-cart">
                    <div class="cart-icons">
                        <ul>
                            <li>
                                <span class="far fa-heart"></span>
                            </li>
                            <li>
                                <button type="button" data-toggle="modal" data-target="#exampleModal"> <span class="far fa-user"></span></button>
                            </li>
                            <li class="toyscart toyscart2 cart cart box_1">
                                <form action="#" method="post" class="last">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="display" value="1">
                                    <button class="top_toys_cart" type="submit" name="submit" value="">
                                        <span class="fas fa-cart-arrow-down"></span>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav ">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Trang chủ<span class="sr-only">(current)</span></a>
                    </li>
                    <!--<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Sản phẩm
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="nav-link" href="product.html">Cá</a>
                            <a class="nav-link " href="product.html">Bể cá</a>
                            <a class="nav-link " href="product.html">Phụ kiện</a>
                        </div>
                    </li>-->
                    <li class="nav-item">
                        <a href="contact.html" class="nav-link">Cá cảnh</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.html" class="nav-link">Bể cá cảnh</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.html" class="nav-link">Phụ kiện</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.html" class="nav-link">Liên hệ</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- Slideshow 4 -->
    <div class="slider text-center">
        <div class="callbacks_container">
            <ul class="rslides" id="slider4">
                <li>
                    <div class="slider-img one-img">
                        <img src="../backend/assets/uploads/<?php echo $slide['avatar']?>" alt="">
                    </div>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--header-->