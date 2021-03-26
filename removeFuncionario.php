<?php include("cabecalho.php");
include("conecta.php");
include("bancofuncionario.php");

$id = $_GET['id_funcionario'];
removefuncionario($conexao, $id);
?>
<p class="alert alert-success"> Funcionario <?=$id?> removido!</p>