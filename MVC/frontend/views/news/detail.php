<?php
require_once 'helpers/Helper.php';
?>
<div class="using-border py-3">
    <div class="inner_breadcrumb  ml-4">
        <ul class="short_ls">
            <li>
                <a href="trang-chu.html">Trang chủ</a>
                <span>/ /</span>
            </li>
            <li><?php echo  $bnew['title'] ?></li>
        </ul>
    </div>
</div>
<section class="banner-bottom py-lg-5 py-3">
    <div class="container">
        <div class="inner-sec-shop pt-lg-4 pt-3">
            <div class="row">
                <div class="col-lg-5 single-right-left ">
                    <div class="grid images_3_of_2">
                        <img src="../backend/assets/uploads/<?php echo  $bnew['avatar'] ?>"
                             class="img-thumbnail pro-img" title="<?php echo  $bnew['title'] ?>"
                             alt="<?php echo  $bnew['title'] ?>">
                    </div>
                </div>
                <div class="col-lg-5 single-right-left simpleCart_shelfItem">
                    <h3><?php echo  $bnew['title'] ?></h3>
                    <p><span class="item_price"><?php echo number_format( $bnew['price']) ?> đ</span>
                    </p>
                    <div class="toys single-item hvr-outline-out">
                        <form action="#" method="post">
                             <span data-id="<?php echo  $bnew['id'] ?>" class="add-to-cart">
                                 <a href="#" style="color: white" class="btn btn-danger">Thêm vào giỏ</a>
                             </span>
                        </form>
                    </div>
                    <ul class="footer-social text-left mt-lg-4 mt-3">
                        <li>Share On : </li>
                        <li class="mx-1">
                            <a href="#">
                                <span class="fab fa-facebook-f"></span>
                            </a>
                        </li>
                        <li class="">
                            <a href="#">
                                <span class="fab fa-twitter"></span>
                            </a>
                        </li>
                        <li class="mx-1">
                            <a href="#">
                                <span class="fab fa-google-plus-g"></span>
                            </a>
                        </li>
                        <li class="">
                            <a href="#">
                                <span class="fab fa-linkedin-in"></span>
                            </a>
                        </li>
                        <li class="mx-1">
                            <a href="#">
                                <span class="fas fa-rss"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"> </div>
            <!--/tabs-->
            <div class="responsive_tabs">
                <div id="horizontalTab">
                    <ul class="resp-tabs-list">
                        <li>Thông tin chi tiết</li>
                        <li>Đánh giá</li>
                        <li>Thông tin</li>
                    </ul>
                    <div class="resp-tabs-container">
                        <!--/tab_one-->
                        <div class="tab1">
                            <?php echo  $bnew['content']?>
                        </div>
                        <!--//tab_one-->
                        <div class="tab2">
                            <div class="single_page">
                                <div class="bootstrap-tab-text-grids">
                                </div>
                            </div>
                        </div>
                        <div class="tab3">
                            <div class="single_page">
                            </div>
                        </div>
                    </div>
                </div>
                <!--//tabs-->
            </div>
        </div>
    </div>
</section>