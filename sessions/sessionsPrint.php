<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
echo "Cor favorita é " . $_SESSION["cor"] . ".<br>";
echo "Animal favorito é " . $_SESSION["animal"] . ".<br>";
echo "Comida favorita é " . $_SESSION["comida"] . ".<br>";
echo "Nome é " . $_SESSION["nome"] . ".";
?>

</body>
</html>