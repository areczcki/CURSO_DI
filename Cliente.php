<?php

require_once 'Conexao.php';

class Cliente
{
	public function listar()
	{

		//retirar da index.php o c�digo abaixo.
		$query = "select * from clientes";
		$stmt = $db->prepare($query);
		$stmt->execute();

		$return $stmt->fetchAll(\PDO::FETCH_ASSOC);
	}
}
