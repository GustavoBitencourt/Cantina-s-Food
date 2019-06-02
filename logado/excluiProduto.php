<?php include("cabecalho.php");
      include("conecta.php");
     
?>
<script>
    
        alertify.alert("Acesso Negado, Faça o Login").set('label', 'aceitar');
    
</script>


<?php
$id = $_GET['id'];


if($id!=0){
    $comando="DELETE FROM produtos WHERE cd_produto=$id";
    mysqli_query($conn, $comando);
 	

header("Location: listaDeProdutos.php?removido=true");
}
else{
echo "DEU RUIM";
}


		// if(!empty($_GET['nomeDoProduto'])){
		// 	$nomeDoProduto=$_GET['nomeDoProduto'];

		// 	$comando="UPDATE produtos SET nomeDoProduto='$nomeDoProduto' WHERE cd_produto=$produto";
		// 	$enviar=mysqli_query($conn, $comando);

			?>