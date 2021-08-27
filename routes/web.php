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


// Show ALL products
$router->get('/products', 'ProductController@index');

//show Each Products By ID
$router->get('/products/{id}', 'ProductController@show');

//store products
$router->post('/products/create', 'ProductController@store');

//update products
$router->post('/products/update/{id}', 'ProductController@update');

// Delete
$router->delete('/products/delete/{id}', 'ProductController@destroy');


$router->get('/', function () use ($router) {
    return $router->app->version();
});
