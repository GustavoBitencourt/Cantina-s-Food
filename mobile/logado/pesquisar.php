<link rel="stylesheet" type="text/css" href="mobile.css">
<?php

	require_once('conecta.php');

	$campo="%{$_POST['campo']}%";
$comando="SELECT * FROM produtos where nomeDoProduto like ?";
    $enviar=mysqli_query($conn, $comando);
		// $sql=$conn->prepare('select * from produtos where nomeDoProduto like ?');
		// $sql->bind_param("s", $campo);
		// $sql->execute();
		// $sql->bind_result($nomeDoProduto, $valor, $imagem);

		// while ($enviar->fetch()) {
		// 	echo $nomeDoProduto.'<br>';
		// }?>
    <div class="produtos" id="resultado">
        <div class="areaproduto" >
<?php
    foreach ($resultado as $produto) :
    
?>

            <article id="itens">
            <div class="none"> <div class="nomeproduto"><?php echo $produto['2'];?></div>
            <div class="preco">R$ <?php echo $produto['1'];?></div>
            <div class="imagemproduto"><img src="../../logado/ImgProdutos/<?php echo $produto['3'];?>" class="imgprodutos"></div>
            <div class="comprar"><button id="comp">Comprar</button></div></div></article>
            
        


<?php
    endforeach;
?>