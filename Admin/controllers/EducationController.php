<?php
require_once 'controllers/Controller.php';
require_once 'models/education.php';


class educationController extends Controller {

    public function update(){
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            header("Location: index.php?controller=education");
            exit();}
        $id = $_GET['id'];
        $education_model = new education();
        $user = $education_model->getById($id);
        if (isset($_POST['submit'])) {

            $name = $_POST['name'];
            $time = $_POST['time'];
            $introduce = $_POST['introduce'];
            $price = $_POST['price'];

            //xử lý validate
            if (empty($name)||empty($time)||empty($introduce)||empty($price)) {
                $this->error = 'Yêu cầu nhập đầy đủ thông tin';
            } else if ($_FILES['avatar']['error'] == 0) {
                $extension = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
                $extension = strtolower($extension);
                $allow_extensions = ['png', 'jpg', 'jpeg', 'gif'];
                $file_size_mb = $_FILES['avatar']['size'] / 1024 / 1024;
                $file_size_mb = round($file_size_mb, 2);
                if (!in_array($extension, $allow_extensions)) {
                    $this->error = 'Phải upload avatar dạng ảnh';
                } else if ($file_size_mb > 2) {
                    $this->error = 'File upload không được lớn hơn 2Mb';
                }
            }

            if (empty($this->error)) {
                $filename = $user['avatar'];
                if ($_FILES['avatar']['error'] == 0) {
                    $dir_uploads = 'assets/uploads';
                    @unlink($dir_uploads . '/' . $filename);
                    if (!file_exists($dir_uploads)) {
                        mkdir($dir_uploads);
                    }

                    $filename = time() . '-user-' . $_FILES['avatar']['name'];
                    move_uploaded_file($_FILES['avatar']['tmp_name'], $dir_uploads . '/' . $filename);
                }

                $education_model->name = $name;
                $education_model->time = $time;
                $education_model->introduce = $introduce;
                $education_model->price = $price;
                $education_model->avatar = $filename;


                $is_update = $education_model->update($id);
                if ($is_update) {
                    $_SESSION['success'] = 'Update dữ liệu thành công';
                } else {
                    $_SESSION['error'] = 'Update dữ liệu thất bại';
                }
                header('Location: index.php?controller=education');
                exit();
            }
        }

        $this->content = $this->render('views/education/update.php', [
            'education' => $educations
        ]);

        require_once 'views/layouts/main.php';
    }
    public function detail() {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            header("Location: index.php?controller=user");
            exit();
        }
        $id = $_GET['id'];
        $user_model = new User();
        $user = $user_model->getById($id);

        $this->content = $this->render('views/users/detail.php', [
            'user' => $user
        ]);

        require_once 'views/layouts/main.php';
    }

    public function index(){
        $education_model = new Education();
       $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $total = $education_model->getTotal();
        $query_additional = '';
        if (isset($_GET['name'])) {
            $query_additional .= "&name=" . $_GET['name'];
        }
        $params = [
            'total' => $total,
            'limit' => 5,
            'query_string' => 'page',
            'controller' => 'user',
            'action' => 'index',
            'page' => $page,
            'query_additional' => $query_additional
        ];
//        $pagination = new Pagination($params);
//        $pages = $pagination->getPagination();
        $educations = $education_model->getAllPagination($params);
        $this->content = $this->render('views/education/index.php', [
            'educations' => $educations,

        ]);

        require_once 'views/layouts/main.php';
    }

    public function create()
    {
        if (isset($_POST['submit'])) {

            $name = $_POST['name'];
            $time = $_POST['time'];
            $price = $_POST['price'];
            $introduce = $_POST['introduce'];

            if (empty($name)||empty($time)||empty($introduce)) {
                $this->error = 'Không được để trống title';
            } else if ($_FILES['avatar']['error'] == 0) {
                $extension = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
                $extension = strtolower($extension);
                $arr_extension = ['jpg', 'jpeg', 'png', 'gif'];

                $file_size_mb = $_FILES['avatar']['size'] / 1024 / 1024;

                $file_size_mb = round($file_size_mb, 2);

                if (!in_array($extension, $arr_extension)) {
                    $this->error = 'Cần upload file định dạng ảnh';
                } else if ($file_size_mb > 2) {
                    $this->error = 'File upload không được quá 2MB';
                }
            }


            if (empty($this->error)) {
                $filename = '';

                if ($_FILES['avatar']['error'] == 0) {
                    $dir_uploads = 'assets/uploads';
                    if (!file_exists($dir_uploads)) {
                        mkdir($dir_uploads);
                    }

                    $filename = time() . '-education-' . $_FILES['avatar']['name'];
                    move_uploaded_file($_FILES['avatar']['tmp_name'], $dir_uploads . '/' . $filename);
                }

                $education_model = new education();

                $education_model->name = $name;
                $education_model->avatar = $filename;
                $education_model->price = $price;
                $education_model->time = $time;
                $education_model->introduce = $introduce;


                $is_insert = $education_model->insert();
                if ($is_insert) {
                    $_SESSION['success'] = 'Insert dữ liệu thành công';
                } else {
                    $_SESSION['error'] = 'Insert dữ liệu thất bại';
                }
                header('Location: index.php?controller=education');
                exit();
            }
        }

        $this->content = $this->render('views/education/create1.php');
        require_once 'views/layouts/main.php';
    }


}

