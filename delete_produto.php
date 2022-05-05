<?php
include 'connect.php';
$sq="delete from produto where idProduto=18";
mysqli_query($con,$sq);
header('location:viewall_produto.php');
?>