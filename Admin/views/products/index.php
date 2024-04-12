<?php
//require_once 'helpers/Helper.php';
?>

<h2>Danh sách dịch vụ đang ban hành</h2>
    <a href="index.php?controller=product&action=create" class="btn btn-success">
        <i class="fa fa-plus"></i> Thêm mới
    </a>
<table class="table table-bordered">
    <tr>
<!--        <th>ID</th>-->
        <th>Category name</th>
        <th>Tên dịch vụ</th>
        <th>ảnh mô tả</th>
        <th>Mô tả Ngăn</th>
        <th>Mô tả chi tiết</th>
        <th>Gía dịch vụ</th>
        <th>Created_at</th>
        <th></th>
    </tr>
    <?php if (!empty($products)): ?>
        <?php foreach ($products as $product): ?>
            <tr>
<!--                <td>--><?php //echo $product['id'] ?><!--</td>-->
                <td><?php echo $product['category_name'] ?></td>
                <td><?php echo $product['title'] ?></td>
                <td>
                    <?php if (!empty($product['avatar'])): ?>
                        <img height="80" src="assets/uploads/<?php echo $product['avatar'] ?>"/>
                    <?php endif; ?>
                </td>

                <td><?php echo $product['summary'] ?></td>
                <td><?php echo $product['content'] ?></td>
                <td><?php echo number_format($product['price']) ?></td>
                <td><?php echo date('d-m-Y H:i:s', strtotime($product['created_at'])) ?></td>
                <td>
                    <?php
                    $url_detail = "index.php?controller=product&action=detail&id=" . $product['id'];
                    $url_update = "index.php?controller=product&action=update&id=" . $product['id'];
                    $url_delete = "index.php?controller=product&action=delete&id=" . $product['id'];
                    ?>
                    <a title="Chi tiết" href="<?php echo $url_detail ?>"><i class="fa fa-eye"></i></a> &nbsp;&nbsp;
                    <a title="Update" href="<?php echo $url_update ?>"><i class="fa fa-pencil-alt"></i></a> &nbsp;&nbsp;
                    <a title="Xóa" href="<?php echo $url_delete ?>" onclick="return confirm('Are you sure delete?')"><i
                                class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
<!--        <tr>-->
<!--            <td colspan="7">--><?php //echo $pages; ?><!--</td>-->
<!--        </tr>-->
    <?php else: ?>
        <tr>
            <td colspan="9">No data found</td>
        </tr>

    <?php endif; ?>
</table>
