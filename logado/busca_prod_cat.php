<link rel="stylesheet" type="text/css" media="screen" href="form.css">

<?php


include_once ('conecta.php');

$categoria=$_GET['categoria'];

$comando="SELECT * FROM produtos WHERE categoria='$categoria'";

$enviar=mysqli_query($conn, $comando);
 
    
 $resultado=mysqli_fetch_all($enviar);

?>
   <table>
        <tr>
            <th>Nome do Produto</th>
            <th>Valor</th>
            <th>Imagem</th>
            <th>Selecionar</th>
            
        </tr>

        <?php
    foreach ($resultado as $produto) :
    
?>
        <tr>
            <td class="nome"><?php echo $produto['2'];?></td>
            <td class="preco">R$ <?php echo $produto['1'];?></td>
            

            <td><img src="ImgProdutos/<?php echo $produto['3'];?>" class="imgprodutos"></td>
            <td><a href="#/?produto=<?php echo $produto['0'];?>"  onclick="adiciona_outro(<?php echo $produto['0'];?>,'<?php echo $produto['2'];?>',<?php echo $produto['1'];?>)"><button class="add">Adicionar</button></td>
            
        </tr>


<?php
    endforeach;
?>

    </table>

 