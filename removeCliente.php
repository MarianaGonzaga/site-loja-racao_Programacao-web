<?php include("cabecalho.php");
include("conecta.php");
include("bancoCliente.php");

$id = $_GET['id_cliente'];
removecliente($conexao, $id);
?>
<p class="alert alert-success"> Cliente <?=$id?> removido!</p>