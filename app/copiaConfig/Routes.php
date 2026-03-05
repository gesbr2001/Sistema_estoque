<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::login');

// Auth
$routes->get('/login', 'Auth::login');
$routes->post('/auth/autenticar', 'Auth::autenticar');
$routes->get('/logout', 'Auth::logout');

// Sistema
$routes->get('/dashboard', 'Dashboard::index');

// Requisições (estoque)
$routes->get('/requisicoes', 'Requisicao::index');
$routes->get('/requisicoes/nova', 'Requisicao::nova');
$routes->post('/requisicoes/salvar', 'Requisicao::salvar');


//ROTA DAS PAGINAS
$routes->get('/separacao', 'SeparacaoController::index');
$routes->get('/triagem', 'TriagemController::index');
$routes->get('/protocolo', 'ProtocoloController::index');
$routes->get('/conferencia', 'ConferenciaController::index');
$routes->get('/expedicao', 'ExpedicaoController::index');

//ROTA DE SALVAR A PROTOCOLAÇÃO DA REQUISIÇAO
$routes->post('/protocolo/salvar', 'ProtocoloController::salvar');


?>