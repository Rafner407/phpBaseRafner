<?php
include 'connect.php';
?>
<a href="reg_produto.php"> Editar </a>
<table border='1'>
    <tr>
        <th>
            Id
        </th>
        <th>
            Produto
        </th>
        <th>
            Preço
        </th>
        <th>
            Categoria
        </th>
        <th>
            Excluir
        </th>
        <th>
            Editar
        </th>
    </tr>

<?php
$sq="select * from produto";
$qu=mysqli_query($con,$sq);
while($f=  mysqli_fetch_assoc($qu)){
    ?>
    <tr>
        <td>
            <?php echo $f['idProduto']?>
        </td>
        <td>
            <?php echo $f['nomeProduto']?>
        </td>
        <td>
            <?php echo $f['precoProduto']?>
        </td>
        <td>
            <?php echo $f['fk_idCategoria']?>
        </td>
        <td>
            <a href="delete_produto.php"> remover </a>
        </td>
        <td>
            <a href="edit_produto.php?idProduto = <?php echo $f['idProduto']?>"> editar </a>
        </td>
    </tr>
    <?php
}
?>