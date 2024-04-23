<?php
require_once 'models/Model.php';
require_once 'models/Category.php';
require_once 'controllers/CategoryController.php';
require_once 'controllers/Controller.php';

class CategoryController extends Controller
{
    public function showall()
    {
        $category_model = new Category();
        $categories = $category_model->getAll();
        $this->content = $this->render('views/services/service.php', [
            'categories' => $categories,
        ]);
        require_once 'views/layouts/main.php';
    }
    public function detail()
    {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'ID không hợp lệ';
            header('Location: index.php?');
            exit();
        }
        $id = $_GET['id'];
        $category_model = new Category();
        $category = $category_model->getCategoryById($id);
        $this->content = $this->render('views/product/product.php', [
            'category' => $category
        ]);
        require_once 'views/layouts/main.php';

    }
    public function detailhome()
    {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'ID không hợp lệ';
            header('Location: index.php?');
            exit();
        }
        $id = $_GET['id'];
        $category_model = new Category();
        $category = $category_model->getCategoryById($id);
        $this->content = $this->render('views/homes/index.php', [
            'category' => $category
        ]);
        require_once 'views/layouts/main.php';

    }
}