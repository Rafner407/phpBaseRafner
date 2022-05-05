<?php
include 'connect.php';
include 'checkLogin.php';
if(isset($_POST['sub'])){
    $t=$_POST['text'];
    $nomeProduto = $_POST['text'];
    $precoProduto = $_POST['preco'];
    $fk_idCategoria = $_POST['categoria'];

    //$i="insert into reg(name,username,password,produto,image,gender)value('$t','$u','$p','$c','$img','$g')";
    $i = "insert into produto (nomeProduto, precoProduto, fk_idCategoria) values ('$nomeProduto', '$precoProduto', '$fk_idCategoria')";
    mysqli_query($con, $i);
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        Nome
                        <input type="text" name="text">
                    </td>
                </tr>
                <tr>
                    <td>
                        Preço
                        <input type="text" name="preco">
                    </td>
                </tr>
                <td>
                        Categoria
                        <select name="categoria">
                        <?php
            echo "<option value=$>$nomeCategoria</option>";

            $sqlCategoria = mysqli_query($con, "select * from categoria");

            while ($item = mysqli_fetch_assoc($sqlCategoria)) {
                $nomeItem = utf8_encode($item['nomeCategoria']);
                $idCategoria = $item['idCategoria'];
                echo "
                <option value=$idCategoria>$nomeItem</option>
            ";
            }
            ?>
                    </td>
                    <td>
                        <input type="submit" value="submit" name="sub">
                    </td>
                    <td>
                        <button><a href="login.php">Login</a></button>    
                    </td>    
                </tr>
            </table>
    </body>
</html>
