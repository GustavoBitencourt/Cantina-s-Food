<!DOCTYPE html>
<html>

<?php

require_once("conecta.php");
require_once("cabecalho.php");

if(!empty($_SESSION['mensagem'])) {
        echo $_SESSION['mensagem'];
        unset($_SESSION['mensagem']);
    }

?>

<div class="menuzao">
        <div class="articles">
            

            <?php
                if(isset($_GET["logout"]) && $_GET["logout"]==true) { ?>
                    <p class="msg-sucesso">Deslogado com sucesso!</a>
            <?php } ?>

            <div class="titulo">
            Controle de Produtos
            </div>
            <!--ARTICLE 1-->
            <article id="article1">
                <div class="none"></div>
                <div class="titleArticle">
    <p><a href="#" onclick="alert('Acesso negado, faça o login');">Cadastrar Produto</a></p>
                </div>
            </article>

             <!--ARTICLE 2-->
            <article id="article2">
                <div class="none"></div>
                <div class="titleArticle2">
    <p><a href="#" onclick="alert('Acesso negado, faça o login');">Alterar poduto</a></p>
                </div>
            </article>

            <!--ARTICLE 3-->
            <article id="article3">
                <div class="none"></div>
                <div class="titleArticle">
        <p><a href="#" onclick="alert('Acesso negado, faça o login');">Produtos Cadastrados</a></p>
                </div>
            </article>

            <!--ARTICLE 4-->
            <article id="article4">
                <div class="none"></div>
                <div class="titleArticle">
        <p><a href="#" onclick="mensagem()">Controle de Vendas</a></p>
                </div>
            </article>
        
        </div>
    </div>
<script>
    function mensagem(){
        alertify.alert("Acesso Negado, Faça o Login").set('label', 'aceitar');
    }
</script>
 
</body>
</html>