
<h1>Danh sách Dịch vụ</h1>
<a href="index.php?controller=category&action=create" class="btn btn-primary">
    <i class="fa fa-plus"></i> Thêm mới
</a>
<table class="table table-bordered">
    <tr>
        <th>STT</th>
        <th>Tên Dịch Vụ</th>
        <th>ảnh mô tả</th>
        <th>giới thiệu ngắn gọn</th>
        <th>giới thiệu chi tiết</th>

        <th></th>
    </tr>
  <?php if (!empty($categories)): ?>
    <?php foreach ($categories as $category): ?>
          <tr>
              <td>
                <?php echo $category['id']; ?>
              </td>
              <td>
                <?php echo $category['title']; ?>
              </td>
              <td>
                <?php if (!empty($category['avatar'])): ?>
                    <img src="assets/uploads/<?php echo $category['avatar'] ?>" width="60"/>
                <?php endif; ?>
              </td>
              <td>
                <?php echo $category['content']; ?>
              </td>
              <td>
                  <?php echo $category['comment']; ?>
              </td>
              <td>
                  <a href="index.php?controller=category&action=detail&id=<?php echo $category['id'] ?>"
                     title="Chi tiết">
                      <i class="fa fa-eye"></i>
                  </a>
                  <a href="index.php?controller=category&action=update&id=<?php echo $category['id'] ?>"
                     title="Sửa">
                      <i class="fa fa-pencil-alt"></i>
                  </a>
                  <a href="index.php?controller=category&action=delete&id=<?php echo $category['id'] ?>" title="Xóa"
                     onclick="return confirm('Bạn có chắc chắn muốn xóa bản ghi này')">
                      <i class="fa fa-trash"></i>
                  </a>
              </td>
          </tr>
    <?php endforeach ?>
<!--      <tr>-->
<!--          <td colspan="7">--><?php //echo $pages; ?><!--</td>-->
<!--      </tr>-->

  <?php else: ?>
      <tr>
          <td colspan="7">Không có bản ghi nào</td>
      </tr>
  <?php endif; ?>
</table>


