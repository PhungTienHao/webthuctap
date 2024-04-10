<?php if (empty($category)): ?>
    <h2>Không tồn tại category</h2>
<?php else: ?>
    <h2>Chỉnh sửa danh mục #<?php echo $category['id'] ?></h2>
    <form method="post" action="" enctype="multipart/form-data">
        <div class="form-group">
            <label>Tên danh mục</label>
            <input type="text" name="name"
                   value="<?php echo isset($_POST['title']) ? $_POST['title'] : $category['title']; ?>"
                   class="form-control"/>
        </div>

        <div class="form-group">
            <label>Ảnh đại diện</label>
            <input type="file" name="avatar" class="form-control"/>
            <img src="#" id="img-preview" style="display: none" width="100" height="100"/>
        </div>
        <?php if (!empty($category['avatar'])): ?>
            <img src="assets/uploads/<?php echo $category['avatar']; ?>" height="50"/>
        <?php endif; ?>

        <div class="form-group">
            <label>Mô tả ngắn gọn</label>
            <textarea class="form-control"
                      name="content"><?php echo isset($_POST['content']) ? $_POST['content'] : $category['content']; ?></textarea>
        </div>
        <div class="form-group">
            <label>Mô tả chi tiết</label>
            <textarea class="form-control"
                      name="comment"><?php echo isset($_POST['comment']) ? $_POST['comment'] : $category['comment']; ?></textarea>
        </div>





        <input type="submit" class="btn btn-primary" name="submit" value="Save"/>
        <input type="reset" class="btn btn-secondary" name="submit" value="Reset"/>
    </form>
<?php endif; ?>