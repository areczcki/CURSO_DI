<?php

require_once 'ConexaoInterface.php';

class Cliente
{
	/*
		** ESSE TREM TA MUITO ACOPLADO
		public function __construct($host, $db, $user, $password)
		{
		$conexao = new Conexao($host, $db, $user, $password);
		$this->db = $conexao->connect();
		}
		*/

	/** Vamos desacoplar */
	public function __construct(ConexaoInterface $conexao)
	{
		$this->db = $conexao->connect();
	}

	public function listar()
	{
		//retirar da index.php o código abaixo.
		$query = "select * from clientes";
		$stmt = $db->prepare($query);
		$stmt->execute();

		return $stmt->fetchAll(\PDO::FETCH_ASSOC);
	}
}
