<?php


$router->get('/version', function () use ($router) {
    return $router->app->version();
});

// $router->get('/', function () use ($router){
//     echo "<center> Welcome to my shitworld </center>";
// });
$router->get('/', 'WebPagesController@loginPage');
$router->get('/reg', 'WebPagesController@registerPage');


Route::group([
    'prefix' => 'api'
], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('register', 'AuthController@register');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('profile', 'AuthController@me');
    
});




$router->get('/server1', 'AuthorController@index');
$router->post('/server1', 'AuthorController@addData');
$router->get('/server1/{authorId}', 'AuthorController@getWithId');
$router->put('/server1/{authorId}', 'AuthorController@update');
$router->delete('/server1/{authorId}', 'AuthorController@delete');


// SITE 2

$router->get('/server2', 'BookController@index');
$router->post('/server2', 'BookController@add');
$router->get('/server2/{bookId}', 'BookController@getWithId');
$router->put('/server2/{bookId}', 'BookController@update');
$router->delete('/server2/{bookId}', 'BookController@delete');

