
<?php
require_once 'helpers/Helper.php';
require_once 'models/Category.php';
require_once 'controllers/CategoryController.php';

?>

<div class="containerdv">
    <section class="content-header">
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>->
            <li class="active">Trang dịch vụ</li>
        </ol>
        <hr >
    </section>
    <h2>Các dịch vụ chính của công ty</h2>
    <?php if (!empty($categories)): ?>
    <div class="link-secondary-wrap ">
        <?php foreach ($categories AS $category):
            $slug = Helper::getSlug($category['title']);
            $product_link = "tin-tuc/$slug/" . $category['id'] . ".html";
            ?>


            <div class="row21" >

                <div class="main-right col-md-6 col-sm-6 col-xs-12">
                    <img class="secondary-img img-responsive" title="<?php echo $category['title'] ?>"
                         src="../Admin/assets/uploads/<?php echo $category['avatar'] ?>"     width="300px"  height="200px" >
                    <div class="tiltecontent">
                    <div>
                        <b><?php echo $category['title'] ?></b>
                    </div>
                    <div class="service-link col-md-6 col-sm-6 col-xs-12">

                        <b ><?php echo $category['content'] ?></b></a>
                    </div>
                    </div>
                </div>



            </div>

            <br>
        <?php endforeach; ?>
        <?php endif;

        ?>

    </div>
</div>
<style>
    .link-secondary-wrap {
        margin-top: 25px;
    }
    .row21{
        display:flex;
        flex-wrap: wrap;
    }
    .containerdv{
        max-width: 1024px;
        margin: auto;
        margin-top:150px
    }
</style>





