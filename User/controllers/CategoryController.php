<?php
require_once 'models/Model.php';
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
}