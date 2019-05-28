<?php
session_start();
require_once("cabecalho.php");
require_once("conecta.php"); 
?>
<html>

<div class="formulariologin">

<?php 

if(!empty($_SESSION['mensagem'])) { 
		echo $_SESSION['mensagem'];  
		unset($_SESSION['mensagem']); 
	}

?>

	<form action="cadastrarUsuario.php" method="post" accept-charset="utf-8">

	Nome<br><input type="text" name="nome" class="input2"><br> 
	Email<br><input type="email" name="email" class="input2"><br>
	Senha<br><input type="password" name="senha" class="input2"><br>
	CPF<br><input type="number" name="cpf" class="input2"></br>
	Telefone<br><input type="number" name="telefone" class="input2"></br> 

	<input type="submit" name="enviar" value="Cadastrar" class="button2"> 

    </form>

    <a href="index.php">Voltar</a> 
