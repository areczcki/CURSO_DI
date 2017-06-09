<?php
require_once "Conexao.php";

class Cliente 
{
	
	private $db;
	
	public function __construct()
	{
		$conexao = new Conexao("localhost", "diservice", "root", "root");
		$this->db = $conexao->connect();
	}
	
	public function listar()
	{
		
		$query = "select * from $clientes";
		$stmt = $db->prepare($query);
		$stmt->execute();
		
		$return $stmt->fetchAll(\PDO::FETCH_ASSOC);
	}
}