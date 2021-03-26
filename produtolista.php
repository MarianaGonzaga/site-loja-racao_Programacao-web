<?php include("cabecalho.php");
include("conecta.php");
include("bancoproduto.php");?>


<table class="table table-striped table-bordered"> 

	<?php
$produtos = listaprodutos($conexao);
foreach($produtos as $produto) {
?>
	<tr>
	   <td><?= $produto['idProduto']?></td>

		<td><?= $produto['nome']?></td>
		<td><?= $produto['preco']?></td>
		<td>
			<a href="removeproduto.php?idProduto=<?= $produto['idProduto']?>" class="text-danger"> remover </a>
		</td>
	</tr>
<?php
	}
?>
</table>
<?php include("rodape.php");?>