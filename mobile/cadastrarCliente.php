<?php
session_start(); 
require_once('conecta.php'); 

	if(isset($_REQUEST['enviar'])) { 
		if(!empty($_REQUEST['nome']) || !empty($_REQUEST['email']) || !empty($_GET['imagem']) || !empty($_REQUEST['senha']) || !empty($_REQUEST['id'])){ 
			
			$nome=$_REQUEST['nome']; 
			$email=$_REQUEST['email'];
			$imagem=$_GET['imagem'];
			$senha=MD5($_REQUEST['senha']);
			$id=$_REQUEST['id']; 

			$comando="INSERT INTO clientes(email, imagem, senha, nome, id) VALUES ('$email', '$imagem', '$senha', '$nome', '$id')"; 
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