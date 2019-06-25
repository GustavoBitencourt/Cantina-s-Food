<?php
session_start();
require_once("conecta.php");

	if(isset($_GET['cadastrar'])) {
		$produto=$_GET['cd_produto'];

		if(!empty($_GET['valor'])){
			$valor=$_GET['valor'];
			
		
			$comando="UPDATE produtos SET valor='$valor' WHERE cd_produto=$produto";
			$enviar=mysqli_query($conn, $comando);
			
		}
		
		if(!empty($_GET['imagem'])){
			$imagem=$_GET['imagem'];
			

			$comando="UPDATE produtos SET imagem='$imagem' WHERE cd_produto=$produto";
			$enviar=mysqli_query($conn, $comando);
			
		}
		
		if(!empty($_GET['nomeDoProduto'])){
			$nomeDoProduto=$_GET['nomeDoProduto'];

			$comando="UPDATE produtos SET nomeDoProduto='$nomeDoProduto' WHERE cd_produto=$produto";
			$enviar=mysqli_query($conn, $comando);
			
		}

		if(!empty($_GET['categoria'])){
			$categoria=$_GET['categoria'];
			
		
			$comando="UPDATE produtos SET categoria='$categoria' WHERE cd_produto=$produto";
			$enviar=mysqli_query($conn, $comando);
			
		}
		if($enviar>0) {
				$_SESSION['mensagem']="Alterado com sucesso";
				header("location:listaDeProdutos.php");
				exit;
			}else{
				$_SESSION['mensagem']="Erro ao alterar";
				header("location:listaDeProdutos.php");
				exit;
			}
	
	}else{
		header("location:index.php");
				exit;
	}
?>	