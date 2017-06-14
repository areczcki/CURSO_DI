<?php
$container = new Pimple;

$container['conexao'] = $container->share(function(\Pimple $container) {
	return new \SON\Conexao($container['localhost'], 
							$container['diservice'], 
							$container['root'], 
							$container['root']
							);
});
$container['cliente'] = $container->share(function(){
	return new \SON\Cliente($container['conexao']);
});