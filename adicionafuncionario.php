<?php include("cabecalho.php");
include("conecta.php");
?>

<div class="funcionario">
    <?php
    $nome = $_GET["nome"];
    $cpf = $_GET["cpf"];
    $query = "insert into funcionario(nome, cpf)
    values ('{$nome}', '{$cpf}')";
    if(mysqli_query($conexao, $query)) {?>
    <p class="alert alert-success">funcionario <?=$nome;?> Cadastrado com sucesso!</p>
    <?php } else{
    $msg = mysqli_error($conexao);
    ?>
    <p class="alert alert-warning">Funcionario não adicionado: <?=$msg?></p>
    <?php
}
?>
    <ul>
        <li>Nome: <?= $nome;?></li>
        <li>CPF: <?= $cpf;?></li>
    </ul>
</div>

<?php include("rodape.php");?>

