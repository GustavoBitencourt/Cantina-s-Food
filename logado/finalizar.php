<?php
session_start();
require_once "conecta.php";

if(isset($_POST['finalizar'])){
	$sqlRealizarPedido = mysql_query("INSERT INTO pedido (valortotal) VALUES ('$total')");

	$Idpedido = mysql_insert_id($sqlRealizarPedido);

	foreach ($_SESSION['pedido'] as $ProdInsert => $qtd): 
		$SqlInserirItens = mysql_query("INSERT INTO itensPedido(IdPedido, IdProd) VALUES ('$IdPedido', '$ProdInsert')");
	endforeach;
			echo "<script>alert("Pedido Realizado com Sucesso")</script>";
			
			
}