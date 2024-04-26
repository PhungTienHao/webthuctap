<?php
require_once 'models/Model.php';

class Order extends Model
{
    public $id;
    public $name;
    public $address;
    public $phone;
    public $email;
    public $note;
    public $price_total;
    public $created_at;
    public $product_id;
    public $price;


    public function getAll(){
        $obj_select = $this->connection
            ->prepare("SELECT orders.*, orders.id, orders.product_id FROM orders
                        ORDER BY orders.created_at DESC
                        ");
        $arr_select = [];
        $obj_select->execute($arr_select);
        $order = $obj_select->fetchAll(PDO::FETCH_ASSOC);

        return $order;
    }
    public function getdetail(){
        $obj_select = $this->connection
            ->prepare("SELECT * FROM orders  JOIN products");
        $arr_select = [];
        $obj_select->execute($arr_select);
        $detail = $obj_select->fetchAll(PDO::FETCH_ASSOC);

        return $detail;
    }
}
