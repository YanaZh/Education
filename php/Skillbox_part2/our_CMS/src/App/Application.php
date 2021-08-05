<?php

namespace App;

class Application
{
    private $router;

    function __construct(Router $router)
    {
        $this->router = $router;
    }

    public function run()
    {
        try {
            $content = $this->router->dispatch();
            if ($content instanceof Renderable) {
                $content->render();
            } else {
                echo $content;
            }
        } catch (\Exception $e) {
            $this->renderException($e);
        }
    }

    public function renderException($exception)
    {
        if ($exception instanceof Renderable) {
            $exception->render();
        } else {
            $exceptionCode = $exception->getCode();
            if ($exceptionCode === 0) {
                $exception->code = 500;
            }
            echo $exception->getMessage();
        }
    }
}