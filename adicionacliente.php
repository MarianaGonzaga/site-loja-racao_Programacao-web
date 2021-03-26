<?php include("cabecalho.php");
include("conecta.php");
?>

<div class="cliente">
    <?php
    $nome = $_GET["nome"];
    $cpf = $_GET["cpf"];
    $telefone = $_GET["telefone"];
    $query = "insert into cliente(nome, cpf, telefone)
    values ('{$nome}', '{$cpf}', '{$telefone}')";
    if(mysqli_query($conexao, $query)) {?>
    <p class="alert alert-success">Cliente <?=$nome;?> Cadastrado com sucesso!</p>
    <?php } else{
    $msg = mysqli_error($conexao);
    ?>
    <p class="alert alert-warning">Cliente não adicionado: <?=$msg?></p>
    <?php
}
?>
</div>

<?php include("rodape.php");?>

