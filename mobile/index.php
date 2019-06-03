<?php


?>
<!DOCTYPE html>
<html>

<head>
    <title>CantIF</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="language" content="PT-BR">
    <link rel="stylesheet" type="text/css" href="mobile.css">
    <link rel="icon"  href="../IMG/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Mina:400,700&display=swap" rel="stylesheet">
</head>
        
<header>

        <nav>
            <div class="nav-name">
                <div class="container">CantIF</div>
            </div>

            <div class="nav-menu">
                <div class="container"><img onclick="abrir()" src="../IMG/menu.png"></div>
            </div>
        </nav>

         <div id="menu" class="menu">
        <div class="container">
            <a id="avatar" href="#">
                <div class="logBlock"><div class="textuser">Login</div></div>
            </a><div class="linha"></div>

                <form action="#" method="post" name="formulario" accept-charset="utf-8"> 
                    <img src="IMG/email.png" class="icon"> Email<br>
                <input type="text" name="email" class=""><br> 
                    <img src="IMG/lock.png" class="icon2"> Senha<br>
                <input type="password" name="senha" class=""><br>
                <button type="submit" name="enviar" class="botaoenviar" value="Entrar"></button> 
                </form>
            
        </div>
    </div>





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