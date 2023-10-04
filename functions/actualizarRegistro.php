<?php
include("phpfunctions.php");
$link = conAon();


$folio= $_POST['folio'];
$us= $_POST['nombreUsuario'];
$nombre= $_POST['nr'];
$emp= $_POST['emp'];
$fecha =$_POST['fecha'];
$notas =$_POST['notas'];
$cdr =$_POST['cdr'];


$tip = $_POST['tip'];
$tis = $_POST['tis'];
$ot = $_POST['ot'];
$ot2 = $_POST['ot2'];
$ot3 = $_POST['ot3'];

$p1 = $_POST['tdll'];

$p2 = $_POST['clar'];

$p3 = $_POST['aten'];

$sql ="UPDATE aonbd.registrosaon SET nombreReportante ='$nombre', nombreEmpresa = '$emp', 
fechaRegistro ='$fecha', tipificacion ='$tip', tipificacionS ='$tis', t2 = '$ot', 
t3 ='$ot2', t4 ='$ot3', notas='$notas', codigoReferencia = '$cdr', pre1='$p1',
pre2 ='$p2', pre3='$p3' WHERE folio= '$folio'";

    echo $sql;                              

mysqli_query($link,$sql) or die (mysqli_error($link));
   
?>
<script type="text/javascript">
alert("ACTUALIZACION EXITOSA");
        window.location= "../forms/registrosAdmin.php"; 
        </script>

  
