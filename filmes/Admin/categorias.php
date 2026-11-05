<?php
    include("conexao.php")
?>
<link rel="stylesheet" href="style.css">
<ul>
    <li><a href="categorias.html">categorias</a></li>
    <li><a href="filmes.html">Filmes</a></li>
</ul>
<main id="categoria">
    <form method="get">
        <h2>categorias</h2>
        <input type="text" name="categoria" placeholder="nome categoria...">
        <button name="salvar">salvar</button>
    </form>
</main>

<?php
   
   if(isset($_GET["salvar"])){
    $nomecategoria = $_GET["categoria"];

   }
?>