<h2>Thêm mới dịch vụ</h2>
<form method="post" action="" enctype="multipart/form-data">
    <div class="form-group">
        <label style="color: black">Tên dịch vụ</label>
        <input type="text" name="title" value="<?php echo isset($_POST['title']) ? $_POST['title'] : ''; ?>"
               class="form-control"/>
    </div>
    <div class="form-group">
        <label style="color: black">Ảnh đại diện</label>
        <input type="file" name="avatar" class="form-control" id="category-avatar"/>
        <img src="#" id="img-preview" style="display: none" width="100" height="100"/>
    </div>
    <div class="form-group">
        <label style="color: black">Mô tả về dịch vụ</label>
        <textarea class="form-control"
                  name="content"><?php echo isset($_POST['content']) ? $_POST['content'] : ''; ?></textarea>
    </div>
    <div class="form-group">
        <label style="color: black">Mô tả chi tiết về dịch vụ</label>
        <textarea class="form-control"
                  name="comment"><?php echo isset($_POST['comment']) ? $_POST['comment'] : ''; ?></textarea>
    </div>


    <input type="submit" class="btn btn-primary" name="submit" value="Save"/>
    <input type="reset" class="btn btn-secondary" name="submit" value="Reset"/>
</form>
<style>

</style>
