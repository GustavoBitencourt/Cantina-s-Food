<?php

require_once("conecta.php");
require_once("cabecalho.php");

if(isset($_POST[ok])){

	$email = $mysqli->escape_string($_POST['email']);

	if(!filter var($email, FILTER_VALIDATE_EMAIL)){
		$erro[] = "E-mail inválido.";
	}

	$sql_code = "SELECT senha, cd_cliente FROM usuario WHERE email = '$email'";
	$sql_query = $mysqli->query($sql_code) or die($mysqli->error);
	$dado = $sql_query->fetch_assoc();
	$total = $sql_query->num_rows;

	if($total == 0)
		$erro[] = "O e-mail informado não existe no banco de dados.";

	if(count($erro) == 0  && $total > 0){

	$novasenha = substr(md5(time()), 0, 6);
	$nscriptografada = md5(md5($novasenha));

	if(mail($email, "Sua nova senha", "Sua novasenha: ".$novasenha)){

		$sql_code = "UPDATE usuario SET senha = '$nscriptografada' WHERE email = '$email'";
		$sql_query = $mysqli->query($sql_code) or die($mysqli->error);

		if($sql_query)
			$erro[] = "Senha alterada com Sucesso!";

	}
}

}

?>
<?php
	if (count($erro) > 0)
			foreach ($erro as $msg) {
			 	echo "<p>$msg</p>";
			 } 
	}

?>

<form method="POST" action="">
	<input placeholder="Seu E-mail" name="email" type="text">
	<input name="ok" value="ok" type="submit">
</form>

</body>