<?php

namespace Blog\Controllers;

class PostsController extends Controller
{
    public function index($request, $response)
    {
        return $this->view->render($response, 'post/index.twig');
    }
}