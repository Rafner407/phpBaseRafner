<?php
include 'connect.php';
$id = $_GET['id'];
$sq="delete from produto where idProduto=35";
mysqli_query($con,$sq);
header('location:viewall_product.php');
?>