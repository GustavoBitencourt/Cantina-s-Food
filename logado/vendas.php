<!DOCTYPE html>
<html>

<?php
session_start();
require_once("conecta.php");
require_once("cabecalho.php");
?>

<body>

<div class="menu-itens">
	<div class="articles" >
			<!--ARTICLE 1-->
			<article id="iten1">
                <div class="none"></div>
                <div class="titleArticle">
    <p><a href="#">Cafés</a></p>
                </div>
            </article>

             <!--ARTICLE 2-->
            <article id="iten2">
                <div class="none"></div>
                <div class="titleArticle">
    <p><a href="#">Big Salgados</a></p>
                </div>
            </article>

            <!--ARTICLE 3-->
            <article id="iten3">
                <div class="none"></div>
                <div class="titleArticle">
        <p><a href="#">Salgados</a></p>
                </div>
            </article>

            <!--ARTICLE 4-->
            <article id="iten4">
                <div class="none"></div>
                <div class="titleArticle">
        <p><a href="#">Bebidas</a></p>
                </div>
            </article>

            <!--ARTICLE 5-->
            <article id="iten5">
                <div class="none"></div>
                <div class="titleArticle">
        <p><a href="#">Bebidas</a></p>
                </div>
            </article>
</div>
</div>

<div class="menu-itens2">
	<div class="articles">
            <!--ARTICLE 6-->
            <article id="iten6">
                <div class="none"></div>
                <div class="titleArticle">
        <p><a href="#">Buffet</a></p>
                </div>
            </article>

           <!--ARTICLE 7-->
            <article id="iten7">
                <div class="none"></div>
                <div class="titleArticle">
        <p><a href="#">Doces</a></p>
                </div>
            </article>

            <!--ARTICLE 8-->
            <article id="iten8">
                <div class="none"></div>
                <div class="titleArticle">
        <p><a href="#">Balas</a></p>
                </div>
            </article>

            <!--ARTICLE 9-->
            <article id="iten9">
                <div class="none"></div>
                <div class="titleArticle">
        <p><a href="#">Outros</a></p>
                </div>
            </article>

             <!--ARTICLE 10-->
            <article id="iten10">
                <div class="none"></div>
                <div class="titleArticle">
        <p><a href="#">Outros</a></p>
                </div>
            </article>
        
        </div>
    </div>

<!-- CONCLUSÃO VENDAS -->
	<div class="barra-vendas">
		<form>
			<input type="text" name="codigo" placeholder="Código" class="codigo">
			<input type="text" name="Descrição" placeholder="Descrição do Produto Clicado">
			<input type="text" name="Valor" placeholder="Valor do Produto">
            <br><br>
            <td><form action=# method="get">
                <input type="hidden" name="id" value="<?php echo $produto['0']?>" />
                <button class="btn btn-danger">Cancelar Pedido</button></form></td>
            <td><form action=# method="get">
                <input type="hidden" name="id" value="<?php echo $produto['0']?>" />
                <button class="btn btn-danger">Voltar</button></form></td>
            <td><form action=# method="get">
                <input type="hidden" name="id" value="<?php echo $produto['0']?>" />
                <button class="btn btn-danger">Finalizar pedido</button></form></td>
                <input type="text" name="Valor total" placeholder="Valor total">
		</form>

	</div>

</body>
</html>