
<?php
require_once 'helpers/Helper.php';
require_once 'models/Product.php';
require_once 'models/Category.php';
require_once 'controllers/ProductController.php';
require_once 'controllers/CategoryController.php';

?>
<div class="containersp">
    <div class="row22">
        <div class="main-left col-md-3 col-sm-3 col-xs-12" style="display: contents">
            <div class="link-secondary-wrap ">
<!--                --><?php //foreach ($categories AS $category):
//                $slug = Helper::getSlug($category['title']);
//                $product_link = "tin-tuc/$slug/" . $category['id'] . ".html";
//                ?>


                <div class="row21" >

                        <div class="main-right col-md-6 col-sm-6 col-xs-12">
                            <img class="secondary-img img-responsive" title="<?php echo $category['title'] ?>"
                                 src="../Admin/assets/uploads/<?php echo $category['avatar'] ?>"     width="300px"  height="200px" >

                        </div>
                        <div class="tiltecontent" >
                            <div class="title-service" >
                                <b style="text-align: center"><?php echo $category['title'] ?></b><br> <hr>
                                <b style="font-size: 20px;"><?php echo $category['content'] ?></b>
                                <p style="font-size: 20px; color: black"><?php echo $category['comment'] ?></p>

            </div>
        </div>


    </div>
    </a>

    <br>
<!--    --><?php //endforeach; ?>


</div>
        </div></div>
        <div class="row23" style="color: black">
            <h2>Danh sách các dịch vụ chi tiết</h2>
<!--            --><?php //if (!empty($products)): ?>

                <div class="row26">
<!--                    --><?php //foreach ($products AS $product):
                        $slug = Helper::getSlug($product['title']);
                        $product_link = "san-pham/$slug/" . $product['id'] . ".html";
                        $product_cart_add = "them-vao-gio-hang/" . $product['id'] . ".html";
                        ?>
                        <div class="service-link col-md-3 col-sm-6 col-xs-12">
                            <a href="<?php echo $product_link; ?>">
                                <img class="imgsp" style="width: 400px;" title="<?php echo $product['title'] ?>"
                                     src="../Admin/assets/uploads/<?php echo $product['avatar'] ?>"
                                     alt="<?php echo $product['title'] ?>"/>

                                <span class="shop-title">
                        <?php echo $product['title'] ?>
                    </span></a>
                            <b><?php echo $product['summary']?></b>
                            <p><?php echo $product['content']?></p>
                            <span class="shop-price">
                            <?php echo number_format($product['price']) ?>
                </span>

                            <span data-id="<?php echo $product['id'] ?>" class="add-to-cart">
                        <a href="<?php echo $product_cart_add ?>" style="color: inherit">Thêm vào giỏ</a>
                    </span>
                        </div>
<!--                    --><?php //endforeach; ?>

<!--                                    --><?php //echo $pagination; ?>
                </div>
<!--            --><?php //endif; ?>
        </div>

</div>
<style>
    .row22{
        margin-top: 150px;
    }
    .service-link.col-md-3.col-sm-6.col-xs-12 {
        display: inline-grid;
        text-align: center;
        font-size: x-large;
    }
</style>

