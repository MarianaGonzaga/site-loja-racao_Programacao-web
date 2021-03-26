<?php include("cabecalho.php");
include("conecta.php");
include("bancofuncionario.php");?>


<table class="table table-striped table-bordered"> 

	<?php
$funcionarios = listafuncionario($conexao);
foreach($funcionarios as $funcionario) {
?>
	<tr>
	   <td><?= $funcionario['id_funcionario']?></td>
		<td><?= $funcionario['nome']?></td>
		<td><?= $funcionario['cpf']?></td>
		<td>
			<a href="removefuncionario.php?id_funcionario=<?= $funcionario['id_funcionario']?>" class="text-danger"> remover </a>
		</td>
	</tr>
<?php
	}
?>
</table>
<?php include("rodape.php");?>