<?php

$app->get('/', 'HomeController:index')->setName('home');
$app->get('/posts', 'PostsController:index')->setName('posts');
$app->get('/about', 'AboutController:index')->setName('about');