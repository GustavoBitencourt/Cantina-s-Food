<?php
session_start();

include_once ('conecta.php');
if(isset($_GET['cadastrar'])) {
		if(!empty($_GET['valor']) || !empty($_GET['nomeDoProduto']) || !empty($_GET['imagem']) || !empty($_GET['descricao'])){
			$valor=$_GET['valor'];
			$nomeDoProduto=$_GET['nomeDoProduto'];
			$imagem=$_GET['imagem'];
			$descricao=$_GET['descricao'];
			$categoria=$_GET['categoria'];
			$comando="INSERT INTO produtos(valor, nomeDoProduto, imagem, descricao, categoria) VALUES ('$valor', '$nomeDoProduto', '$imagem', '$descricao', '$categoria')";
			
			$enviar=mysqli_query($conn, $comando);

			if($enviar) {
				$_SESSION['mensagem']="Cadastrado com sucesso";
				header("location:index.php");
				exit;
			}else{
				$_SESSION['mensagem']="Erro ao cadastrar";
				header("location:index.php");
				exit;
			}
		}else{
			$_SESSION['mensagem']="Algum dos campos ficou em branco";
				header("location:index.php");
				exit;
		}
	}else{
		        header("location:index.php");
				exit;
	}
?>	

