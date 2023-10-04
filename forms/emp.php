<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html">
<meta name="author" content="Jesus Bautista">
<title> AON </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="all" href="css/stylesMenu.css">
<script type="text/javascript" src="js/security.js"></script>
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
	<div class="container-login100">
    <?php datosCabecera(); ?>
    <div id="div1"> 
    <table border="0" >
             <tr>
             <thead>
             <td colspan="3"><b>SELECCIONE LA LIGA ADECUADA DL</b></td>
             </thead>
        </tr>
    <tr>
    <td><a href="https://www.segurosatlas.com.mx/" target="_new"><img src='../images/atlas.PNG' height='80'  width='150' > </a></td>
    <td><a href="https://www.gnp.com.mx/" target="_new"><img src='../images/gnp.PNG' height='50'  width='110' ></a></td>
    <td><a href="https://www.metlife.com.mx/" target="_new"><img src='../images/metlife.PNG' height='50'  width='200' > </a></td>
    </tr>
    <tr>  
    <td><a href="https://www.newyorklife.com/" target="_new"><img src='../images/nyl.jpg' height='100'  width='100' ></a></td>
    <td><a href="https://www.zurich.com.mx/es-mx" target="_new"><img src='../images/zurich.PNG' height='50'  width='180' ></a> </td>
    <td><a href="https://axa.mx/" target="_new"><img src='../images/axa.png' height='100'  width='100' ></a></td>
    </tr>
    </table>

    <table border="1" id="adminTable" name="adminTable">
    <tr>
    <thead>
    <td>EMPRESA</td>
    </thead>
    </tr>
    <?php
$conexion = con();
$sql="SELECT * FROM aonbd.empresas";
$result=mysqli_query($conexion,$sql);
 while($mostrar=mysqli_fetch_array($result)){
    ?>
	<tr>
    <td><?php echo $mostrar['empresa']; ?>
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