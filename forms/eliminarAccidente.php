<?php
 include("../functions/phpfunctions.php");
 $link= conAon();

$foAcc= $_REQUEST['foAcc'];




$sql = "DELETE FROM id21150537_laravel.registrosaon WHERE folio = '$foAcc'";
mysqli_query($link,$sql) or die (mysqli_error($link));



    mysqli_close($link);


 ?>
<script>

alert("REGISTRO ELIMINADO");
 window.location= "../forms/registrosAdmin.php" ;     
</script>