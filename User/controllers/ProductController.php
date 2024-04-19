<?php
require_once 'controllers/Controller.php';
require_once 'models/Product.php';
require_once 'models/Category.php';
require_once 'models/Pagination.php';

class ProductController extends Controller {
    public function show1() {
        $params = [];
        if (isset($_POST['filter'])) {
            if (isset($_POST['category'])) {
                $category = implode(',', $_POST['category']);
                $str_category_id = "($category)";
                $params['category'] = $str_category_id;
            }
            if (isset($_POST['price'])) {
                $str_price = '';
                foreach ($_POST['price'] AS $price) {
                    if ($price == 1) {
                        $str_price .= " AND products.price < 1000000";
                    }
                    if ($price == 2) {
                        $str_price .= " AND (products.price >= 1000000 AND products.price < 3000000)";
                    }
                    if ($price == 3) {
                        $str_price .= " AND (products.price >= 3000000 AND products.price < 6000000)";
                    }
                    if ($price == 4) {
                        $str_price .= " AND products.price >= 6000000";
                    }
                }

                $str_price = substr($str_price, 3);
                $str_price = "($str_price)";
                $params['price'] = $str_price;
            }
        }
        $params_pagination = [
            'total' => 5,
            'limit' => 1,
            'full_mode' => FALSE,
        ];
        $pagination_model = new Pagination($params_pagination);
        $pagination = $pagination_model->getPagination();
        $product_model = new Product();
        $products = $product_model->getProduct1();
        $category_model = new Category();
        $categories = $category_model->getAll();
        $this->content = $this->render('views/product/product.php', [
            'products' => $products,
            'categories' => $categories,
            'paginations' => $pagination,
        ]);
        require_once 'views/layouts/main.php';
    }
    public function show2() {
        $params = [];
        if (isset($_POST['filter'])) {
            if (isset($_POST['category'])) {
                $category = implode(',', $_POST['category']);
                $str_category_id = "($category)";
                $params['category'] = $str_category_id;
            }
            if (isset($_POST['price'])) {
                $str_price = '';
                foreach ($_POST['price'] AS $price) {
                    if ($price == 1) {
                        $str_price .= " AND products.price < 1000000";
                    }
                    if ($price == 2) {
                        $str_price .= " AND (products.price >= 1000000 AND products.price < 3000000)";
                    }
                    if ($price == 3) {
                        $str_price .= " AND (products.price >= 3000000 AND products.price < 6000000)";
                    }
                    if ($price == 4) {
                        $str_price .= " AND products.price >= 6000000";
                    }
                }

                $str_price = substr($str_price, 3);
                $str_price = "($str_price)";
                $params['price'] = $str_price;
            }
        }
        $params_pagination = [
            'total' => 5,
            'limit' => 1,
            'full_mode' => FALSE,
        ];

        $product_model = new Product();
        $products = $product_model->getProduct2();
        $category_model = new Category();
        $categories = $category_model->getAll();
        $this->content = $this->render('views/product/product.php', [
            'products' => $products,
            'categories' => $categories,
//            'paginations' => $pagination,
        ]);
        require_once 'views/layouts/main.php';
    }
    public function show3() {
        $params = [];
        if (isset($_POST['filter'])) {
            if (isset($_POST['category'])) {
                $category = implode(',', $_POST['category']);
                $str_category_id = "($category)";
                $params['category'] = $str_category_id;
            }
            if (isset($_POST['price'])) {
                $str_price = '';
                foreach ($_POST['price'] AS $price) {
                    if ($price == 1) {
                        $str_price .= " AND products.price < 1000000";
                    }
                    if ($price == 2) {
                        $str_price .= " AND (products.price >= 1000000 AND products.price < 3000000)";
                    }
                    if ($price == 3) {
                        $str_price .= " AND (products.price >= 3000000 AND products.price < 6000000)";
                    }
                    if ($price == 4) {
                        $str_price .= " AND products.price >= 6000000";
                    }
                }

                $str_price = substr($str_price, 3);
                $str_price = "($str_price)";
                $params['price'] = $str_price;
            }
        }
        $params_pagination = [
            'total' => 5,
            'limit' => 1,
            'full_mode' => FALSE,
        ];

        $product_model = new Product();
        $products = $product_model->getProduct3();
        $category_model = new Category();
        $categories = $category_model->getAll();
        $this->content = $this->render('views/product/product.php', [
            'products' => $products,
            'categories' => $categories,
//            'paginations' => $pagination,
        ]);
        require_once 'views/layouts/main.php';
    }
    public function show4() {
        $params = [];
        if (isset($_POST['filter'])) {
            if (isset($_POST['category'])) {
                $category = implode(',', $_POST['category']);
                $str_category_id = "($category)";
                $params['category'] = $str_category_id;
            }
            if (isset($_POST['price'])) {
                $str_price = '';
                foreach ($_POST['price'] AS $price) {
                    if ($price == 1) {
                        $str_price .= " AND products.price < 1000000";
                    }
                    if ($price == 2) {
                        $str_price .= " AND (products.price >= 1000000 AND products.price < 3000000)";
                    }
                    if ($price == 3) {
                        $str_price .= " AND (products.price >= 3000000 AND products.price < 6000000)";
                    }
                    if ($price == 4) {
                        $str_price .= " AND products.price >= 6000000";
                    }
                }

                $str_price = substr($str_price, 3);
                $str_price = "($str_price)";
                $params['price'] = $str_price;
            }
        }
        $params_pagination = [
            'total' => 5,
            'limit' => 1,
            'full_mode' => FALSE,
        ];

        $product_model = new Product();
        $products = $product_model->getProduct4();
        $category_model = new Category();
        $categories = $category_model->getAll();
        $this->content = $this->render('views/product/product.php', [
            'products' => $products,
            'categories' => $categories,
//            'paginations' => $pagination,
        ]);
        require_once 'views/layouts/main.php';
    }
    public function show5() {
        $params = [];
        if (isset($_POST['filter'])) {
            if (isset($_POST['category'])) {
                $category = implode(',', $_POST['category']);
                $str_category_id = "($category)";
                $params['category'] = $str_category_id;
            }
            if (isset($_POST['price'])) {
                $str_price = '';
                foreach ($_POST['price'] AS $price) {
                    if ($price == 1) {
                        $str_price .= " AND products.price < 1000000";
                    }
                    if ($price == 2) {
                        $str_price .= " AND (products.price >= 1000000 AND products.price < 3000000)";
                    }
                    if ($price == 3) {
                        $str_price .= " AND (products.price >= 3000000 AND products.price < 6000000)";
                    }
                    if ($price == 4) {
                        $str_price .= " AND products.price >= 6000000";
                    }
                }

                $str_price = substr($str_price, 3);
                $str_price = "($str_price)";
                $params['price'] = $str_price;
            }
        }
        $params_pagination = [
            'total' => 5,
            'limit' => 1,
            'full_mode' => FALSE,
        ];

        $product_model = new Product();
        $products = $product_model->getProduct5();
        $category_model = new Category();
        $categories = $category_model->getAll();
        $this->content = $this->render('views/product/product.php', [
            'products' => $products,
            'categories' => $categories,
//            'paginations' => $pagination,
        ]);
        require_once 'views/layouts/main.php';
    }
}
