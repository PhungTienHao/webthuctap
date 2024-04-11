
<h1>Chi Tiết Danh Mục</h1>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <td><?php echo $category['id']; ?></td>
    </tr>
    <tr>
        <th>Name</th>
        <td><?php echo $category['title']; ?></td>
    </tr>
    <tr>
        <th>Avatar</th>
        <td>
            <?php if (!empty($category['avatar'])): ?>
                <img src="assets/uploads/<?php echo $category['avatar'] ?>" width="60"/>
            <?php endif; ?>
        </td>
    </tr>
    <tr>
        <th>Description</th>
        <td><?php echo $category['content']; ?></td>
    </tr>
    <tr>
        <th>Description</th>
        <td><?php echo $category['comment']; ?></td>
    </tr>

    <tr>
        <th>Created_at</th>
        <td>
            <?php echo date('d-m-Y H:i:s', strtotime($category['created_at'])); ?>
        </td>
    </tr>

</table>
<a class="btn btn-primary" href="index.php?controller=category">Back</a>

