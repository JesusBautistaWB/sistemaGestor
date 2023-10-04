<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html">
<meta name="author" content="Jesus Bautista">
<title>NUEVO +</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="all" href="css/stylesMenu.css">
<script type="text/javascript" src="js/security.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="js/switchery.min.js"></script>
<script type="text/javascript" src="js/jquery-3.5.1.js"></script>

</head> 
<body>
    <div class="header">   
    <?php  
     include("../functions/phpfunctions.php");
     menuAON_BS();
    ?>
    </div>
<div id="wrapper">
<div class="limiter">
<div class="container-login100">
<script>
function sendForm(){
window.onkeypress = function(event) {
if (event.which == 32) {
return false;
    }
  }
}
</script>
<form action ="../functions/insertarRegistro.php" method="post" 
id="accform" name="accform" autocomplete="off" 
onsubmit="return confirm('Se enviara el accidente para su respectivo proceso. ¿Desea continuar?')"
class="row g-3 needs-validation" novalidate>
<?php //datosCabecera(); ?>
<div class="form-group"> 
<label class="form-label">
<b> REGISTRO DE LLAMADAS</b> <label style="color: darkred;"><u>'EMPRESA'</u></label>
</div> 

<div class="row">

<div class="col">
<label class="form-label">
Nombre: </label>  
<input class="form-control" placeholder="NOMBRE DE QUIEN REPORTA" id="nr" name="nr"   required>      
</div> 



<div class="col">
<label class="form-label">
Principal*: </label>
<select class="form-select" id="tip" name="tip" required>
<option value=""></option>
<?php 
                          $conexion = conAon();
                          $sql = "SELECT nombreTip FROM id21150537_laravel.cat_tipificacion";
                          $result=mysqli_query($conexion,$sql);
                          while($milista=mysqli_fetch_array($result)){    
                          echo "<option>".$milista['nombreTip']."</option>";
                          }
?>
</select>
</div>
</div>

<div class="row">
    
    <div class="col">
<label class="form-label">Nombre de matriz*:</label>  
<input class="form-control" placeholder="EMPRESA/MATRIZ" id="emp" name="emp"   required>      
</div>

<div class="col">
<label class="form-label">Fecha de registro*:</label>  
<input class="form-control" type="date" id="fecha" name="fecha"   required>
</div>
</div>
      
<div class="row">

<div class="col">
<label class="form-label">
Secundaria*:  </label> 
<select class="form-select" id="tis" name="tis" required>
<option value=""></option>
<?php 
                          $result=mysqli_query($conexion,$sql);
                           while($milista=mysqli_fetch_array($result)){    
                           echo "<option>".$milista['nombreTip']."</option>";
                                       }
                                          ?>
</select>
</div>


<div class="col">
<label class="form-label">Otra Tipificacion*:</label>
<select class="form-select" id="ot" name="ot" required>
<option value=""></option>
<?php                          
                          $result=mysqli_query($conexion,$sql);
                          while($milista=mysqli_fetch_array($result)){      
                          echo "<option>".$milista['nombreTip']."</option>";
                                       }
                                          ?>
</select>
</div>
<div class="col">
<label class="form-label">Otra Tipificacion*:</label>
<select class="form-select" id="ot2" name="ot2" required>
<option value=""></option>
       <?php 
                          $result=mysqli_query($conexion,$sql);
                          while($milista=mysqli_fetch_array($result)){    
                          echo "<option>".$milista['nombreTip']."</option>";
                                       }
                                          ?>
</select>
</div>

<div class="col">
<label class="form-label">Otra Tipificacion*:</label>
<select class="form-select" id="ot3" name="ot3" required>
<option value=""></option>
        <?php 
                          $result=mysqli_query($conexion,$sql);
                          while($milista=mysqli_fetch_array($result)){   
                          echo "<option>".$milista['nombreTip']."</option>";
                                       }
                                          ?>  
</select>
</div>
</div>

<div class="row">
<div class="col">
<label class="form-label"> Notas: </label>
      <textarea class="form-control"  name="notas" 
      spellcheck="true"
      onkeypress="return validar(event)" 
      onpaste="return validar(event)"></textarea>
</div>

<div class="col">
<label class="form-label">Codigo de Referencia*:</label>
<input class="form-control"  placeholder="CODIGO DE REFERENCIA" id="cdr" name="cdr"   required>     
</div>
</div>

<div class="row">  
<div class="col">
<label class="form-label">1. ¿Esta usted satisfecho con el tiempo para tomar su llamada?*:</label>
<select class="form-select" id="tdll" name="tdll" required>
<option value="">SELECCIONE UNA OPCION</option>
      <?php                     
                          $sql = "SELECT res1  FROM id21150537_laravel.cat_p1";
                          $result=mysqli_query($conexion,$sql);
                                   while($milista=mysqli_fetch_array($result)){  
                                    echo "<option>".$milista['res1']."</option>";
                                       }
                                          ?>
</select>
</div>
      
<div class="col">
<label class="form-label">2. ¿Ha contestado el ejecutivo a sus preguntas con claridad?*:</label>
<select class="form-select" id="clar" name="clar" required>
<option value="">SELECCIONE UNA OPCION</option>
        <?php                    
                         $sql = "SELECT res2  FROM id21150537_laravel.cat_p2";
                         $result=mysqli_query($conexion,$sql);
                        while($milista=mysqli_fetch_array($result)){     
                        echo "<option>".$milista['res2']."</option>";
                                      }
                                         ?>
</select>
</div>    


<div class="col">
<label class="form-label">3. ¿Como califica la atencion recibida por el ejecutivo?*:</label>
<select class="form-select" id="aten" name="aten" required>
<option value="">SELECCIONE UNA OPCION</option>
        <?php    
                         $sql = "SELECT res3  FROM id21150537_laravel.cat_p3";
                         $result=mysqli_query($conexion,$sql);
                          while($milista=mysqli_fetch_array($result)){
                          echo "<option>".$milista['res3']."</option>";
                                      }
                                         ?>             
</select>
</div>   
</div>

<div class="row">

<div class="col">
<div class="col-submit">
<button class="submitbtn" style="background: white; color: darkblue;">
ACTUALIZAR 
</button>
</div>
</div>
<div class="col">
<div class="col-submit">
<button class="btn btn-danger">
GUARDAR 
</button>
</div>
</div>

</div>
</form>           

</div>
<script type="text/javascript">
  (function () {
  'use strict'
  var forms = document.querySelectorAll('.needs-validation')
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
        form.classList.add('was-validated')
      }, false)
    })
})()

var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

elems.forEach(function(html) {
  var switchery = new Switchery(html);
});         
</script>

</div>
</div>
</body> 
</html>