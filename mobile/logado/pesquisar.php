<link rel="stylesheet" type="text/css" href="mobile.css">
<?php
	//Incluir a conexão com banco de dados
	include_once('conecta.php');
	
	//Recuperar o valor da palavra
	$produtos = $_POST['palavra'];
	
	//Pesquisar no banco de dados nome do curso referente a palavra digitada pelo usuário
	$produtos = "SELECT * FROM produtos WHERE nomeDoProduto LIKE '%$produtos%'";
	$resultado_produtos = mysqli_query($conn, $produtos);
	
	if(mysqli_num_rows($resultado_produtos) <= 0){
		echo "Nenhum produto encontrado...";
	}else{
		while($rows_produtos = mysqli_fetch_assoc($resultado_produtos)){
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
		}
	
