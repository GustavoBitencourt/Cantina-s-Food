<?php
    session_start();
    require_once("conecta.php");
   
    $comando="SELECT * FROM produtos";
    $enviar=mysqli_query($conn, $comando);
    
    if (mysqli_num_rows($enviar)>0) {
        $resultado=mysqli_fetch_all($enviar);
     
        
require_once("conecta.php");
    // $comando="SELECT * FROM clientes WHERE id = {$_SESSION['id']}";
    // $enviar=mysqli_query($conn, $comando);
    
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
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <script type="text/javascript" src="busca.js"></script>
</head>
        
<!-- <header>
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
            <a id="avatar" href="#"> -->
                
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

                    




            <!-- </a><div class="linha"></div>
            <a href="#" style="margin-top: 30px;"><img src="../IMG/config.png" id="icon">Pedidos</a>
            <a href="#" style="margin-top: 10px;"><img src="../IMG/pedidos.png" id="icon">Configurações</a>
            <a href="../index.php" style="margin-top: 10px;"><img src="../IMG/logout.png" id="icon">Logout</a> -->
            
        </div>
    </div>

        <div class="busca">
            <form action="" id="form-pesquisar" method="POST" class="pesquisar">
                <input type="text" name="campo" id="pesquisa" placeholder="Pesquisar Produto" class="inputnome">
                <button name="enviar" value="pesquisar" type="submit" class="imgpesq"></button>
            </form>
        
        
        </div><a href="index.php"><button class="voltar"></button></a>
    <br><br>
    <div class="produtos" id="resultado">
        <div class="areaproduto" >

        <?php
    foreach ($resultado as $produto) :
    
?>

            <article id="itens">
            <div class="none"> <div class="nomeproduto"><?php echo $produto['2'];?></div>
            <div class="preco">R$ <?php echo $produto['1'];?></div>
            <div class="imagemproduto"><img src="../../logado/ImgProdutos/<?php echo $produto['3'];?>" class="imgprodutos"></div>
            <div class="comprar"><button id="comp">Comprar</button></div></div></article>
            
        


<?php
    endforeach;
?>
<br> <br>
<!-- <button><a href="index.php">Voltar</a></button> -->
</div>
</div>
    

   <!--  <div class="finalizar">
    <button href="index.php">Finalizar</button>   
    </div> -->
            
<?php
}
?>

<input readonly="true" type="text" name="valor_total" id="valor_total" class="valorTotal" value="0" placeholder="Valor total">
<td><form action="finalizar.php" method="get">
                <input type="submit" class="finalizar" name="finalizar" value="Finalizar Pedido">
                </form></td>

</html>

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
if (window.innerWidth > 450) {
    alert("Para visualizar, utilize um dispositivo mobile, ou abra em modo desenvolvedor (F12) e logo após ative o modo mobile Ctrl+Shift+M .");
}
</script>