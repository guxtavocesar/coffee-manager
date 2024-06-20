<?php

$routes = [

    '/' => 'MesaController@index',

    '/login' => 'LoginController@index',
    
    # Rotas referentes ao funcionario
    '/cadastro' => 'FuncionarioController@index',
    
    # Rotas referentes à mesa
    '/mesa' => 'MesaController@index',
    '/mesa/detalhes' => 'MesaController@index',
    '/mesa/detalhes/{id}' => 'MesaController@loadViewInfoMesa',
    '/mesa/adicionar/{id}' => 'MesaController@loadViewAddProduto',

    # Rotas referentes ao cardapio
    '/cardapio' => 'CardapioController@index',
    '/cardapio/{id}' => 'CardapioController@loadInfoCardapio',

    # Rotas referentes ao estoque
    '/estoque' => 'EstoqueController@index',
    '/estoque/incluir' => 'EstoqueController@loadEstoqueIncluir',
    '/estoque/editar/{id}' => 'EstoqueController@loadEstoqueEditar',
];