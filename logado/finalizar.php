<?php
session_start();
require_once "conecta.php";


if(isset($_GET['finalizar'])) {
	if (!empty($_GET['valor_total'])) {
		$valorTotal=$_GET['valor_total'];
		$dataAtual= date('Y-m-d');
		$comando="INSERT INTO pedidos (valor_total, data) VALUES ('$valorTotal', '$dataAtual')";
		$enviar=mysqli_query($conn, $comando);
		
		
	if($enviar) {                                      
				$_SESSION['mensagem']="Cadastrado com sucesso";
				header("location:vendas.php");                 
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
	
			
			
}