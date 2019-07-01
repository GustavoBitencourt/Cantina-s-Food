<!DOCTYPE html>
<?php

if(isset($_POST['enviar'])):
    $formatosPermitidos = array("png", "jpeg", "jpg", "gif");
    $extensao = pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);

    if(in_array($extensao, $formatosPermitidos)):
        $pasta = "imgPerfil/";
        $temporario = $_FILES['imagem']['tmp_name'];
        $novoNome = uniqid().".$extensao";

        if(move_uploaded_file($temporario, $pasta.$novoNome)):
            $mensagem = "Sucesso!";
        else:
            $mensagem = "Erro Fatal!";
        endif;
    else:
        $mensagem = "Formato Inválido de Imagem";
    endif;

    echo $mensagem;

endif;

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
                <div class="logBlock"><div class="textuser">Cadastro</div></div>
            </a><div class="linha"></div>

                <form action="cadastrarCliente.php" method="get" name="formulario" accept-charset="utf-8"> 
                    <img src="IMG/email.png" class="icon01"> Email<br>
                <input type="email" name="email" class=""><br>
                    <img src="IMG/nome.png" class="icon3"> Nome<br>
                <input type="text" name="nome" class=""><br>
                    <img src="IMG/matric.png" class="icon3"> Matrícula ou SIAPE<br>
                <input type="text" name="id" class=""><br>   
                    <img src="IMG/lock.png" class="icon3"> Senha<br>
                <input type="password" name="senha" class=""><br>
                    <!-- <img src="IMG/lock.png" class="icon3"> Repetir Senha<br>
                <input type="password" name="" class=""><br> -->
                

                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"  enctype="multipart/form-data">
                <input type="hidden" name="MAX_FILE_SIZE" value="200000">
                Imagem Perfil:<input type="file" name="imagem" placeholder="Imagem">
                <input type="submit" name="enviar" class="botaoenviar" value="Cadastrar">
                </form>
            </form>
        </div>
    </div>
<body>
        <div class="infos">
            <div class="title">BEM VINDO</div>


                <form action="logar.php" method="post" name="formulario" accept-charset="utf-8"> 
                <img src="IMG/email.png" class="icon"> Email<br>
                <input type="text" name="email" class=""><br> 
                <img src="IMG/lock.png" class="icon2"> Senha<br>
                <input type="password" name="senha" class=""><br>
                <input type="submit" class="botent" name="enviar" value="Entrar"></button> 
                <a href="#" class="esqsenha">&nbsp Esqueci a senha</a>
                </form>


                 <div class="cards">

                    <div onclick="abrir()" class="card" id="card1">
                            <div class="card-top"></div>
                     <div class="card-botton">
                            <p>Cadastre-se</p>
                            <div class="img"><!-- <img src="IMG/confirm.png"> --></div>
                        </div>
                    </div>
                </div>

</body>




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


if (window.innerWidth > 950) {
    alert("Para visualizar, utilize um dispositivo mobile, ou abra em modo desenvolvedor (F12) e logo após ative o modo mobile Ctrl+Shift+M .");
}

</script>