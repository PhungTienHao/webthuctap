<?php
require_once 'controllers/Controller.php';
require_once 'models/Assess.php';

class AssessController extends Controller
{
    public function create(){
        if (isset($_POST['submit'])) {

            $email = htmlspecialchars($_POST['email']);
           $phone = htmlspecialchars($_POST['phone']);
           $name = htmlspecialchars($_POST['name']);
            $subject = htmlspecialchars($_POST['subject']);
            $comment = htmlspecialchars($_POST['comment']);

            if (empty($name)||empty($email)||empty($phone)||empty($subject)||empty($comment)) {
               $this->error = 'không được gửi đánh giá trống';}
            if(preg_match("/<script>/",$name)){
                $this->error ='Bạn đang cố gắng ngăn chặn hoạt động của website này , HÃY DỪNG LẠI !!!';
            }
            if(preg_match("/<script>/",$subject)){
                $this->error ='Bạn đang cố gắng ngăn chặn hoạt động của website này , HÃY DỪNG LẠI !!!';
            }
//            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
//                $this->error ='Email chưa đúng định dạng';
//            }

                if (empty($this->error)) {
                    $assess_model = new Assess();
                    $assess_model->name = $name;
                    $assess_model->email= $email;
                    $assess_model->phone = $phone;
                    $assess_model->subject = $subject;
                    $assess_model->comment = $comment;
                    $is_insert = $assess_model->insert();
                    if ($is_insert) {
                        $_SESSION['success'] = 'Gửi đánh giá thành công';
                    } else {
                        $_SESSION['error'] = 'Gửi đánh giá thất bại';
                    }
                    header('Location:/webthuctap/User/index.php?');
                    exit();
                }

    }
        $this->content = $this->render('views/contact/contact.php', [

        ]);
        require_once 'views/layouts/main.php';
}
}
