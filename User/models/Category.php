<?php
require_once 'models/Model.php';
require_once 'controllers/CategoryController.php';
class Category extends Model {

  public function getAll() {
    $sql_select_all = "SELECT * FROM categories ";
    $obj_select_all = $this->connection->prepare($sql_select_all);
    $obj_select_all->execute();
    $categories = $obj_select_all->fetchAll(PDO::FETCH_ASSOC);
    return $categories;
  }
    public function getCategoryById($id)
    {
        $obj_select = $this->connection
            ->prepare("SELECT * FROM categories WHERE id = $id");
        $obj_select->execute();
        $category = $obj_select->fetch(PDO::FETCH_ASSOC);

        return $category;
    }
}