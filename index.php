<?php

require_once "Cliente.php";

$cliente = new Cliente;
$listaCliente = $cliente->listar();

require_once "clientes.list.php";

?>
