<?php include("cabecalho.php");
include("conecta.php");
include("bancoCliente.php");?>


<table class="table table-striped table-bordered"> 

	<?php
$clientes = clienteLista($conexao);
foreach($clientes as $cliente) {
?>
	<tr>
	   <td><?= $cliente['id_cliente']?></td>

		<td><?= $cliente['nome']?></td>
		<td><?= $cliente['cpf']?></td>
		<td>
			<a href="removecliente.php?id_cliente=<?= $cliente['id_cliente']?>" class="text-danger"> remover </a>
		</td>
	</tr>
<?php
	}
?>
</table>
<?php include("rodape.php");?>