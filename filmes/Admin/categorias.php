<?php 
  include("conexao.php");
  ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <ul>
        <li><a href="categorias.html">Categorias</li>
        <li><a href="filmes.html">Filmes</a></li>
    </ul>
    <main>
        <form>
            <h2>Categorias</h2>
            <?php
            if(isset($_GET['editar'])and $_GET['editar'] != NULL){
              $id_categoria = $_GET['editar'];
              $sql = "select * from categoria WHERE id = $id_categoria";

              $resultado = $conexao->query($sql);
              $obj = $resultado->fetch_assoc();

              echo $obj['nome'];
            }
            ?>
            <input type="text" name="categoria" placeholder="nome categoria..."value="<?php echo $obj['nome'] ?>">
            <button name="salvar">Salvar</button>
        </form>
    </main>
  </body>
</html>

<?php
  if(isset($_GET["salvar"])){
  $nomecategoria = $_GET['categoria'];

   $sql = "insert into categoria (nome) values ('$nomecategoria')";
        $conexao->query($sql);
        echo "gravou com sucessoooooooo!";
  }else {
    echo "deu ruim";
    }
  $sql = "select * from categoria";
  $resultado = $conexao->query($sql);

    while ($obj = $resultado->fetch_assoc()){
      echo $obj['id']." - ".$obj['nome']."<a href='?editar=".$obj['id']."'>editar</a><br>";
    }

    if(isset($_GET['editar'])){
      echo "entrou, la ele";
    }
?>