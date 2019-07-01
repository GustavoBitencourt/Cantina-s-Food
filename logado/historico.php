<?php
    session_start();
    require_once("conecta.php");
    require_once("cabecalho.php");
    $comando="SELECT * FROM pedidos";
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
            <th>Valor total</th>
            <th>Data da venda</th>       
        </tr>
        <br>
        <div class="titulo">Controle de vendas</div>
        <?php
    foreach ($resultado as $produto) :
    
?>
        <tr>
            <td class="np"><?php echo $produto['1'];?></td>
            <td class="vl"><?php echo $produto['2'];?></td>

       
        </tr>


<?php
    endforeach;
?>

    </table>

    </div>
            
<?php
}
?>

            


<a href="index.php">Voltar</a>