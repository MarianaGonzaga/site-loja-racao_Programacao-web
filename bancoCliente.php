<?php
function clienteLista($conexao) {
	$clientes = array();
	$resultado = mysqli_query($conexao, "select * from cliente");
	while($cliente = mysqli_fetch_assoc($resultado)) {
		array_push($clientes, $cliente);
}
	return $clientes;
}

function removecliente($conexao, $id) {
	$query = "delete from cliente where id_cliente = {$id}";
	return mysqli_query($conexao, $query);
	}
	