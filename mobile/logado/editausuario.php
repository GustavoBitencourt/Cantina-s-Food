<?php
session_start();
require_once("conecta.php");

	if(isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['id']) && !empty($_POST['id']) && isset($_POST['imagem']) && !empty($_POST['imagem']) && isset($_POST['email']) && !empty($_POST['email'])){
	$nome=$_POST['nome'];
	$id=$_POST['id'];
	$imagem=$_POST['imagem'];
	$email=$_POST['email'];

		$comando="UPDATE clientes SET nome='$nome', id='$id', imagem='$imagem', email='$email'";
		// echo $comando;
		$enviar=mysqli_query($conn, $comando); 
		// var_dump($enviar);
		// die();
	if($enviar) {
				$_SESSION['mensagem']="Editado com sucesso";
				// header("location:listadeclientes.php");
				exit;
			}else{
				$_SESSION['mensagem']="Erro ao editar";
				// header("location:listadeclientes.php");
				exit;
			}
	
	}else {
		// header("location:../index.php");
		exit;
	}
?>	