<?php ?>


<h2>Danh sách chương trình đào tạo</h2>
<a href="index.php?controller=education&action=create" class="btn btn-success">
    <i class="fa fa-plus"></i> Thêm mới
</a>
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>tên chương trình </th>
        <th>thời gian đào tạo</th>
        <th>mô tả chương trình</th>
        <th>ảnh</th>
        <th>học phí</th>
        <th></th>
    </tr>
    <?php if (!empty($educations)): ?>
        <?php foreach ($educations as $education): ?>
            <tr>
                <td><?php echo $education['id'] ?></td>
                <td><?php echo $education['name'] ?></td>

                <td><?php echo $education['time'] ?></td>
                <td><?php echo $education['introduce'] ?></td>
                <td>
                    <?php if (!empty($education['avatar'])): ?>
                        <img height="80" src="assets/uploads/<?php echo $education['avatar'] ?>"/>
                    <?php endif; ?>
                </td>

                <td><?php echo $education['price'] ?></td>
                <td>
                    <?php
                    $url_detail = "index.php?controller=education&action=detail&id=" . $education['id'];
                    $url_update = "index.php?controller=education&action=update&id=" . $education['id'];
                    $url_delete = "index.php?controller=education&action=delete&id=" . $education['id'];
                    ?>
                    <a title="Chi tiết" href="<?php echo $url_detail ?>"><i class="fa fa-eye"></i></a> &nbsp;&nbsp;
                    <a title="Update" href="<?php echo $url_update ?>"><i class="fa fa-pencil-alt"></i></a> &nbsp;&nbsp;
                    <a title="Xóa" href="<?php echo $url_delete ?>" onclick="return confirm('Are you sure delete?')"><i
                            class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="7">Không có bản ghi nào</td>
        </tr>
    <?php endif; ?>
</table>
<?php //echo $pages; ?>
