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
                <div class="logBlock"><div class="textuser">Usuário Abu</div></div>
            </a><div class="linha"></div>
            <a href="pedidos.php" style="margin-top: 30px;"><img src="IMG/config.png" id="icon">Pedidos</a>
            <a href="Configurações.php" style="margin-top: 10px;"><img src="IMG/pedidos.png" id="icon">Configurações</a>
            <a href="logout.php" style="margin-top: 10px;"><img src="IMG/logout.png" id="icon">Logout</a>
            
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