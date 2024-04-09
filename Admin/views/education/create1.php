<h2>Thêm mới chương trình đào tạo</h2>
<form method="post" action="" enctype="multipart/form-data">
    <div class="form-group">
        <label style="color: black">Tên chương trình</label>
        <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>"
               class="form-control"/>
    </div>
    <div class="form-group">
        <label style="color: black">thời gian đào tạo</label>
        <textarea class="form-control"
                  name="time"><?php echo isset($_POST['time']) ? $_POST['time'] : ''; ?></textarea>
    </div>
    <div class="form-group">
        <label style="color: black">Ảnh đại diện</label>
        <input type="file" name="avatar" class="form-control" id="category-avatar"/>
        <img src="#" id="img-preview" style="display: none" width="100" height="100"/>
    </div>
    <div class="form-group">
        <label style="color: black">Mô tả về chương trình</label>
        <textarea class="form-control"
                  name="introduce"><?php echo isset($_POST['introduce']) ? $_POST['introduce'] : ''; ?></textarea>
    </div>

    <div class="form-group">
        <label style="color: black">Học phí</label>
        <textarea class="form-control"
                  name="price"><?php echo isset($_POST['price']) ? $_POST['price'] : ''; ?></textarea>
    </div>


    <input type="submit" class="btn btn-primary" name="submit" value="Save"/>
    <input type="reset" class="btn btn-secondary" name="submit" value="Reset"/>
</form>
<style>

</style>
