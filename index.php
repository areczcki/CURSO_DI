<?php

require_once 'vendor/autoload.php';

$conexao = new Conexao("localhost", "diservice", "root", "root");
$conexaoDSN = new ConexaoDSN("mysql server=localhost dbname=diservice", "root", "root");

/**
 * Chamando a instancia de Cliente via container
 * @var Cliente
 */
$cliente = Container::getCliente();


/**
 * Como e uma interface de conexão o parametro 
 * serve para qualquer um que implemente ConexaoInterface
 */
$cliente = new Cliente($conexao);
$cliente = new Cliente($conexaoDSN);

$listaCliente = $cliente->listar();

require_once "clientes.list.php";

?>
