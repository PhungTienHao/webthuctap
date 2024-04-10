<?php
require_once 'controllers/Controller.php';
require_once 'controllers/AssessController.php';
require_once 'models/Assess.php';

class HomeController extends Controller {
  public function index() {
//    $product_model = new Product();
//    $products = $product_model->getspnb();
//      $category_model = new Category();
//      $categories = $category_model->getAll();
//      $news_model = new News();
//      $news = $news_model->getAlll();

     $this->content = $this->render('views/homes/index.php', [
//      'products' => $products,
//        'categories' => $categories,
//         'news'=>$news,
    ]);
    require_once 'views/layouts/main.php';
  }

  public function aboutus(){
//      $about_model = new About();
//    $abouts = $about_model->getabout();
      $this->content = $this->render('views/aboutus/aboutus.php', [
      ]);
      require_once 'views/layouts/main.php';
  }
    public function createas(){
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
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $this->error ='Email chưa đúng định dạng';
            }

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