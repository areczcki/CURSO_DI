<?php

require_once 'vendor/autoload.php';

$pimple = new Pimple();

$container['datahora'] = function () {
	return new \DateTime();
};

//Usando o Container do Pimple
$hora = $container['datahora'];
//e porque n�o fazer assim
$hora = new \DateTime;

//Se eu chamar assim:
$hora = new \DateTime;
//Estamos instanciando o PHP na memoria.

//Se eu chamar assim:
$hora = $container['dataHora'];
//Dessa forma estaremos instanciando, somente quando chamarmos $container['dataHora']

//Essa fun��o ($container['dataHora']) consegue trabalhar sobre demanda, s� vai chamar quando invocar.

//Vamos dar uma nova perspectiva para a nossa conexao.
/*
$container['conexao'] = function() {
	return new \SON\Conexao("localhost", "diservice", "root", "root");
};
Toda vez que eu chamar uma conex�o, estamos criando duas conex�es com banco...
Isso � terrivel, estamos com duas instancias de conex�es.
*/

/*
 * Vamos trabalhar com servi�os compartilhados.
 * Com o pimple faremos da seguinte forma.
 */
// $container['conexao'] = $container->share(function() {
// 	return new \SON\Conexao("localhost", "diservice", "root", "root");
// });
/*
 * Utilizando $container->share o pimple far� com que compartilhemos a mesma instancia de conex�o.
 * Pegando a mesma instancia que est� na mem�ria.
 */

/**
 * O servico chamando outro.
 * E se tive-se tivesemos diversos programas rodando, n�o ir� ficar instanciando esse objeto na mem�ria.
 */
$container['cliente'] = $container->share(function(){
	return new \SON\Cliente($container['conexao']);
});


//Ent�o vamos fazer utiliza-lo.
$cliente = new \SON\Cliente($container['conexao']);

//Mais e se eu precisar instanciar um novo Cliente.
$cliente2 = new \SON\Cliente($container['conexao']);

//Toda vez que eu chamar uma conex�o, estamos criando duas conex�es com banco...
//Isso � terrivel, estamos com duas instancias de conex�es.

//Vamos trabalhar com servi�os compartilhados.
//Com o pimple faremos da seguinte forma.


$conexao = new Conexao("localhost", "diservice", "root", "root");
$conexaoDSN = new ConexaoDSN("mysql server=localhost dbname=diservice", "root", "root");

/**
 * Chamando a instancia de Cliente via container
 * @var Cliente
 */
$cliente = Container::getCliente();


/**
 * Como e uma interface de conex�o o parametro 
 * serve para qualquer um que implemente ConexaoInterface
 */
$cliente = new Cliente($conexao);
$cliente = new Cliente($conexaoDSN);

$listaCliente = $cliente->listar();

require_once "clientes.list.php";

?>