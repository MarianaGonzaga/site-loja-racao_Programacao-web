<?php include("cabecalho.php");?>

<div class="Container">
<form action="index.php">
<h3>Formulário de Produtos</h3>

  
  <div class="form-group">
    <label for="nome">Nome:</label>
    <input type="text" class="form-control" name="nome">
  </div>
  <div class="form-group">
        <label for="desc">Descricao:</label>
        <input type="text" class="form-control" name="desc">
  </div>
  <div class="form-group">
      <label for="foto">Foto:</label>
      <input type="file" name="imagem[]" multiple id="foto">
    </div>

  <div class="d-flex justify-content-center">
    <button type="submit" class="btn btn-warning">Cadastrar</button>
  </div>
</form>
</div>
  <?php 
    if(isset($_POST['nome'])){
        $nome = addslashes($_POST['nome']);
        $descricao = addslashes($_POST['desc']);
        $fotos = array();
        if(isset($_FILES['foto'])){
         
          //Salvando a imagem dentro da PASTA
          for($i=0; $i < count($_FILES['fotos']['name']); $i++){
            $nome_arquivo = $_FILES['foto']['nome'][$i].rand(1,999).'jpg';
            move_uploaded_file($_FILES['foto']['tmp_name'][$i], 'imagens/'.$nome_arquivo);
         
          //Salvando nomes para Enviar ao BANCO
            array_push($fotos, $nome_arquivo);
          }
        }
        // Verificar se foi preenchido todos os Campos
        if(!empty($nome) && !empty($descricao)){
            require 'Produto_class.php';
            $p = new Produto_class('formulario_produtos', 'localhost', 'root', '');
            $p->enviarProduto($nome, $descricao, $fotos);
            ?>
            <script type="text/javascript">
              alert('Produto cadastrado com sucesso!')
            </script> 
            <?php
        } else { ?>
          <script type="text/javascript">
              alert('Preencha os campos obrigatorios!')
          </script>
        <?php
        }
    }
  ?>
 
<?php include("rodape.php");?>