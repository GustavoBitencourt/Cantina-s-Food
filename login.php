<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CantIF</title>
    <link rel="shortcut icon" href="IMG/logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" media="screen" href="cantina.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
	<!-- 01 HEADER -->
    <header>

            <div class="title">Projeto CantIF</div><img src="IMG/logo.png" class="titleimg">
        
	<!-- NAV -->
	<nav>
        <!-- <li><a href="#">Opção 1</a></li>
        <li><a href="#">Opção 2</a></li>
        <li><a href="#">Opção 3</a></li>
        <li><a href="#">Opção 4</a></li>
        <li><a href="#">Opção 5</a></li> -->
        <li><a href="login.php">Login</a></li>
    </nav>
</header>
<div class="formulariologin">
<?php
session_start(); 

require_once("conecta.php");

 
if(!empty($_SESSION['mensagem'])) { 
		echo $_SESSION['mensagem']; 
		unset($_SESSION['mensagem']); 
	}
	if(!empty($_SESSION['nome']) and !empty($_SESSION['id'])) { 
		$id=$_SESSION['id'];
		$nome=$_SESSION['nome'];
	}else{
		$_SESSION['mensagem']="Você não está logado"; 
		
	}

?>
 <br>


<br><h1>Bem vindo(a)</h1><br>

<form action="validar.php" method="post" name="formulario" accept-charset="utf-8" onsubmit="validar()"> 
	Email<br>
	<input type="text" name="email" class="input2"><br> 
	Senha<br>
	<input type="password" name="senha" class="input2"><br>
	<input type="submit" name="enviar" class="button2" value="Entrar">
</form>

<a href="cadastroUsuario.php" class="button3">Cadastrar</a>
<a href="perdiPassword.php" class="button2">Esqueci a senha</a>
<a href="sair.php" class="button2">Sair</a>

</div>

<script>

	function validar(){
		if(document.formulario.email.value == ''){
			alert("nem");
			return false;
		}
		return true;
	}
</script>