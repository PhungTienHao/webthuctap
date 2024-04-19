
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


        <a href="index.php?controller=product&action=detail&id=<?php echo $category['id'] ?>"" style="color: black;"> <div class="row21" >

                <div class="main-right col-md-6 col-sm-6 col-xs-12">
                    <img class="secondary-img img-responsive" title="<?php echo $category['title'] ?>"
                         src="../Admin/assets/uploads/<?php echo $category['avatar'] ?>"     width="300px"  height="200px" >

                </div>
                <div class="tiltecontent" >
                    <div class="title-service" >
                        <b style="text-align: center"><?php echo $category['title'] ?></b><br> <hr>
                        <b style="font-size: 20px;"><?php echo $category['content'] ?></b></a>
                    </div>
                </div>


            </div>
    </a>

            <br>
        <?php endforeach; ?>
        <?php endif;

        ?>

    </div>
</div>
<style>
    .link-secondary-wrap {
        margin-top: 25px;
        width: max-content;
        margin-left: -90px;
    }
    .row21{

        display:flex;
        padding: 12px;
    }
    .containerdv{
        max-width: 1024px;
        margin: auto;
        margin-top:150px
    }
    .content-service2{
        font-weight:bold;
    }
    .title-service {
        font-size: 30px;
    }
</style>





