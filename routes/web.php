<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});


//static
//struktur : $router->method('/path', 'NamaController@namaFunction');

//index
$router->get('stuffs', 'StuffController@index');
$router->get('users', 'UserController@index');
$router->get('/inbound-stuffs/data', 'InboundStuffController@index');

//store
$router->post('/stuffs/store', 'StuffController@store');
$router->post('/users/store', 'UserController@store');
$router->post('/inbound-stuffs/store', 'InboundStuffController@store');

//trash
$router->get('/stuffs/trash', 'StuffController@trash');
$router->get('/users/trash', 'UserController@trash');
$router->get('/inbound-stuffs/trash', 'InboundStuffController@trash');

//dinamis

//show
$router->get('/stuffs/{id}', 'StuffController@show');
$router->get('/users/{id}', 'UserController@show');

//update
$router->patch('/users/update/{id}', 'UserController@update');
$router->patch('/stuffs/update/{id}', 'StuffController@update');

//destroy
$router->delete('/stuffs/delete/{id}', 'StuffController@destroy');
$router->delete('/users/delete/{id}', 'UserController@destroy');
$router->delete('/inbound-stuffs/delete/{id}', 'InboundStuffController@destroy');

//restore
$router->get('/stuffs/trash/restore/{id}', 'StuffController@restore');
$router->get('/users/trash/restore/{id}', 'UserController@restore');
$router->get('/restore/{id}', 'InboundStuffController@restore');

//permanent-delete
$router->get('/stuffs/trash/permanent-delete/{id}', 'StuffController@permanentDelete');
$router->get('/users/trash/permanent-delete/{id}', ' UserController@permanentDelete');
$router->delete('/inbound-stuffs/permanent-delete/{id}', 'InboundStuffController@permanentDelete');
