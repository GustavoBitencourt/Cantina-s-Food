<?php
session_start();
require_once "conecta.php";

if(isset($_POST['finalizar'])){
	$dataAtual= date('Y-m-d');
	$sqlRealizarPedido = mysql_query("INSERT INTO pedido (valor_total, data) VALUES ('$total', '$dataAtual')");

	$Enviar = mysql_insert_id($sqlRealizarPedido);

?>			
	<script>alert("Pedido Realizado com Sucesso")</script>;
			
			
}