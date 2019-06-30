<!DOCTYPE html>
<html>

<head>
    <title>CantIF</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="language" content="PT-BR">
    <link rel="stylesheet" type="text/css" href="mobile.css">
    <link rel="icon"  href="../../IMG/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Mina:400,700&display=swap" rel="stylesheet">
</head>

<?php

require_once("conecta.php");


$pesquisar = $_POST['pesquisar'];
$result_produtos = "SELECT * FROM produtos WHERE nomeDoProduto LIKE '%$pesquisar%'";
$resultado_produtos = mysqli_query($conn, $result_produtos);

while($rows_produtos = mysqli_fetch_array($resultado_produtos)){
		
?><div class="produtos">
        <div class="areaproduto" >
		<article id="itens">
            <div class="none"> <div class="nomeproduto"><?php echo "".$rows_produtos['nomeDoProduto']."<br>";?></div>
            <div class="preco">R$ <?php echo "".$rows_produtos['valor']."<br>";?></div>
            <div class="imagemproduto"><img src="../../logado/ImgProdutos/<?php echo "".$rows_produtos['imagem'];?>" class="imgprodutos"></div>
            <div class="comprar"><button id="comp">Comprar</button></div></div></article>

		<!-- echo "Produto: ".$rows_produtos['nomeDoProduto']."<br>";
		echo "Valor: ".$rows_produtos['valor']."<br>"; -->
</div>
</div>
<?php
}