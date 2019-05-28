<?php
$ip = "localhost";
$login = "root";
$senha = "senha5";
$banco = "cantina"; 


$conn=mysqli_connect($ip, $login, $senha, $banco);

if (!$conn) {

	echo "Erro de Conexão no servidor"; 
}

?>