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
            <th>Categoria</th>
            <th>Imagem ilustrativa</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>

        <?php
    foreach ($resultado as $produto) :
    
?>
        <tr>
            <td><?php echo $produto['2'];?></td>
            <td><?php echo $produto['1'];?></td>
            <td><?php echo $produto['6'];?></td>

            <td><img src="ImgProdutos/<?php echo $produto['3'];?>" class="imgprodutos"></td>
            <td><a href="#/?produto=<?php echo $produto['0'];?>"  onclick="adiciona_outro(<?php echo $produto['0'];?>,'<?php echo $produto['2'];?>',<?php echo $produto['1'];?>)"><button><img src="../IMG/edit.png" class="edit" ></button></td>
            <td><form action="excluiProduto.php" method="get">
                <input type="hidden" name="id" value="<?php echo $produto['0']?>" />
                <button><img src="../IMG/excl.png" class="edit" onclick="return confirma('<?php echo $produto['2']?>')"></button></form></td>
        </tr>


<?php
    endforeach;
?>

    </table>

 