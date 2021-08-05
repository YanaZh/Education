<?php


namespace App\View;

use App\Renderable;

class View implements Renderable
{
    private $templatePath;
    private $templateData = [];

    public function __construct($name, $templateData = [])
    {
        $this->templatePath = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . VIEW_DIR . str_replace('.', DIRECTORY_SEPARATOR, $name) . '.php';
        $this->templateData = $templateData;
    }

    public function render()
    {
        if (file_exists($this->templatePath)) {
            extract($this->templateData, EXTR_SKIP);
            require $this->templatePath;
        }
    }
}