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
  
});

 //Login
$router->post('/login','UsuarioController@usuarioLogin');

//token
$router->post('/info', 'UsuarioController@mostrarToken');
$router->post('logout', 'UsuarioController@usuarioLogout');

//Cadastro dos usuarios
$router->get('/usuarios', 'UsuarioController@usuario'); 

$router->group(['prefix' => 'usuario'], function() use($router){

    $router->post('/cadastrar', 'UsuarioController@cadastrar'); 
    $router->get('/{nivel}', 'UsuarioController@mostrarUsuario'); 
    $router->get('/{id}/atualizar', 'UsuarioController@atualizarUsuario'); 
    $router->put('/{id}/atualizar', 'UsuarioController@atualizarUsuario');
    $router->delete('/deletar/{id}', 'UsuarioController@deletarUsuario');
});



//Cadastro das Maquinas

$router->get('/maquinas', 'MaquinasController@maquinas'); 

$router->group(['prefix' => 'maquinas'], function() use($router){

    $router->post('/cadastrar', 'MaquinasController@cadastrar'); 
    $router->get('/{id}', 'MaquinasController@mostrarMaquinas'); 
    $router->get('/{id}/atualizar', 'MaquinasController@atualizarMaquinas'); 
    $router->put('/{id}/atualizar', 'MaquinasController@atualizarMaquinas');
    $router->delete('/{id}/deletar', 'MaquinasController@deletarMaquinas');
});

//Cadastrar Ordens

$router->get('/ordens', 'OrdemsController@ordem'); 

$router->group(['prefix' => 'ordem'], function() use($router){

    $router->post('/cadastrar', 'OrdemsController@cadastrar'); 
    $router->get('/{id}', 'OrdemsController@mostrarOrdem'); 
    $router->get('/{id}/atualizar', 'OrdemsController@atualizarOrdem'); 
    $router->put('/{id}/atualizar', 'OrdemsController@atualizarOrdem');
    $router->delete('/{id}/deletar', 'OrdemsController@deletarOrdem');
});

//Cadastrar Relatorios

$router->get('/relatorios', 'RelatoriosController@relatorios'); 

$router->group(['prefix' => 'relatorio'], function() use($router){

    $router->post('/cadastrar', 'RelatoriosController@cadastrar'); 
    $router->get('/{id}', 'RelatoriosController@mostrar'); 
    $router->get('/{id}/atualizar', 'RelatoriosController@atualizarRelatorio'); 
    $router->put('/{id}/atualizar', 'RelatoriosController@atualizarRelatorio');
    $router->delete('/{id}/deletar', 'RelatoriosController@deletarRelatorio');
});

