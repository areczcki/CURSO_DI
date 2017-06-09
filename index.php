<?php

require_once "Cliente.php";
require_once 'Conexao.php';

$conexao = new Conexao("localhost", "diservice", "root", "root");
$cliente = new Cliente($conexao);
$listaCliente = $cliente->listar();

require_once "clientes.list.php";

?>
