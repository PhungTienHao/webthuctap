<?php
require_once 'models/Model.php';
require_once 'controllers/CategoryController.php';
class Category extends Model {

  public $id;
  public $title;
  public $avatar;
  public $content;
  public $comment;
  public $created_at;


  public function insert() {
    $sql_insert =
      "INSERT INTO categories(`title`, `avatar`, `content`, `comment`)
VALUES (:title, :avatar, :content, :comment)";

    $obj_insert = $this->connection
      ->prepare($sql_insert);

    $arr_insert = [
      ':title' => $this->title,
      ':avatar' => $this->avatar,
      ':content' => $this->content,
      ':comment' => $this->comment
    ];
    return $obj_insert->execute($arr_insert);
  }


  public function getAll($params = []) {

    $str_search = 'WHERE TRUE';

    if (isset($params['name']) && !empty($params['name'])) {
      $name = $params['name'];

      $str_search .= " AND `name` LIKE '%$name%'";
    }
//    if (isset($params['status'])) {
//      $status = $params['status'];
//      $str_search .= " AND `status` = $status";
//    }
    $sql_select_all = "SELECT * FROM categories $str_search";
    $obj_select_all = $this->connection
      ->prepare($sql_select_all);
    $obj_select_all->execute();
    $categories = $obj_select_all
      ->fetchAll(PDO::FETCH_ASSOC);
    return $categories;
  }


    public function getById($id) {
        $sql_select_one = "SELECT * FROM categories WHERE id = $id";
        $obj_select_one = $this->connection
            ->prepare($sql_select_one);
        $obj_select_one->execute();
        $category = $obj_select_one->fetch(PDO::FETCH_ASSOC);
        return $category;
    }

//    $obj_select_one->execute($selects);
//    $category = $obj_select_one->fetch(PDO::FETCH_ASSOC);
//    return $category;
//  }

  /**
   * Lấy category theo id truyền vào
   * @param $id
   * @return array
   */
  public function getCategoryById($id)
  {
    $obj_select = $this->connection
      ->prepare("SELECT * FROM categories WHERE id = $id");
    $obj_select->execute();
    $category = $obj_select->fetch(PDO::FETCH_ASSOC);

    return $category;
  }

  /**
   * Update bản ghi theo id truyền vào
   * @param $id
   * @return bool
   */
  public function update($id)
  {
    $obj_update = $this->connection->prepare("UPDATE categories SET `title` = :title, `avatar` = :avatar, `content` = :content, `comment` = :comment 
         WHERE id = $id");
    $arr_update = [
      ':title' => $this->title,
      ':avatar' => $this->avatar,
      ':content' => $this->content,
      ':comment' => $this->comment,

    ];
    return $obj_update->execute($arr_update);
  }

  /**
   * Xóa bản ghi theo id truyền vào
   * @param $id
   * @return bool
   */
  public function delete($id)
  {
    $obj_delete = $this->connection
      ->prepare("DELETE FROM categories WHERE id = $id");
    $is_delete = $obj_delete->execute();

    $obj_delete_product = $this->connection
      ->prepare("DELETE FROM products WHERE category_id = $id");
    $obj_delete_product->execute();

    return $is_delete;
  }

  /**
   * Lấy tổng số bản ghi trong bảng categories
   * @return mixed
   */
  public function countTotal()
  {
    $obj_select = $this->connection->prepare("SELECT COUNT(id) FROM categories");
    $obj_select->execute();

    return $obj_select->fetchColumn();
  }

  public function getAllPagination($params = [])
  {
    $limit = $params['limit'];
    $page = $params['page'];
    $start = ($page - 1) * $limit;
    $obj_select = $this->connection
      ->prepare("SELECT * FROM categories LIMIT $start, $limit");

//    do PDO coi tất cả các param luôn là 1 string, nên cần sử dụng bindValue / bindParam cho các tham số start và limit
//        $obj_select->bindParam(':limit', $limit, PDO::PARAM_INT);
//        $obj_select->bindParam(':start', $start, PDO::PARAM_INT);
    $obj_select->execute();
    $categories = $obj_select->fetchAll(PDO::FETCH_ASSOC);

    return $categories;
  }
}
