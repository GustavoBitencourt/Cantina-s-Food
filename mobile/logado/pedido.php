<?php
    session_start();
    require_once("conecta.php");
   
    $comando="SELECT * FROM produtos";
    $enviar=mysqli_query($conn, $comando);
    
    if (mysqli_num_rows($enviar)>0) {
        $resultado=mysqli_fetch_all($enviar);
     
        if(!empty($_SESSION['mensagem'])) {
        echo $_SESSION['mensagem'];
        unset($_SESSION['mensagem']);
    }
?>


<!DOCTYPE html>
<html>

<head>
    <title>CantIF</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="language" content="PT-BR">
    <link rel="stylesheet" type="text/css" href="mobile.css">
    <link rel="icon"  href="../../IMG/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Mina:400,700&display=swap" rel="stylesheet">
</head>


<?php if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') { ?>
    <p class="alert-success">Produto removido com sucesso!</p>
<?php } ?>

    <table>
        <tr>
            <th>Produto</th>
            <th>Valor</th>
            <th>Imagem</th>
            <th>Adicionar</th>
        </tr>

        <?php
    foreach ($resultado as $produto) :
    
?>
        <tr>
            <td><?php echo $produto['2'];?></td>
            <td><?php echo $produto['1'];?></td>
            <td><img src="../../logado/ImgProdutos/<?php echo $produto['3'];?>" class="imgprodutos"></td>
            <td><button>Adicionar</button></td>
            
        </tr>


<?php
    endforeach;
?>

    </table>

    <div class="finalizar">
    <button href="index.php">Finalizar</button>   
    </div>
            
<?php
}
?>
<br>
<button><a href="index.php">Voltar</a></button>