    
<?php
session_start();
require_once "conecta.php";


if(isset($_POST['finalizar'])) {
	if (!empty($_POST['valor_total'])) {
		$valorTotal=$_POST['valor_total'];
		$dataAtual= date('Y-m-d');

		$comando="INSERT INTO pedido (valor_total, data) VALUES ('$valorTotal', '$dataAtual')";
		$enviar=mysqli_query($conn, $comando);
		
		






	
	
	$Enviar = mysql_insert_id($sqlRealizarPedido);
?>			
	<script>alert("Pedido Realizado com Sucesso")</script>;
			
			
}


