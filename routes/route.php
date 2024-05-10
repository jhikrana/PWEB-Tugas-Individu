<?php 

// $url = $_SERVER['REQUEST_URI'];
// $path = basename(parse_url($url, PHP_URL_PATH));

$routes = [];

$routes['GET']['/'] = 'AutentikasiController@index';
$routes['POST']['/login'] = 'AutentikasiController@login';
$routes['GET']['/register'] = 'AutentikasiController@register';
$routes['POST']['/register'] = 'UserController@register';

// Rute untuk peserta
$routes['GET']['/peserta'] = 'PesertaController@index';
$routes['GET']['/pesertacreate'] = 'PesertaController@formcreate';
$routes['GET']['/pesertaupdate/{id}'] = 'PesertaController@formupdate';
$routes['POST']['/createpeserta'] = 'PesertaController@create';
$routes['POST']['/updatepeserta/{id}'] = 'PesertaController@update';
$routes['GET']['/deletepeserta/{id}'] = 'PesertaController@delete';


?>