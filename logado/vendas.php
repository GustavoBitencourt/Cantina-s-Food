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
    <p><a href="../script.js/?produto=<?php echo $produto['0'];?>" onclick="modalVenda('modal-form',<?php echo $produto['0'];?>)" class="abremodal">Cafés</a></p>
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
    <div  class="barra-vendas">
     
        <div id='container'>
        <div id="produto" >
            <input type="text" name="cd_produto[]" placeholder="Código" id="0" onchange="requisitar(this.value,this.id)" class="codigo">
            <input type="text" readonly="true" name="nomeDoProduto" id="nomeDoProduto0" placeholder="Nome do Produto Clicado" class="nomeDoProduto">
            <input type="text" readonly="true" name="valor" id="valor0" placeholder="Valor do Produto" class="valor">
            
            <img src="../IMG/menos.png" type="button" name="adicionar" id="remover" value="-" onclick="remove(event)" class="remover">
         
        </div>
        <img src="../IMG/add.png" type="submit" name="mais" name="adicionar" id="adicionar"  onclick="adiciona()" class="adicionar">

        <td><a href="vendas.php" class="cancelar">Cancelar Pedido</a></td>
            
             <td><form action="finalizar.php" method="get">
                <input  type="text" name="valor_total" id="valor_total" class="valorTotal" value="0">
                <input type="submit" class="finalizar" name="finalizar" value="Finalizar Pedido">              
               
               
                 </form></td></div>
         
           
        </form>

    </div>


<script>
    document.querySelector('#remover').style.visibility = 'hidden'
    function iniciaModal(modalID,id) {
        requisitar(id);
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
        
       // const mod = document.querySelector('.abremodal');
       // mod.addEventListener('click', () => iniciaModal('modal-form'));
function inicializaAjax() {
 var ajax
 if (window.XMLHttpRequest) {
 ajax= new XMLHttpRequest();
 } else if (window.ActiveXObject) {
 ajax=new ActiveXObject("Msxml2.XMLHTTP");
 if (!ajax) {
 ajax=new ActiveXObject("Microsoft.XMLHTTP");
 }
 } else {
 alert ("Seu navegador não suporta esta aplicação");
 }
 return ajax;
}
function requisitar(id,num){
var requisicaoAjax = inicializaAjax();
if (requisicaoAjax) {
 requisicaoAjax.onreadystatechange = function() {
 if (requisicaoAjax.readyState == 4) {
 if (requisicaoAjax.status==200) {
 
 if (requisicaoAjax.responseText) {
    dadosJSON = JSON.parse(requisicaoAjax.responseText);
    document.getElementById('nomeDoProduto'+num).value=dadosJSON.nomeDoProduto;  
    document.getElementById('valor'+num).value=dadosJSON.valor;
    document.getElementById('valor_total').value=parseInt(document.getElementById('valor_total').value)+parseInt(document.getElementById('valor'+num).value);
    // document.getElementById('cd_produto').value=dadosJSON.cd_produto;    
    // document.getElementById('quantidade').value=dadosJSON.quantidade;
 } else {
alert("Problema na conexão do banco");
 }
 } else {
 alert("Problema na Comunicação");
 }
 }
 };
}
requisicaoAjax.open("GET", "busca_produto.php?id="+id);
requisicaoAjax.send(null);
}
function confirma(id){
    var resp=confirm('Deseja excluir o produto '+id+'?');
    if(resp==false)
    {
        return false;
    }
    else
    {
        return true;
    }
}
function adiciona()
{
const clone = document.querySelector('#produto').cloneNode(true);
clone.children[0].setAttribute('id', document.querySelector('#container').children.length)
clone.children[1].setAttribute('id', 'nomeDoProduto'+document.querySelector('#container').children.length)
clone.children[2].setAttribute('id', 'valor'+document.querySelector('#container').children.length)
clone.children[3].setAttribute('id','remover'+document.querySelector('#container').children.length)
clone.setAttribute('id', 'produto' + document.querySelector('#container').children.length)
document.querySelector('#container').appendChild(clone);
document.getElementById('0').value="";
document.getElementById('nomeDoProduto0').value="";
document.getElementById('valor0').value="";
clone.children[3].style.visibility = 'visible'
    
}
function remove(event) {
    document.getElementById('valor_total').value = document.getElementById('valor_total').value - event.target.parentNode.children[2].value
   
    event.target.parentNode.style.display = "none"
}
</script>

</body>
</html>