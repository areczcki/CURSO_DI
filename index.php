<?php

require_once "Cliente.php";
require_once 'Conexao.php';
require_once 'ConexaoDSN.php';

$conexao = new Conexao("localhost", "diservice", "root", "root");
$conexaoDSN = new ConexaoDSN("mysql server=localhost dbname=diservice", "root", "root");


/** E Se eu precisar instanciar para a classe DSN */
$cliente = new Cliente($conexaoDSN);
/**
 * XIIIII... não vai dar boa!!! Porque a minha classe Cliente espera uma conexão de uma 
 * classe de Conexao.php e não de ConexaoDSN.php
 * 
 * Como resolver??? Simples.. Criando uma interface de conexão.
 */

$cliente = new Cliente($conexao);
$listaCliente = $cliente->listar();

require_once "clientes.list.php";

?>
