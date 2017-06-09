<?php

class ConexaoDSN
{
	private $dsn;
	private $user;
	private $password;

	public function __construct($dsn, $user, $password)
	{
		$this->dsn		= $dsn;
		$this->user		= $user;
		$this->password = $password;
	}

	public function conectar()
	{
		return new \PDO($this->dsn, $this->user, $this->password);
	}

}
