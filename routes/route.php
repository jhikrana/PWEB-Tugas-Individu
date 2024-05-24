<?php 

// $url = $_SERVER['REQUEST_URI'];
// $path = basename(parse_url($url, PHP_URL_PATH));

$routes = [];

$routes['GET']['/'] = 'AuthController@viewlogin';
$routes['GET']['/login'] = 'AuthController@viewlogin';
$routes['GET']['/register'] = 'AuthController@viewregister';
$routes['POST']['/login'] = 'AuthController@login';
$routes['POST']['/register'] = 'AuthController@register';
$routes['GET']['/logout'] = 'AuthController@logout';

// Rute untuk peserta
$routes['GET']['/peserta'] = 'PesertaController@index';
$routes['GET']['/pesertacreate'] = 'PesertaController@formcreate';
$routes['GET']['/pesertaupdate/{id}'] = 'PesertaController@formupdate';
$routes['POST']['/createpeserta'] = 'PesertaController@create';
$routes['POST']['/updatepeserta/{id}'] = 'PesertaController@update';
$routes['GET']['/deletepeserta/{id}'] = 'PesertaController@delete';


?>