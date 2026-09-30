
<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/api/test', function () {
    return response()->json([
        'success' => true,
        'message' => 'Lumen API is working!',
    ]);
});
