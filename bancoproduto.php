<?php
function listaprodutos($conexao) {
	$produtos = array();
	$resultado = mysqli_query($conexao, "select * from produto");
	while($produto = mysqli_fetch_assoc($resultado)) {
		array_push($produtos, $produto);
}
	return $produtos;
}

function removeproduto($conexao, $id) {
	$query = "delete from produto where idProduto = {$id}";
	return mysqli_query($conexao, $query);
	}
	
