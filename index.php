<?php
require 'conexao.php';

$query = "select * from clientes";
$stmt = $db->prepare($query);
$stmt->execute();

$clientes = $stmt->fetchAll(\PDO::FETCH_ASSOC);
?>

<table>
	<tr>
		<td>ID</td>
		<td>Nome</td>
		<td>Email</td>
	</tr>
	<? foreach($clientes as $cliente): ?>
	<tr>
		<td><?$cliente['id']?></td>
		<td><?$cliente['nome']?></td>
		<td><?$cliente['email']?></td>
	</tr>
	<? endforeach; ?>
</table>