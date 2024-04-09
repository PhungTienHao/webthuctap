<?php
require_once 'models/Model.php';
require_once 'configs/Database.php';


class education extends Model {

    public $id;
    public $name;
    public $time;
    public $introduce;
    public $price;
    public $avatar;

    public function __construct()
    {
        parent::__construct();
        if (isset($_GET['name']) && !empty($_GET['name'])) {
            $name = addslashes($_GET['name']);
            $this->str_search .= " AND educatine.name LIKE '%$name%'";
        }
    }
    public function insert()
    {
        $obj_insert = $this->connection
            ->prepare("INSERT INTO education ( name, time, introduce,avatar,price) 
                                VALUES ( :name, :time, :introduce,:avatar, :prie)");
        $arr_insert = [
            ':name' => $this->name,
            ':time' => $this->time,
            ':introduce' => $this->introduce,
            ':avatar'=>$this->avatar,
            ':price'=>$this->price


        ];
        return $obj_insert->execute($arr_insert);
    }
    public function update($id)
    {
        $obj_update = $this->connection
            ->prepare("UPDATE education SET name=:name,  time=:time, 
            introduce=:introduce,price=:price
             WHERE id = $id");
        $arr_update = [

            ':name' => $this->name,
            ':time' => $this->time,
            ':introduce' => $this->introduce,
            ':price' => $this->price
        ];
        $obj_update->execute($arr_update);

        return $obj_update->execute($arr_update);
    }

    public function getById($id)
    {
        $obj_select = $this->connection
            ->prepare("SELECT * FROM education WHERE id = $id");
        $obj_select->execute();
        return $obj_select->fetch(PDO::FETCH_ASSOC);
    }
    public function getTotal(){
        $str_search = 'WHERE TRUE';
        if (isset($params['name']) && !empty($params['name'])) {
            $name = $params['name'];

            $str_search .= " AND `name` LIKE '%$name%'";
        }
        if (isset($params['quyenhan'])) {
            $quyenhan = $params['quyenhan'];
            $str_search .= " AND `quyenhan` = $quyenhan";
        }
//        WHERE TRUE $this->str_search
        $obj_select = $this->connection
            ->prepare("SELECT COUNT(id) FROM education ");
        $obj_select->execute();
        $arr_select = [];
        $obj_select->execute($arr_select);
        $educations = $obj_select->fetchAll(PDO::FETCH_ASSOC);
        return $educations;
    }
    public function getAllPagination($params = [])
    {
//        WHERE TRUE $this->str_search
        $limit = $params['limit'];
        $page = $params['page'];
        $start = ($page - 1) * $limit;
        $obj_select = $this->connection
            ->prepare("SELECT * FROM education ");
        $obj_select->execute();
        $educations = $obj_select->fetchAll(PDO::FETCH_ASSOC);
        return $educations;
    }
    public function delete($id)
    {
        $obj_delete = $this->connection
            ->prepare("DELETE FROM education WHERE id = $id");
        $is_delete = $obj_delete->execute();

        return $is_delete;
    }
}