<?php
require_once 'models/Model.php';
require_once 'configs/Database.php';


class User extends Model {

    public $id;
    public $username;
    public $password;
    public $manhanvien;
//    public $phone;
//    public $address;
//    public $email;
//    public $avatar;


    public function __construct()
    {
        parent::__construct();
        if (isset($_GET['username']) && !empty($_GET['username'])) {
            $username = addslashes($_GET['username']);
            $this->str_search .= " AND users.username LIKE '%$username%'";
        }
    }
    public function insert()
    {
        $obj_insert = $this->connection
            ->prepare("INSERT INTO taikhoanadmin ( username, password, manhanvien) 
                                VALUES ( :username, :password, :manhanvien)");
        $arr_insert = [
//            ':id' => $this->id,
            ':username' => $this->username,
            ':password' => $this->password,
            ':manhanvien' => $this->manhanvien,

        ];
        return $obj_insert->execute($arr_insert);
    }
    public function registerUser(){
        $obj_insert = $this->connection
            ->prepare("INSERT INTO admin (username, password, name, phone, address, email, avatar)
VALUES(:username, :password,:name, :phone, :address, :email, :avatar)");
        $arr_insert = [
            ':username' => $this->username,
            ':password' => $this->password,
            ':name' => $this->name,
            ':phone' => $this->phone,
            ':address' => $this->address,
            ':email' => $this->email,
            ':avatar' => $this->avatar,
        ];
        return $obj_insert->execute($arr_insert);
    }
    public function update($id)
    {
        $obj_update = $this->connection
            ->prepare("UPDATE taikhoanadmin SET username=:username,  password=:password, 
            manhanvien=:manhanvien
             WHERE id = $id");
        $arr_update = [

            ':username' => $this->username,
            ':password' => $this->password,
            ':manhanvien' => $this->manhanvien,

        ];
        $obj_update->execute($arr_update);

        return $obj_update->execute($arr_update);
    }

    public function getUser($username){
        $sql_select_one ="select * from taikhoanadmin where username=:username ";
        $obj_select_one = $this->connection->prepare($sql_select_one);
        $selects=[
            ':username'=>$username
        ];
        $obj_select_one->execute($selects);
        $user=$obj_select_one->fetch(PDO::FETCH_ASSOC);
        return $user;
    }
    public function getAdmin($username){
        $sql_select_one ="select * from taikhoanadmin where username=:username";
        $obj_select_one = $this->connection->prepare($sql_select_one);
        $selects=[
            ':username'=>$username
        ];
        $obj_select_one->execute($selects);
        $user=$obj_select_one->fetch(PDO::FETCH_ASSOC);
        return $user;
    }
    public function getById($id)
    {
        $obj_select = $this->connection
            ->prepare("SELECT * FROM taikhoanadmin WHERE id = $id");
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
                ->prepare("SELECT COUNT(id) FROM taikhoanadmin ");
            $obj_select->execute();
        $arr_select = [];
        $obj_select->execute($arr_select);
        $users = $obj_select->fetchAll(PDO::FETCH_ASSOC);
            return $users;
}
    public function getAllPagination($params = [])
    {
//        WHERE TRUE $this->str_search
        $limit = $params['limit'];
        $page = $params['page'];
        $start = ($page - 1) * $limit;
        $obj_select = $this->connection
            ->prepare("SELECT * FROM taikhoanadmin 
              ORDER BY created_at DESC
              LIMIT $start, $limit");
        $obj_select->execute();
        $users = $obj_select->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }
}