<?php
    session_start();
    require_once("conecta.php");
    require_once("cabecalho.php");
    $comando="SELECT * FROM produtos";
    $enviar=mysqli_query($conn, $comando);
    
    if (mysqli_num_rows($enviar)>0) {
        $resultado=mysqli_fetch_all($enviar);
     
        if(!empty($_SESSION['mensagem'])) {
        echo $_SESSION['mensagem'];
        unset($_SESSION['mensagem']);
    }
?>

<?php if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') { ?>
    <p class="alert-success">Produto removido com sucesso!</p>
<?php } ?>

    <table>
        <tr>
            <th>Nome do Produto</th>
            <th>Valor</th>
            <th>Imagem ilustrativa</th>
            <th>Quantidade disponível</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>

        <?php
    foreach ($resultado as $produto) :
    
?>
        <tr>
            <td><?php echo $produto['2'];?></td>
            <td><?php echo $produto['1'];?></td>
            <td><img src="ImgProdutos/<?php echo $produto['3'];?>" class="imgprodutos"></td>
            <td><?php echo $produto['5'];?></td>
            <td><a href="#/?produto=<?php echo $produto['0'];?>" onclick="iniciaModal('modal-form',<?php echo $produto['0'];?>)" class="abremodal"><button><img src="../IMG/edit.png" class="edit"></button></td>
            <td><form action="excluiProduto.php" method="get">
                <input type="hidden" name="id" value="<?php echo $produto['0']?>" />
                <button><img src="../IMG/excl.png" class="edit" onclick="return confirma('<?php echo $produto['2']?>')"></button></form></td>
        </tr>


<?php
    endforeach;
?>

    </table>

    <div class="CssCadastrar">
    <button href="index.php">Cadastrar Produto</button>   
    </div>
            
<?php
}
?>

    <div id="modal-form" class="modal-container">
        <div class="modal">
            <button class="fechar">x</button>
            <h3 class="subtitulo">Alterar Produto</h3>
            <form action="alterarProduto.php" method="get">
                Nome do Produto:
                <br><input type="text" name="nomeDoProduto" class="input" id='nomeDoProduto'><br><br>
                Descrição do Produto:
                <input type="text" class="input"  name="descricao" id="descricao"><br><br>
                Valor do Produto:
                <input type="text" class="input3"  name="valor" id="valor">
                Quantidade:
                <input type="number" class="input3"  name="quantidade" id="quantidade"><br><br>
                Foto:
                <form action="executaUpload.php" method="POST"  enctype="multipart/form-data">
                <input type="hidden" name="MAX_FILE_SIZE" value="200000">
                <input type="file" name="imagem" value="<?php echo $produto['3']?>">
               <br><br>
                <input type="hidden" name="cd_produto" id="cd_produto">
                <input type="submit" class="button" name="cadastrar" value="Concluir">
            </form>
        </form>
        </div>
    </div>

            

<script>
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
function requisitar(id){
var requisicaoAjax = inicializaAjax();
if (requisicaoAjax) {
 requisicaoAjax.onreadystatechange = function() {
 if (requisicaoAjax.readyState == 4) {
 if (requisicaoAjax.status==200) {
 
 if (requisicaoAjax.responseText) {
    dadosJSON = JSON.parse(requisicaoAjax.responseText);
    document.getElementById('nomeDoProduto').value=dadosJSON.nomeDoProduto;
    document.getElementById('descricao').value=dadosJSON.descricao;
    document.getElementById('valor').value=dadosJSON.valor;
    document.getElementById('cd_produto').value=dadosJSON.cd_produto;    
    document.getElementById('quantidade').value=dadosJSON.quantidade;
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

</script>

<a href="index.php">Voltar</a>