<?php
//views/homes/index.php
require_once 'helpers/Helper.php';
?>
<!--    PRODUCT-->
<section class="contact ">
    <div class="container-fluid ">
        <div class="row">
            <div class="side-bar col-lg-3 menu-cat rounded">
                <!--  MENU LEFT-->
                <div class="header-cat"><h4>Danh mục sản phẩm</h4></div>
                <div class="content-cat">
                    <?php if (!empty($categories)): ?>
                        <div>
                            <div class="category_1"><b>cá cảnh</b></div>
                            <ul>
                                <?php foreach ($categories AS $category): ?>
                                    <?php if($category['type'] == 0) :?>
                                        <li class="category-4"><span><a href="#"><?php echo $category['name'];?></a></span></li>
                                    <?php endif;?>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div>
                            <div class="category_2"><b>Bể cá cảnh</b></div>
                            <ul>
                                <?php foreach ($categories AS $category): ?>
                                    <?php if($category['type'] == 1) :?>
                                        <li class="category-4"><span><a href="#"><?php echo $category['name'];?></a></span></li>
                                    <?php endif;?>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div>
                            <div class="category_3"><b>Phụ kiện thuỷ sinh</b></div>
                            <ul>
                                <?php foreach ($categories AS $category): ?>
                                    <?php if($category['type'] == 2) :?>
                                        <li class="category-4"><span><a href="#"><?php echo $category['name'];?></a></span></li>
                                    <?php endif;?>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif;?>
                </div>
            <!--  MENU LEFT-->
            </div>
            <div class="left-ads-display col-lg-9 rounded content-cat">
                <div>
                    <div class="header-cat"><h4>Sản phẩm nổi bật</h4></div>
                    <div>
                        <?php if (!empty($products)): ?>
                            <div class="row">
                                <?php foreach ($products AS $product):
                                    $slug = Helper::getSlug($product['title']);
                                    $product_link = "san-pham/$slug/" . $product['id'] . ".html";
                                    $product_cart_add = "them-vao-gio-hang/" . $product['id'] . ".html";
                                    ?>
                                    <?php if ($product['category_id'] == 3):?>
                                    <div class="col-lg-3 col-md-6 col-sm-6 product-men women_two">
                                        <div class="product-toys-info">
                                            <div class="men-pro-item">
                                                <div class="men-thumb-item">
                                                    <img src="../backend/assets/uploads/<?php echo $product['avatar'] ?>"
                                                         class="img-thumbnail img-fluid k-img" title="<?php echo $product['title'] ?>"
                                                         alt="<?php echo $product['title'] ?>">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-info-product">
                                                    <div class="info-product-price">
                                                        <div class="grid_meta">
                                                            <div class="product_price">
                                                                <h4>
                                                                    <a href="single.html"><?php echo $product['title'] ?></a>
                                                                </h4>
                                                                <div class="grid-price mt-2">
                                                                    <span class="money"><?php echo number_format($product['price']) ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="toys single-item hvr-outline-out">
                                                            <form action="#" method="post">
                                                    <span data-id="<?php echo $product['id'] ?>"
                                                          class="add-to-cart">
                                                        <a href="#" style="color: white" class="btn btn-danger">Thêm vào giỏ</a>
                                                    </span>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif;?>
                                <?php endforeach;?>
                            </div>
                        <?php endif;?>
                    </div>
                </div>
                <div>
                    <div class="header-cat"><h4>Bể cá nổi bật</h4></div>
                    <div>
                        <?php if (!empty($products)): ?>
                            <div class="row">
                                <?php foreach ($products AS $product):
                                    $slug = Helper::getSlug($product['title']);
                                    $product_link = "san-pham/$slug/" . $product['id'] . ".html";
                                    $product_cart_add = "them-vao-gio-hang/" . $product['id'] . ".html";
                                    ?>
                                    <?php if ($product['category_id'] == 5):?>
                                    <div class="col-lg-3 col-md-6 col-sm-6 product-men women_two">
                                        <div class="product-toys-info">
                                            <div class="men-pro-item">
                                                <div class="men-thumb-item">
                                                    <img src="../backend/assets/uploads/<?php echo $product['avatar'] ?>"
                                                         class="img-thumbnail img-fluid k-img" title="<?php echo $product['title'] ?>"
                                                         alt="<?php echo $product['title'] ?>">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-info-product">
                                                    <div class="info-product-price">
                                                        <div class="grid_meta">
                                                            <div class="product_price">
                                                                <h4>
                                                                    <a href="single.html"><?php echo $product['title'] ?></a>
                                                                </h4>
                                                                <div class="grid-price mt-2">
                                                                    <span class="money"><?php echo number_format($product['price']) ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="toys single-item hvr-outline-out">
                                                            <form action="#" method="post">
                                                    <span data-id="<?php echo $product['id'] ?>"
                                                          class="add-to-cart">
                                                        <a href="#" style="color: white" class="btn btn-danger">Thêm vào giỏ</a>
                                                    </span>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif;?>
                                <?php endforeach;?>
                            </div>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--    END PRODUCT-->
<!--NEW-->
<section class="product py-lg-4 py-md-3 py-sm-3 py-3">
    <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
        <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Tin tức</h3>
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
                <div class="toys-img-one"></div>
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
                <div class="toys-img-one-two"></div>
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
                <div class="toys-img-one-three"></div>
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
<!--NEW-->
