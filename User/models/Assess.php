<?php
require_once 'models/Model.php';
//require_once 'controllers/AssessController.php';
require_once 'controllers/HomeController.php';
class Assess extends Model
{

    public $id;
    public $name;
    public $email;
    public $phone;
    public $subject;
    public $comment;
    public $created_at;

    public function insert()
    {
        $obj_insert = $this->connection
            ->prepare("INSERT INTO assess(name, phone, email,subject,comment) 
                                VALUES (:name, :phone, :email, :subject, :comment)");
        $arr_insert = [
            ':name' => $this->name,
            ':email' => $this->email,
            ':phone' => $this->phone,
            ':subject' => $this->subject,
            ':comment' => $this->comment,
        ];
        return $obj_insert->execute($arr_insert);
    }


}
