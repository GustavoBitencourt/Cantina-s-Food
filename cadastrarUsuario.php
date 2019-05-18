<?php
session_start(); 
require_once('conecta.php'); 

	if(isset($_REQUEST['enviar'])) { 
		if(!empty($_REQUEST['nome']) || !empty($_REQUEST['email']) || !empty($_REQUEST['senha']) || !empty($_REQUEST['cpf']) || !empty($_REQUEST['telefone'])){ 
			
			$nome=$_REQUEST['nome']; 
			$email=$_REQUEST['email']; 
			$senha=MD5($_REQUEST['senha']);
			$cpf=$_REQUEST['cpf'];
			$telefone=$_REQUEST['telefone']; 

			$comando="INSERT INTO usuario(email, senha, nome, cpf, telefone) VALUES ('$email', '$senha', '$nome', '$cpf', '$telefone')"; 
			$enviar=mysqli_query($conn, $comando);             
			if($enviar) {                                      
				$_SESSION['mensagem']="Cadastrado com sucesso";
				header("location:index.php");                 
				exit;                                           
			}else{
				$_SESSION['mensagem']="Erro ao cadastrar"; 
				header("location:cadastroUsuario.php"); 
				exit; 
			}   
		}else{
			$_SESSION['mensagem']="Algum dos campos ficou em branco"; 
				header("location:cadastroUsuario.php"); 
				exit; 
		}
	}else{
		header("location:index.php"); 
				exit; 
	}
?>	