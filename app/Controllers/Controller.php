<?php

namespace Blog\Controllers;

use Slim\Views\Twig as View;

class Controller
{

    protected $view;

    public function __construct(View $view)
    {
        $this->view = $view;
    }

}