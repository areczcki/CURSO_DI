<?php

require_once "Cliente.php";
require_once 'Conexao.php';

$cliente = new Cliente("localhost", "diservice", "root", "root");
$listaCliente = $cliente->listar();

require_once "clientes.list.php";

?>
