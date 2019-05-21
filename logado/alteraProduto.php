<?php
    session_start();
    require_once("conecta.php");
    require_once("cabecalho.php");

   
  
		

?>

	<form action="alterarProduto.php" method="get" accept-charset="utf-8">
	Nome<br>
	<input type="text" name="nomeDoProduto"><br>
	Valor<br>
	<input type="text" name="valor" maxlength="10"><br>
	Imagem Ilustrativa<br>	
	<input type="text" name="imagem"><br>
	<input type="submit" name="enviar" value="Cadastrar">
    </form>
    
