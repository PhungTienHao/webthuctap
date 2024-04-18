<?php

require_once 'models/Model.php';
require_once 'controllers/CategoryController.php';
class Product extends Model {
    public function getProduct($params = []) {
        $str_filter = '';
        if (isset($params['category'])) {
            $str_category = $params['category'];
            $str_filter .= "AND $str_category";
        }
        if (isset($params['price'])) {
            $str_price = $params['price'];
            $str_filter .= "AND $str_price";
        }
        $sql_select = "SELECT products.*, categories.name 
          AS category_name FROM products
          INNER JOIN categories ON products.category_id = categories.id
          $str_filter";


        $obj_select = $this->connection->prepare($sql_select);
        $obj_select->execute();

        $products = $obj_select->fetchAll(PDO::FETCH_ASSOC);
        return $products;

    }
}