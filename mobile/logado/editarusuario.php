<?php
    
    session_start();
    require_once("conecta.php");

    // $comando="SELECT * FROM clientes WHERE id = {$_SESSION['id']}";
    // $enviar=mysqli_query($conn, $comando);
   
   if (isset($_GET['cliente']) && !empty($_GET['cliente'])) {
		$cliente=$_GET['cliente'];
		$comando = "SELECT * FROM clientes WHERE id='$id";
		$enviar=mysqli_query($conn, $comando);
		$cliente=mysqli_fetch_assoc($enviar);
		// var_dump($cliente);
		// die();
	}	
 ?>

<!DOCTYPE html>
<html>

<head>
    <title>CantIF</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="language" content="PT-BR">
    <link rel="stylesheet" type="text/css" href="../mobile.css">
    <link rel="stylesheet" type="text/css" href="mobile.css">
    <link rel="icon"  href="../../IMG/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Mina:400,700&display=swap" rel="stylesheet">
</head>

<nav>
            <div class="nav-name">
                <a href="index.php"><div class="container">CantIF</div></a>
            </div>

            <div class="nav-menu">
                <div class="container"><img onclick="abrir()" src="../../IMG/menu.png"></div>
            </div>
        </nav>




         <div id="menu" class="menu">
        <div class="container">
            <a id="avatar" href="#">
                
                <?php
   if (mysqli_num_rows($enviar)>0) :
        while($dado = mysqli_fetch_array($enviar)):
     ?>
                <img src="../imgPerfil/<?php echo $dado['imagem'];?>" class="logBlock">
                <div class="textuser"><?php echo $dado['nome'];?></div>
                <?php 
                endwhile;
                else: ?>
                    <img src="../imgPerfil/user.png" class="logBlock">
                    <?php 
                endif;
               ?>

                    




            </a><div class="linha"></div>
            <a href="#" style="margin-top: 30px;"><img src="../IMG/config.png" id="icon">Pedidos</a>
            <a href="editarusuario.php" style="margin-top: 10px;"><img src="../IMG/pedidos.png" id="icon">Configurações</a>
            <a href="../index.php" style="margin-top: 10px;"><img src="../IMG/logout.png" id="icon">Logout</a>
            
        </div>
    </div>

<div class="titulomob"> <br><br>Atualize Seus Dados </div>

    <form action="editausuario.php" method="get" name="formulario" accept-charset="utf-8"> 
                <img src="../IMG/email.png" class="icon01"> Email<br>
                <input type="email" name="email" class="" value="<?php echo $email['email']?>"><br>
                <img src="../IMG/nome.png" class="icon3"> Nome<br>
                <input type="text" name="nome" class="" value="<?php echo $cliente['nome']?>"><br>
                <img src="../IMG/matric.png" class="icon3" > Matrícula ou SIAPE<br>
                <input type="text" name="id" class="" value="<?php echo $cliente['id']?>"><br>   
             
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"  enctype="multipart/form-data">
                <input type="hidden" name="MAX_FILE_SIZE" value="200000">
                Imagem Perfil:<input type="file" name="imagem" placeholder="Imagem">
                <input type="submit" name="enviar" class="botaoenviar" value="Confirmar">
                </form>
            </form>




<script>

    
    function abrir() {

    var el = document.getElementById('menu')

    console.log(el.style.display)

    if (el.style.display == 'none' || el.style.display == '') {
        el.style.display = 'flex';
    } else {
        el.style.display = 'none';
    }
}


if (window.innerWidth > 950) {
    alert("Para visualizar, utilize um dispositivo mobile, ou abra em modo desenvolvedor (F12) e logo após ative o modo mobile Ctrl+Shift+M .");
}

</script>