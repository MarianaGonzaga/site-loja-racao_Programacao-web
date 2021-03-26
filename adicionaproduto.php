<?php include("cabecalho.php");?>
<div class="produtos">
    <?php

    include("conecta.php");
    $foto = $_FILES["imagem"];
    $dataCompra = $_GET["dataCompra"];
    $descricaoProduto = $_GET["descricaoProduto"];
    $fabricante = $_GET["fabricante"];
    $fornecedor = $_GET["fornecedor"];
    $nome = $_GET["nome"];
    $numeroLote = $_GET["numeroLote"];
    $peso = $_GET["peso"];
    $preco = $_GET["preco"];
    $tipoProduto = $_GET["tipoProduto"];
    $unidade = $_GET["unidade"];

// Expressão regular 
//formato de imagem aceitos 
if (!preg_match("/^image\/(pjpeg|jpeg|JPG|png|gif|bmp)$/", $foto["type"])) { 
    header("location:produtoformulario.php?");
} else {
    echo "Erro no formato/tamanho";
    header("location:produtoformulario.php?");
}
//fim

    $inserir =  $pdo->prepare("INSERT INTO produto(foto, dataCompra, descricaoProduto, fabricante, fornecedor, nome, numeroLote, peso, preco, tipoProduto, unidade)
    VALUES (:foto, :dataCompra, :descricaoProduto, :fabricante, :fornecedor, :nome', :numeroLote, :peso}, :preco, :tipoProduto, :unidade)");
  
    if (!empty($foto["name"])) {
        // verifica se é um arquivo de imagem
        preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);
        // Gera um nome único para a imagem 
        $nome_imagem =  date('Y-m-d-His')."_".$foto["name"];
        
        //Cria uma pasta dentro do projeto 
        $caminho_imagem = "media/" . $nome_imagem;
        move_uploaded_file($foto["tmp_name"], $caminho_imagem);
    }

    
   
   if ($inserir->execute()) {?>
        <p class="alert alert-success">Produto <?=$nome;?>, <?= $preco?> adicionado com sucesso!</p>
    <?php } else {
         $msg = mysqli_error($conexao);
    }?>
 
</div>

<?php include("rodape.php");?>

