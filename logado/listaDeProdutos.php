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
            <td><a href="#/?cliente=<?php echo $produto['0'];?>" class="abremodal"><button>Alterar Produto</button></td>
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
                <br><input type="text" name="nomeDoProduto" class="input" placeholder="Nome do Produto"><br><br>
                <input type="text" class="input"  name="descricao" placeholder="Descrição do Produto"><br><br>
                <input type="text" class="input"  name="valor" placeholder="Valor do Produto"><br><br>

                <form action="executaUpload.php" method="POST"  enctype="multipart/form-data">
                <input type="hidden" name="MAX_FILE_SIZE" value="200000">
                Foto:<input type="file" name="imagem" placeholder="Imagem">

                <!-- <input type="file" name="imagem"  name="imagem" placeholder="Imagem" class="enviar"> --><br><br>
                <input type="submit" class="button" name="cadastrar" value="Concluir">
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
        

        const mod = document.querySelector('.abremodal');
        mod.addEventListener('click', () => iniciaModal('modal-form'));

</script>

<a href="index.php">Voltar</a>
