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
    <table>
        <tr>
            <th>Nome do Produto</th>
            <th>Valor</th>
            <th>Imagem ilustrativa</th>
        </tr>

        <?php
    foreach ($resultado as $produto) :
    
?>
        <tr>
            <td><?php echo $produto['2'];?></td>
            <td><?php echo $produto['1'];?></td>
            <td><img src="ImgProdutos/<?php echo $produto['3'];?>" class="imgprodutos"></td>
            <td><a href="#/?produto=<?php echo $produto['0'];?>" onclick="iniciaModal('modal-form',<?php echo $produto['0'];?>)" class="abremodal"><button>Alterar Produto</button></td>
        </tr>

<?php
    endforeach;
?>

    </table>

<?php
}
?>

    <div id="modal-form" class="modal-container">
        <div class="modal">
            <button class="fechar">x</button>
            <h3 class="subtitulo">Alterar Produto</h3>
            <form action="alterarProduto.php" method="get">
                Nome do Produto:
                <br><input type="text" name="nomeDoProduto" class="input" value="<?php echo $produto['2']?>"><br><br>
                Descrição do Produto:
                <input type="text" class="input"  name="descricao" value="<?php echo $produto['4']?>"><br><br>
                Valor do Produto:
                <input type="text" class="input"  name="valor" value="<?php echo $produto['1']?>"><br><br>
               
                Foto:
                <form action="executaUpload.php" method="POST"  enctype="multipart/form-data">
                <input type="hidden" name="MAX_FILE_SIZE" value="200000">
                <input type="file" name="imagem" value="<?php echo $produto['3']?>">
               <br><br>
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
                    alert('ols');
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
 //mostra_cidades = document.getElementById("mostra_cidades");
 if (requisicaoAjax.responseText) {
    dadosJSON = JSON.parse(requisicaoAjax.responseText);
    
 } else {
 cidades.innerHTML = "Selecione o estado";
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




</script>

<a href="index.php">Voltar</a>