<!DOCTYPE html>
<html>

<?php
require_once("conecta.php");

if(!empty($_SESSION['mensagem'])) {
        echo $_SESSION['mensagem'];
        unset($_SESSION['mensagem']);
    }

?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CantIF</title>
    <link rel="shortcut icon" href="../IMG/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" media="screen" href="../cantina.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
	<!-- 01 HEADER -->
    <header>

            <div class="title">Projeto CantIF</div><img src="../IMG/logo.png" class="titleimg">
        
	<!-- NAV -->
	<nav>
        <!-- <li><a href="#">Opção 1</a></li>
        <li><a href="#">Opção 2</a></li>
        <li><a href="#">Opção 3</a></li>
        <li><a href="#">Opção 4</a></li>
        <li><a href="#">Opção 5</a></li> -->
        <li><a href="login.php">Login</a></li>
    </nav>
</header>

<div class="menuzao">
        <div class="articles">
            
            <div class="titulo">
            Controle de Produtos
            </div>
            <!--ARTICLE 1-->
            <article id="article1">
                <div class="none"></div>
                <div class="titleArticle">
    <p><a href="#">Cadastrar Produto</a></p>
                </div>
            </article>

             <!--ARTICLE 2-->
            <article id="article2">
                <div class="none"></div>
                <div class="titleArticle2">
    <p><a href="#">Alterar poduto</a></p>
                </div>
            </article>

            <!--ARTICLE 3-->
            <article id="article3">
                <div class="none"></div>
                <div class="titleArticle">
        <p><a href="#">Produtos Cadastrados</a></p>
                </div>
            </article>

            <!--ARTICLE 4-->
            <article id="article4">
                <div class="none"></div>
                <div class="titleArticle">
        <p><a href="#">Controle de Vendas</a></p>
                </div>
            </article>
        
        </div>
    </div>

    <div id="modal-form" class="modal-container">
        <div class="modal">
            <button class="fechar">x</button>
            <h3 class="subtitulo">Cadastrar Produto</h3>
            <form action="cadastroProduto.php" method="get">
                <br><input type="text" name="nomeDoProduto" class="input" placeholder="Nome do Produto"><br><br>
                <input type="text" class="input"  name="descricao" placeholder="Descrição do Produto"><br><br>
                <input type="text" class="input"  name="valor" placeholder="Valor do Produto"><br><br>
                <input type="file" name="imagem"  name="imagem" placeholder="Imagem" class="enviar"><br><br>
                <input type="submit" class="button" name="cadastrar" value="Cadastrar">
            </form>
        </div>
    </div>

<script>
    function iniciaModal(modalID) {
               const modal = document.getElementById(modalID);
                if(modal) {
                    modal.classList.add('mostrar');
                    modal.addEventListener('click', (e) => {
                        if(e.target.id == modalID || e.target.className == 'fechar') {
                            modal.classList.remove('mostrar');
                        }
                    });
                }
            }
        

        const mod = document.querySelector('.titleArticle');
        mod.addEventListener('click', () => iniciaModal('modal-form'));

</script>
 
</body>
</html>