<?php

require_once 'models/Model.php';
require_once 'controllers/CategoryController.php';
require_once 'controllers/ProductController.php';
class Product extends Model {
    public function getProduct1($params = []) {
        $str_filter = '';
        if (isset($params['category'])) {
            $str_category = $params['category'];
            $str_filter .= "AND $str_category";
        }
        if (isset($params['price'])) {
            $str_price = $params['price'];
            $str_filter .= "AND $str_price";
        }
        $sql_select = "SELECT products.*, categories.title 
          AS category_name FROM products
          INNER JOIN categories where products.category_id = 1
          $str_filter";


        $obj_select = $this->connection->prepare($sql_select);
        $obj_select->execute();

        $products = $obj_select->fetchAll(PDO::FETCH_ASSOC);
        return $products;

    }
    public function getProduct2($params = []) {
        $str_filter = '';
        if (isset($params['category'])) {
            $str_category = $params['category'];
            $str_filter .= "AND $str_category";
        }
        if (isset($params['price'])) {
            $str_price = $params['price'];
            $str_filter .= "AND $str_price";
        }
        $sql_select = "SELECT products.*, categories.title 
          AS category_name FROM products
          INNER JOIN categories ON products.category_id = 2
          $str_filter";


        $obj_select = $this->connection->prepare($sql_select);
        $obj_select->execute();

        $products = $obj_select->fetchAll(PDO::FETCH_ASSOC);
        return $products;

    }
    public function getProduct3($params = []) {
        $str_filter = '';
        if (isset($params['category'])) {
            $str_category = $params['category'];
            $str_filter .= "AND $str_category";
        }
        if (isset($params['price'])) {
            $str_price = $params['price'];
            $str_filter .= "AND $str_price";
        }
        $sql_select = "SELECT products.*, categories.title 
          AS category_name FROM products
          INNER JOIN categories ON products.category_id = 3
          $str_filter";


        $obj_select = $this->connection->prepare($sql_select);
        $obj_select->execute();

        $products = $obj_select->fetchAll(PDO::FETCH_ASSOC);
        return $products;

    }
    public function getProduct4($params = []) {
        $str_filter = '';
        if (isset($params['category'])) {
            $str_category = $params['category'];
            $str_filter .= "AND $str_category";
        }
        if (isset($params['price'])) {
            $str_price = $params['price'];
            $str_filter .= "AND $str_price";
        }
        $sql_select = "SELECT products.*, categories.title 
          AS category_name FROM products
          INNER JOIN categories ON products.category_id = 4
          $str_filter";


        $obj_select = $this->connection->prepare($sql_select);
        $obj_select->execute();

        $products = $obj_select->fetchAll(PDO::FETCH_ASSOC);
        return $products;

    }
    public function getProduct5($params = []) {
        $str_filter = '';
        if (isset($params['category'])) {
            $str_category = $params['category'];
            $str_filter .= "AND $str_category";
        }
        if (isset($params['price'])) {
            $str_price = $params['price'];
            $str_filter .= "AND $str_price";
        }
        $sql_select = "SELECT products.*, categories.title 
          AS category_name FROM products
          INNER JOIN categories ON products.category_id = 5
          $str_filter";


        $obj_select = $this->connection->prepare($sql_select);
        $obj_select->execute();

        $products = $obj_select->fetchAll(PDO::FETCH_ASSOC);
        return $products;

    }

    public function getById($id)
    {
        $obj_select = $this->connection
            ->prepare("SELECT products.*, categories.title AS category_title FROM products 
          INNER JOIN categories ON products.category_id = categories.id WHERE products.category_id = $id");

        $obj_select->execute();
        return $obj_select->fetch(PDO::FETCH_ASSOC);
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