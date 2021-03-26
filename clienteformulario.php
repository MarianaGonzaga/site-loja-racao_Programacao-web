<?php include("cabecalho.php");
include("conecta.php");
?>

<div class="Container">
<form action="adicionacliente.php">
<h3>Cadastro de Cliente</h3>

 
  <div class="form-group">
    <label for="nome">Nome:</label>
    <input type="text" class="form-control" name="nome">
  </div>

  <div class="form-group">
    <label for="cpf">CPF:</label>
    <input type="text" class="form-control" name="cpf">
 </div>

 <div class="form-group">
    <label for="telefone">Telefone:</label>
    <input type="text" class="form-control" name="telefone">
 </div>

  <div class="d-flex justify-content-center">
    <button type="submit" class="btn btn-warning">Cadastrar</button>
  </div>
</form>
</div>

<?php include("rodape.php");?>