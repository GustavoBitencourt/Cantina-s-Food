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
        <p><a href="#" onclick="alert('Acesso negado, faça o login');">Controle de Vendas</a></p>
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

 
</body>
</html>