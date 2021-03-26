<?php 

class Produto_class {
    
    private $pdo;
    public function _construct($dbname, $host, $user, $senha){
       try{
           $this->pdo = new PDO("mysql:bdname=".$dbname.";host=".$host, $user, $senha);

       } catch(PDOException $e){
            echo 'Erro com banco de dados:'.$e->getMessage();
       } catch(Exception $e){
            echo 'Erro generico:'.$e->getMessage();
       }
    } 

    public function enviarProduto($nome, $descricao, $fotos = array())
    {
        //Inserindo Produto
        $cmd = $this->pdo->prepare('INSERT INTO produtos(nome_produto, descricao) VALUES(:n, :d)');
        $cmd->bindValue(':n', $nome);
        $cmd->bindValue(':d', $descricao);
        $cmd->execute();
        $id_produto = $this->pdo->LastInsertId();
        //Inserindo Imagens
        if(count($fotos > 0)){

            for($i = 0; $i < count($fotos); $i++){
                $nome_foto = $fotos[$i];
                $cmd = $this->pdo->prepare('INSERT INTO imagens(nome_imagem, fk_id_produto) VALUES(:n, :fk)');
                $cmd->bindValue(':n', $nome_foto);
                $cmd->bindValue(':fk', $id_produto);
                $cmd->execute();
            }
        }
    }

    public function buscarProduto()
    {
        # code...
    }
    public function buscarProdutoPorId($id)
    {
        # code...
    }
    public function buscarImagensPorId($id)
    {
        # code...
    }

}



?>