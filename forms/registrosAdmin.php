<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html">
<meta name="author" content="Jesus Bautista">
<title> AON REGISTROS</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="all" href="css/stylesMenu.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="js/switchery.min.js"></script>
<script type="text/javascript" src="js/jquery-3.5.1.js"></script>
<script type="text/javascript" src="js/sistema.js"></script>
</head>
<body>
<div class="header">
<center>         
<?php  
include("../functions/phpfunctions.php");
menuAON_BS();
?>
</center> 
</div>
<div id="wrapper">
<div class="limiter">
<div class="container-login100"  style="background: white;">
<?php //datosCabecera(); ?>   
<div id="div1">
<table border="1" id="adminTable" name="adminTable">
       <tr>
       <thead>
       <td>ID</td>
       <td></td>
       <td>NOMBRE REPORTANTE</td>
       <td>FECHA</td>
       <td>EMPRESA</td>
       <td>Tipificacion</td>
       <td>Tipificacion Secundaria</td>
       <td>OT</td>
       <td>OT 2</td>
       <td>OT 3</td>
       <td>NOTAS</td>
       <td>CODIGO DE REFERENCIA</td>
       <td>PREGUNTA 1</td>
       <td>PREGUNTA 2</td>
       <td>PREGUNTA 3</td>
       <td>FOLIO</td>
       <td></td>
       </thead>
   </tr>
    <?php
    $conexion = conAon();
		$sql="SELECT * FROM id21150537_laravel.registrosaon ORDER BY fechaRegistro DESC";
		$result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_array($result)){
  ?>
	<tr>
            <td><b><?php echo $mostrar['id'] ?></b></td> 
            <td><a href="eliminarAccidente.php?foAcc=<?php echo $mostrar['folio']; ?>"  
            onclick="return confirm('Este proceso ELIMINA el registro del accidente, asi como directorios y datos asociados como procedimientos, lesiones y diagnosticos. ¿Desea continuar? ')" ><img src='../images/delete.png' height='20'  width='20' ></a></td>
            <td style="background-color: #7a0404; color: #fff;"><?php echo $mostrar['nombreReportante'] ?></td>
            <td style="font-size: 9px;"><?php echo $mostrar['nombreEmpresa'] ?></td>
            <td><?php echo $mostrar['fechaRegistro']; ?></td>
            <td><?php echo $mostrar['tipificacion'] ?></td>
            <td><?php echo $mostrar['tipificacionS'] ?></td>
            <td><?php echo $mostrar['t2'] ?></td>
            <td><?php echo $mostrar['t3'] ?></td>
            <td><?php echo $mostrar['t4'] ?></td>
            <td><?php echo $mostrar['notas'] ?></td>
            <td><?php echo $mostrar['codigoReferencia'] ?></td>
            <td><?php echo $mostrar['pre1'] ?></td>
            <td><?php echo $mostrar['pre2'] ?></td>
            <td><?php echo $mostrar['pre3'] ?></td>
            <td><?php echo $mostrar['folio'] ?></td>
            <td><a href="<?php echo 'editReg.php?id='.$mostrar['folio']; ?>">
            <img title="VER DETALLES" src="../images/details.png" height="15px" width="15px">
            </a>
            </td></td>
            <?php
}
?> 	
</tr>
</table>
</div> 
          </div>
          </div>
    </div>
</body> 
</html>
<?php mysqli_close($conexion); ?>