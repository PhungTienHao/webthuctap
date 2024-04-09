<h2>Thêm mới tài khoản admin</h2>
<form method="post" action="" enctype="multipart/form-data">
    <div class="form-group">
        <label style="color: black">Tên Đăng Nhập</label>
        <input type="text" name="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>"
               class="form-control"/>
    </div>

    <div class="form-group">
        <label style="color: black">Nhập Mật Khẩu</label>
        <textarea class="form-control"
                  name="password"><?php echo isset($_POST['password']) ? $_POST['password'] : ''; ?></textarea>
    </div>
    <div class="form-group">
        <label style="color: black">Nhập Mã Nhân Viên Quản Lý</label>
        <textarea class="form-control"
                  name="manhanvien"><?php echo isset($_POST['manhanvien']) ? $_POST['manhanvien'] : ''; ?></textarea>
    </div>


    <input type="submit" class="btn btn-primary" name="submit" value="Save"/>
    <input type="reset" class="btn btn-secondary" name="submit" value="Reset"/>
</form>
<style>

</style>
