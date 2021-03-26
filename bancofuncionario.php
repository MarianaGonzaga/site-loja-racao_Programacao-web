<?php
function listafuncionario($conexao) {
	$funcionarios = array();
	$resultado = mysqli_query($conexao, "select * from funcionario");
	while($funcionario = mysqli_fetch_assoc($resultado)) {
		array_push($funcionarios, $funcionario);
}
	return $funcionarios;
}

function removefuncionario($conexao, $id) {
	$query = "delete from funcionario where id_funcionario = {$id}";
	return mysqli_query($conexao, $query);
}
	