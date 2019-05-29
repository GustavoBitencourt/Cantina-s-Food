<!DOCTYPE html>
<html>

<?php

require_once("cabecalho.php");

?>

<body>
	
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
		$_SESSION['mensagem']="Você não está logado."; 
		
	}

?>

 <br>


<br><h1>Bem vindo(a)</h1><br>

<form action="validar.php" method="post" name="formulario" accept-charset="utf-8" onsubmit="validar()"> 
	Email<br>
	<input type="text" name="email" class="input2"><br> 
	Senha<br>
	<input type="password" name="senha" class="input2"><br></div><div class="botoes">
	<input type="submit" name="enviar" class="button2" value="Entrar">
</form>

<a href="cadastroUsuario.php" class="button2">Cadastrar</a></div>
<a href="esqueceuSenha.php" class="button2">Esqueci a senha</a>
<a href="sair.php" class="button5">Sair</a>


<script>

	function validar(){
		if(document.formulario.email.value == ''){
			alert("nem");
			return false;
		}
		return true;
	}
</script>