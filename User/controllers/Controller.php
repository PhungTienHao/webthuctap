<?php


class Controller
{
    public function __construct()
    {
    }

    public $content;
    public $error;

    /**
     * @param $file string Đường dẫn tới file
     * @param array $variables array Danh sách các biến truyền vào file
     * @return false|string
     */
    public function render($file, $variables = []) {

        extract($variables);

        ob_start();

        require_once $file;
        $render_view = ob_get_clean();

        return $render_view;
    }
}