<!DOCTYPE html>
<html>

<?php
session_start();
require_once("conecta.php");
require_once("cabecalho.php");



if(!isset($_SESSION['nome'])){
   
    header("location:../index.php");
}else{
    $nome=$_SESSION['nome'];

?>

<div class="menuzao">
        <div class="articles">
            <div class="mensagem">
                    Bem vindo(a) <?=$nome?>, o que deseja?<br>
              
            </div>

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
    <p><a href="#">Vendas Pendentes</a></p>
                </div>
            </article>

            <!--ARTICLE 3-->
            <article id="article3">
                <div class="none"></div>
                <div class="titleArticle">
        <p><a href="listaDeProdutos.php">Produtos Cadastrados</a></p>
                </div>
            </article>

            <!--ARTICLE 4-->
            <article id="article4">
                <div class="none"></div>
                <div class="titleArticle">
        <p><a href="historico.php">Controle de Vendas</a></p>
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
                Categoria:
                <select name="categoria">
                    <option value="cafe">Cafés</option>
                    <option value="bebidas">Bebidas</option>
                    <option value="salgados">Salgados</option>
                    <option value="bigSalgados">Big Salgados</option>
                </select>
               <!--  <input type="text" class="input"  name="quantidade" placeholder="Quantidade inicial disponível"><br><br> -->
                <form action="executaUpload.php" method="POST"  enctype="multipart/form-data">
                <input type="hidden" name="MAX_FILE_SIZE" value="200000">
                Foto:<input type="file" name="imagem" placeholder="Imagem">

                <br><br>
                <input type="submit" class="button" name="cadastrar" value="Cadastrar">
            </form>
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
<?php
 }
 ?>
</body>
</html>