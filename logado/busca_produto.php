<?php


include_once ('conecta.php');

$id=$_GET['id'];

$comando="SELECT * FROM produtos WHERE cd_produto='$id'";

$enviar=mysqli_query($conn, $comando);
 
    
 $resultado=mysqli_fetch_array($enviar);
 echo json_encode($resultado);