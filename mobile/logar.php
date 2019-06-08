<?php
session_start();
require_once("conecta.php"); 

if(isset($_POST['enviar'])) {
	if (!empty($_POST['email']) || !empty($_POST['senha'])) {
		$email=$_POST['email'];
		$senha=MD5($_POST['senha']);

		$comando="SELECT * FROM clientes WHERE email = '$email' and senha = '$senha'";
		$enviar=mysqli_query($conn, $comando);
		$resultado=mysqli_fetch_assoc($enviar);
		
		if($resultado) {
			$_SESSION['nome']=$resultado['nome'];
			$_SESSION['id']=$resultado['id'];
			header("location:logado/index.php");
			exit;
		}else{
			$_SESSION['mensagem']="Email ou senha incorretos";
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