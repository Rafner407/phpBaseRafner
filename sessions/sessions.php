<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
$_SESSION["cor"] = "verde";
$_SESSION["animal"] = "gato";
$_SESSION["comida"] = "batata";
$_SESSION["nome"] = "Rafner";                                 
echo "Session variables are set.";
?>

</body>
</html>