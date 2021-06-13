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

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('pegawai',  ['uses' => 'PegawaiController@showAllPegawai']);
    $router->get('pegawai/{pe_id}',  ['uses' => 'PegawaiController@showOnePegawai']);
    $router->post('pegawai',  ['uses' => 'PegawaiController@create']);
    $router->put('pegawai/{pe_id}',  ['uses' => 'PegawaiController@update']);
    $router->delete('pegawai/{pe_id}',  ['uses' => 'PegawaiController@delete']);
    $router->get('cuti',  ['uses' => 'CutiController@showAllCuti']);
    $router->get('cuti/complete',  ['uses' => 'CutiController@showCompleteCuti']);
    $router->get('cuti/kategori',  ['uses' => 'CutiController@showKategori']);
    $router->get('cuti/{id}',  ['uses' => 'CutiController@showOneCuti']);
    $router->get('cuti/pegawai/{pe_id}',  ['uses' => 'CutiController@showCutiPegawai']);
    $router->post('cuti',  ['uses' => 'CutiController@createCuti']);
    $router->post('cuti/kategori',  ['uses' => 'CutiController@createKategori']);
});
