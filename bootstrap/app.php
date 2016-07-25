<?php

require_once __DIR__ . '/../vendor/autoload.php';

$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true,
        'determineRouteBeforeAppMiddleware' => true,
        'addContentLengthHeader' => false,
    ],
]);

$container = $app->getContainer();

$container['view'] = function($container) {
    $view = new \Slim\Views\Twig(__DIR__ . '/../resources/views/', [
        'cache' => false
    ]);

    $view->addExtension(new \Slim\Views\TwigExtension(
        $container->router,
        $container->request->getUri()
    ));

    return $view;
};

$container['HomeController'] = function($container) {
    return new \Blog\Controllers\HomeController($container->view);
};

$container['PostsController'] = function($container) {
    return new \Blog\Controllers\PostsController($container->view);
};

$container['AboutController'] = function($container) {
    return new \Blog\Controllers\AboutController($container->view);
};

require __DIR__ . '/../app/routes.php';