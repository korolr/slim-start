<?php
$app->get('/hello/{name}', function ($request, $response, $args) {
    return $this->view->render($response, 'home.tpl', [
        'name' => $args['name']
    ]);
})->setName('profile');

$app->get('/hi/{name}', function ($request, $response, $args) {
    $str = $this->view->fetchFromString('<p>Hi, my name is {{ name }}.</p>', [
        'name' => $args['name']
    ]);
    $response->getBody()->write($str);
    return $response;
});
