    document.querySelector('#remover').style.visibility = 'hidden'

    function iniciaModal(modalID,id) {
        alert(id)
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
        
       const mod = document.querySelector('.abremodal');
       mod.addEventListener('click', () => iniciaModal('modal-form'));

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
function requisitar(id){
var requisicaoAjax = inicializaAjax();
if (requisicaoAjax) {
 requisicaoAjax.onreadystatechange = function() {
 if (requisicaoAjax.readyState == 4) {
 if (requisicaoAjax.status==200) {
 
 if (requisicaoAjax.responseText) {
    dados = requisicaoAjax.responseText;
    document.getElementById('modal-form').innerHTML = dados

    // document.getElementById('nomeDoProduto').value=dadosJSON.nomeDoProduto;
    // document.getElementById('descricao').value=dadosJSON.descricao;
    // document.getElementById('valor').value=dadosJSON.valor;
    // document.getElementById('cd_produto').value=dadosJSON.cd_produto;    
 } else {
alert("Problema na conexão do banco");
 }
 } else {
 alert("Problema na Comunicação");
 }
 }
 };
}
requisicaoAjax.open("GET", "busca_prod_cat.php?id="+id);
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