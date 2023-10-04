<?php
include("phpfunctions.php");
$link = conAon();
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


$iniciales ="DEMO-";    


$fechaHoy = date('Y-m-d')."%";

$rowsbyuser = "SELECT * FROM id21150537_laravel.registrosaon WHERE usuarioQueRegistra = '$us'  AND fechaRegistro LIKE '$fechaHoy' ";
		$rbu=mysqli_query($link,$rowsbyuser); 
        $numero = mysqli_num_rows($rbu) +1;
        $fechaID = date('YYYY')."%";

if($numero <10){
    
    $numero = "0".$numero;
}





$folio = $iniciales.$fechaHoy[8].$fechaHoy[9].$fechaHoy[5].$fechaHoy[6].$fechaID[2].$fechaID[3].$hora[0].$hora[1].$numero;
$folio1 = str_replace("-", "", $folio);  
$folioAccidente = str_replace("%", "", $folio1);
$folioAON = $folioAccidente."-A";




$sql = "INSERT INTO id21150537_laravel.registrosaon(nombreReportante, nombreEmpresa, fechaRegistro, 
tipificacion, tipificacionS, t2, t3, t4, notas, codigoReferencia,
 pre1, pre2, pre3, usuarioQueRegistra, folio) 
VALUES ('$nombre', '$emp', '$fecha', '$tip', '$tis', '$ot', '$ot2','$ot3', 
'$notas', '$cdr', '$p1', '$p2', '$p3','$us','$folioAON')";

    echo $sql;                              

mysqli_query($link,$sql) or die (mysqli_error($link));
   
?>
<script type="text/javascript">
alert("INSERCION EXITOSA");
        window.location= "../forms/registrosAdmin.php"; 
        </script>

  
