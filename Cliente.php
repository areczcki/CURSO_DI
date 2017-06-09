<?php
require_once "Conexao.php";

class Cliente 
{
	
	private $db;
	
	public function __construct($host, $db, $user, $password)
	{
		$conexao = new Conexao($host, $db, $user, $password);
		$this->db = $conexao->connect();
	}
	
	public function listar()
	{
		//retirar da index.php o código abaixo.
		$query = "select * from $clientes";
		$stmt = $db->prepare($query);
		$stmt->execute();
	
		$return $stmt->fetchAll(\PDO::FETCH_ASSOC);
	}
}