<?php


?>

<h2>Thông tin chi tiết </h2>
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <td><?php echo $user['id'] ?></td>
    </tr>
    <tr>
        <th>username</th>
        <td><?php echo $user['username'] ?></td>
    </tr>
    <tr>
        <th>password</th>
        <td><?php echo $user['password'] ?></td>
    </tr>

    <tr>
        <th>manhanvien</th>
        <td><?php echo $user['manhanvien'] ?></td>
    </tr>
<!--    <tr>-->
<!--        <th>address</th>-->
<!--        <td>--><?php //echo $user['address'] ?><!--</td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--        <th>email</th>-->
<!--        <td>--><?php //echo $user['email'] ?><!--</td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--        <th>avatar</th>-->
<!--        <td>-->
<!--            --><?php //if (!empty($user['avatar'])): ?>
<!--                <img height="80" src="assets/uploads/--><?php //echo $user['avatar'] ?><!--"/>-->
<!--            --><?php //endif; ?>
<!--        </td>-->
<!--    </tr>-->


<!--    <tr>-->
<!--        <th>status</th>-->
<!--        <td>--><?php //echo Helper::getStatusText($user['status']); ?><!--</td>-->
<!--    </tr>-->
    <tr>
        <th>created_at</th>
        <td><?php echo date('d-m-Y H:i:s', strtotime($user['created_at'])) ?></td>
    </tr>
<!--    <tr>-->
<!--        <th>updated_at</th>-->
<!--        <td>--><?php //echo date('d-m-Y H:i:s', strtotime($user['updated_at'])) ?><!--</td>-->
<!--    </tr>-->
</table>
<a href="index.php?controller=user&action=index" class="btn btn-default">Back</a>