<?php
namespace App\Core;

class Controller
{
    public function view(string $view, array $data = [])
    {
        $viewPath = str_replace('.', '/', $view);
        $content = '../app/views/' . $viewPath . '.php';

        if (!empty($data)) {
            extract($data);
        }

        require_once '../app/views/layouts/app.php';
    }
}
?>

