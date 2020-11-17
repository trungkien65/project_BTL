<?php
//views/homes/index.php
require_once 'helpers/Helper.php';
?>
<!--    PRODUCT-->
<section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
    <div class="container-fluid py-lg-5 py-md-4 py-sm-4 py-3">
        <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Toys Shop</h3>
        <div class="row">
            <div class="side-bar col-lg-3">

            </div>
            <div class="left-ads-display col-lg-9">
                <?php if (!empty($products)): ?>
                    <div class="row">
                        <?php foreach ($products AS $product):
                        $slug = Helper::getSlug($product['title']);
                        $product_link = "san-pham/$slug/" . $product['id'] . ".html";
                        $product_cart_add = "them-vao-gio-hang/" . $product['id'] . ".html";
                        ?>
                        <div class="col-lg-4 col-md-6 col-sm-6 product-men women_two">
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
                        <?php endforeach;?>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </div>
</section>
<!--    END PRODUCT-->
