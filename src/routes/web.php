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

$router->group(["prefix" => "api"], function() use ($router){
    $router->get("/karyawan",["uses"=>"KaryawanController@index"]);
    $router->post("/karyawan",["uses"=>"KaryawanController@create"]);
    $router->put("/karyawan/{id}",["uses"=>"KaryawanController@update"]);
    $router->get("/karyawan/{id}",["uses"=>"KaryawanController@show"]);
    $router->delete("/karyawan/{id}",["uses"=>"KaryawanController@destroy"]);

    $router->get("/gaji",["uses"=>"GajiController@index"]);
    $router->post("/gaji",["uses"=>"GajiController@create"]);
    $router->put("/gaji/{id}",["uses"=>"GajiController@update"]);
    $router->get("/gaji/{id}",["uses"=>"GajiController@show"]);
    $router->delete("/gaji/{id}",["uses"=>"GajiController@destroy"]);

});
