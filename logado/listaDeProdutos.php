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
            <td><?php echo $produto['3'];?></td>
            <td><a href="alteraProduto.php/?cliente=<?php echo $produto['0'];?>"><button>Alterar Produto</button></td>
        </tr>

<?php
    endforeach;
?>

    </table>

<?php
}
?>
<a href="index.php">Voltar</a>