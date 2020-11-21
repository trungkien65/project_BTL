<?php
//views/homes/index.php
require_once 'helpers/Helper.php';
?>
<!--    PRODUCT-->
<section class="contact ">
    <div class="container-fluid home-detail">
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
                                        <li class="category-4"><span><a href="be-ca-canh.html"><?php echo $category['name'];?></a></span></li>
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
            <div class=" side-bar left-ads-display col-lg-9 rounded content-cat">
                <div>
                    <div class="header-cat"><h4>Sản phẩm bán chạy</h4></div>
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
                                                            <a href="<?php echo $product_link;?>" class="link-product-add-cart">Chi tiết</a>
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
                    <div class="header-cat"><h4>Bể cá bán chạy</h4></div>
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
                                                            <a href="<?php echo $product_link;?>" class="link-product-add-cart">chi tiết</a>
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
                    <div class="header-cat"><h4>Phụ kiện bán chạy</h4></div>
                    <div>
                        <?php if (!empty($products)): ?>
                            <div class="row">
                                <?php foreach ($products AS $product):
                                    $slug = Helper::getSlug($product['title']);
                                    $product_link = "san-pham/$slug/" . $product['id'] . ".html";
                                    $product_cart_add = "them-vao-gio-hang/" . $product['id'] . ".html";
                                    ?>
                                    <?php if ($product['category_id'] == 7):?>
                                    <div class="col-lg-4 col-md-6 col-sm-6 product-men women_two">
                                        <div class="product-toys-info">
                                            <div class="men-pro-item">
                                                <div class="men-thumb-item">
                                                    <img src="../backend/assets/uploads/<?php echo $product['avatar'] ?>"
                                                         class="img-thumbnail img-fluid k-img" title="<?php echo $product['title'] ?>"
                                                         alt="<?php echo $product['title'] ?>">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="<?php echo $product_link;?>" class="link-product-add-cart">chi tiết</a>
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
            </div>
        </div>
    </div>
</section>
<!--    END PRODUCT-->
<!--NEW-->
<section class="new-content">
    <div class="container-fluid">
        <h3 class="title text-center header-cat">Tin tức</h3>
        <?php if(!empty($bnews)):?>
            <div class="row content">
                <?php foreach ($bnews AS $bnew):
                    $slug = Helper::getSlug($bnew['title']);
                    $bnew_link = "tin-tuc/$slug/" . $bnew['id'] . ".html";
                    ?>
                <div class="col-lg-3 knew-div">
                    <img src="../backend/assets/uploads/<?php echo $bnew['avatar'] ?>"
                        class="img-thumbnail img-fluid knew-img"
                        alt="<?php echo $bnew['title'] ?>">  
                    <div class="clients_more-buttn">
                        <a href="<?php echo $bnew_link;?>" >Xem ngay</a>
                    </div>          
                </div>
                <div class="col-lg-3">
                    <p><a href=""><b><?php echo $bnew['title'] ?></b></a></p>
                    <p>   -    <?php echo $bnew['summary'] ?></p>
                </div>
                <div class="clearfix"> </div>
                <?php endforeach;?>
            </div>
        <?php endif;?>
    </div>
<!--NEW-->
