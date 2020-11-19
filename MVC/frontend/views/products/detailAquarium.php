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
            <li><a href="be-ca-canh.html">Bể cá cảnh</a></li>
        </ul>
    </div>
</div>
<section class="contact ">
    <div class="container-fluid home-detail">
        <div class="row">
            <div class="side-bar col-lg-3 menu-cat rounded">
                <!--  MENU LEFT-->
                <div class="header-cat"><h4>Bể cá cảnh</h4></div>
                <div class="content-cat">
                    <?php if (!empty($categories)): ?>
                        <div>
                            <ul>
                                <?php foreach ($categories AS $category): ?>
                                    <?php if($category['type'] == 1) :?>
                                        <li class="category-4"><span><a href="#"><?php echo $category['name'];?></a></span></li>
                                    <?php endif;?>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif;?>
                </div>
                <!--  MENU LEFT-->
            </div>
            <div class="side-bar left-ads-display col-lg-9 rounded content-cat">
                <div>
                    <div class="header-cat"><h4>Bể cá rồng</h4></div>
                    <div>
                        <?php if (!empty($products)): ?>
                            <div class="row">
                                <?php foreach ($products AS $product):
                                    $slug = Helper::getSlug($product['title']);
                                    $product_link = "san-pham/$slug/" . $product['id'] . ".html";
                                    $product_cart_add = "them-vao-gio-hang/" . $product['id'] . ".html";
                                    ?>
                                    <?php if ($product['category_id'] == 5):?>
                                    <div class="col-lg-4 col-md-6 col-sm-6 product-men women_two">
                                        <div class="product-toys-info">
                                            <div class="men-pro-item">
                                                <div class="men-thumb-item">
                                                    <img src="../backend/assets/uploads/<?php echo $product['avatar'] ?>"
                                                         class="img-thumbnail img-fluid k-img" title="<?php echo $product['title'] ?>"
                                                         alt="<?php echo $product['title'] ?>">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="<?php echo $product_link;?>" class="link-product-add-cart">Quick View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-info-product">
                                                    <div class="info-product-price">
                                                        <div class="grid_meta">
                                                            <div class="product_price">
                                                                <h4>
                                                                    <a href="<?php echo $product_link;?>"><?php echo $product['title'] ?></a>
                                                                </h4>
                                                                <div class="grid-price mt-2">
                                                                    <span class="money"><?php echo number_format($product['price']) ?> đ</span>
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
                    <div class="header-cat"><h4>Bể cá treo tường</h4></div>
                    <div>
                        <?php if (!empty($products)): ?>
                            <div class="row">
                                <?php foreach ($products AS $product):
                                    $slug = Helper::getSlug($product['title']);
                                    $product_link = "san-pham/$slug/" . $product['id'] . ".html";
                                    $product_cart_add = "them-vao-gio-hang/" . $product['id'] . ".html";
                                    ?>
                                    <?php if ($product['category_id'] == 6):?>
                                    <div class="col-lg-4 col-md-6 col-sm-6 product-men women_two">
                                        <div class="product-toys-info">
                                            <div class="men-pro-item">
                                                <div class="men-thumb-item">
                                                    <img src="../backend/assets/uploads/<?php echo $product['avatar'] ?>"
                                                         class="img-thumbnail img-fluid k-img" title="<?php echo $product['title'] ?>"
                                                         alt="<?php echo $product['title'] ?>">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="<?php echo $product_link;?>" class="link-product-add-cart">Quick View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-info-product">
                                                    <div class="info-product-price">
                                                        <div class="grid_meta">
                                                            <div class="product_price">
                                                                <h4>
                                                                    <a href="<?php echo $product_link;?>"><?php echo $product['title'] ?></a>
                                                                </h4>
                                                                <div class="grid-price mt-2">
                                                                    <span class="money"><?php echo number_format($product['price']) ?> đ</span>
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
                </div>
            </div>
        </div>
    </div>
</section>