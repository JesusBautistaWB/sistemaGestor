<?php
include("../lib/conexionBD.php");

$username = $_REQUEST['username'];
$password = $_REQUEST['pass'];


$cnx= new PDO('mysql:host=localHost;dbname=vasegurobd', 'root', 'Q1w2e3r4.', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$res= $cnx->query("SELECT nombre, perfilActivo FROM vasegurobd.tb_usuarios WHERE login = '$username' AND clave = '$password' ");


$datos=array();
$nivel="";

foreach ($res as $row){
 ?>
<center>
    <img src="../images/loading.gif" width="600" hight="600">
</center>
 <?php
  $datos[]=$row['nombre'];
   
  
    echo "<center><label style='color: darkblue; font-size: 22px;'>
     BIENVENIDO/A: </label>  <label style='color: black; font-size: 22px;'><b>".$row['nombre']."</b></label></center>";
}


$pagina = implode($datos);

if($pagina == ""){
?>

  <script type="text/javascript">
        
        alert("USUARIO Y/O PASSWORD INCORRECTO");
        window.location= "../VistasVaseguro/loginVS/indexvaseguro.html";
</script>

<?php

}else{
          ?>

<script type="text/javascript">
alert("ACCESO VERIFICADO");
        window.location= "../forms/aonForm.php";
      
        localStorage.setItem('naon', "<?php echo $pagina; ?>");  
        </script>
<?php
}

?>