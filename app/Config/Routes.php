<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
<<<<<<< HEAD
$routes->get('/', 'Home::index');
=======
$routes->get('/', 'Auth::login');
>>>>>>> 0e73b1d (coloquei o docker e o css)

// Auth
$routes->get('/login', 'Auth::login');
$routes->post('/auth/autenticar', 'Auth::autenticar');
$routes->get('/logout', 'Auth::logout');

// Sistema
<<<<<<< HEAD
$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'auth']);
=======
$routes->get('/dashboard', 'Dashboard::index');
>>>>>>> 0e73b1d (coloquei o docker e o css)

// Requisições (estoque)
$routes->get('/requisicoes', 'Requisicao::index');
$routes->get('/requisicoes/nova', 'Requisicao::nova');
$routes->post('/requisicoes/salvar', 'Requisicao::salvar');


<<<<<<< HEAD
//ROTA DE SALVAR A PROTOCOLAÇÃO DA REQUISIÇAO
$routes->post('/protocolo/salvar', 'ProtocoloController::salvar');

//ROTA PARA PROTOCOLOAR UMA NOVA REQUISIÇÃO
$routes->get('/protocolo/novo', 'ProtocoloController::novo');

//ROTA DO FILTER /*
$routes->get('/protocolo', 'ProtocoloController::index', [
    'filter' => 'auth:admin,farmaceutico_cliente,farmaceutico_empresa'
]);

$routes->get('/triagem', 'TriagemController::index', [
    'filter' => 'auth:admin,farmaceutico_empresa'
]);

$routes->get('/separacao', 'SeparacaoController::index', [
    'filter' => 'auth:admin,separador,farmaceutico_empresa'
]);

$routes->get('/conferencia', 'ConferenciaController::index', [
    'filter' => 'auth:admin,conferidor,farmaceutico_empresa'
]);

$routes->get('/expedicao', 'ExpedicaoController::index', [
    'filter' => 'auth:admin,expedicao,farmaceutico_empresa'
]);

//rota triagem requisição protocolo -> triagem
$routes->get('/protocolo/enviarTriagem/(:num)', 'ProtocoloController::enviarTriagem/$1');




$routes->get('/teste', function() {
    return "rota funcionando";
});
=======
//ROTA DAS PAGINAS
$routes->get('/separacao', 'SeparacaoController::index');
$routes->get('/triagem', 'TriagemController::index');
$routes->get('/protocolo', 'ProtocoloController::index');
$routes->get('/conferencia', 'ConferenciaController::index');
$routes->get('/expedicao', 'ExpedicaoController::index');

//ROTA DE SALVAR A PROTOCOLAÇÃO DA REQUISIÇAO
$routes->post('/protocolo/salvar', 'ProtocoloController::salvar');


>>>>>>> 0e73b1d (coloquei o docker e o css)
?>