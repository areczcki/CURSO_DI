<?php
class Container {

	public static function getCliente()
	{
		// aqui tenho a dependencia de conexão, nesse caso.
		$cliente = new Cliente(self::getConexao());
		return $cliente;
	}
	
	public static function getConexao()
	{
		$conexao = new Conexao("localhost", "diservice", "root", "root");
		return $conexao;
	}

}