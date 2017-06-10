<?php

require_once 'vendor/autoload.php';

$pimple = new Pimple();

$container['datahora'] = function () {
	return new \DateTime();
};

//Usando o Container do Pimple
$hora = $container['datahora'];
//e porque nгo fazer assim
$hora = new \DateTime;

//Se eu chamar assim:
$hora = new \DateTime;
//Estamos instanciando o PHP na memoria.

//Se eu chamar assim:
$hora = $container['dataHora'];
//Dessa forma estaremos instanciando, somente quando chamarmos $container['dataHora']

//Essa funзгo ($container['dataHora']) consegue trabalhar sobre demanda, sу vai chamar quando invocar.

$conexao = new Conexao("localhost", "diservice", "root", "root");
$conexaoDSN = new ConexaoDSN("mysql server=localhost dbname=diservice", "root", "root");

/**
 * Chamando a instancia de Cliente via container
 * @var Cliente
 */
$cliente = Container::getCliente();


/**
 * Como e uma interface de conexгo o parametro 
 * serve para qualquer um que implemente ConexaoInterface
 */
$cliente = new Cliente($conexao);
$cliente = new Cliente($conexaoDSN);

$listaCliente = $cliente->listar();

require_once "clientes.list.php";

?>