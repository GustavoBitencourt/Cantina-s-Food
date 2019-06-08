<?php
session_start();
require_once "conecta.php";

$nome_arquivo=$_FILES['foto']['name'];
$tamanho_arquivo=$_FILES['foto']['size'];
$arquivo_temporario=$_FILES['foto']['tmp_name'];

if(!empty($nome_arquivo)) {

	if(move_uploaded_file($arquivo_temporario, "imagens/$nome_arquivo")) {
	echo" Uploaddo arquivo: ". $nome_arquivo."concluído com sucesso";
	}

else{
	die( "Falha no envio do arquivo");
}
}
else{
 die("Selecione o arquivo a ser enviado");
}
?>
