<?php ?>
<h2>Cập nhật chương trình đào tạo</h2>
<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="name">Tên chương trình đào tạo</label>
        <input type="text" name="last_name" id="last_name"
               value="<?php echo isset($_POST['name']) ? $_POST['name'] : $educations['name'] ?>"
               class="form-control"/>
    </div>
    <div class="form-group">
        <label for="time">thời gian đào tạo</label>
        <input type="number" name="time" id="time"
               value="<?php echo isset($_POST['time']) ? $_POST['time'] : $educations['time'] ?>"
               class="form-control"/>
    </div>
    <div class="form-group">
        <label for="introduce">mô tả chương trình</label>
        <input type="text" name="introduce" id="introduce"
               value="<?php echo isset($_POST['introduce']) ? $_POST['introduce'] : $educations['introduce'] ?>"
               class="form-control"/>
    </div>
    <div class="form-group">
        <label for="price">học phí</label>
        <input type="number" name="price" id="price"
               value="<?php echo isset($_POST['price']) ? $_POST['price'] : $educations['price'] ?>"
               class="form-control"/>
    </div>
    <div class="form-group">
        <label for="avatar">Ảnh đại diện</label>
        <input type="file" name="avatar" value="" class="form-control" id="avatar"/>
        <img src="#" id="img-preview" style="display: none" width="100" height="100"/>
        <?php if (!empty($rducations['avatar'])): ?>
            <img height="80" src="assets/uploads/<?php echo $educations['avatar'] ?>"/>
        <?php endif; ?>
    </div>

    <div class="form-group">
        <input type="submit" name="submit" value="Save" class="btn btn-primary"/>
        <a href="index.php?controller=user&action=index" class="btn btn-default">Back</a>
    </div>
</form>
