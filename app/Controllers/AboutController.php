<?php

namespace Blog\Controllers;

class AboutController extends Controller
{
    public function index($request, $response)
    {
        return $this->view->render($response, 'about/index.twig');
    }
}