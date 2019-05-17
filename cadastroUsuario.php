<?php
session_start();

require_once("conecta.php"); 


if(!empty($_SESSION['mensagem'])) { 
		echo $_SESSION['mensagem'];  
		unset($_SESSION['mensagem']); 
	}

?>

	<form action="cadastrarUsuario.php" method="post" accept-charset="utf-8">

	Nome<br><input type="text" name="nome"><br> 
	Email<br><input type="email" name="email"><br>
	Senha<br><input type="password" name="senha"><br>
	CPF<br><input type="number" name="cpf"></br>
	Telefone<br><input type="number" name="telefone"></br> 

	<input type="submit" name="enviar" value="Cadastrar"> 

    </form>

    <a href="index.php">Voltar</a> 
