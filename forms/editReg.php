<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html">
  <title>Aviso de Accidente VASEGURO</title>
  
  <link rel="stylesheet" type="text/css" media="all" href="css/styles.css">
  <link rel="stylesheet" type="text/css" media="all" href="css/switchery.min.css">
  <script type="text/javascript" src="js/switchery.min.js"></script>
      <script type="text/javascript" src="js/jquery-3.5.1.js"></script>
      <script type="text/javascript" src="js/sistema.js"></script>
      <script type="text/javascript" src="js/security.js"></script>
    
      
      
</head> 
<body>
    
 
    <div class="header">   
       <?php  
   include("../functions/phpfunctions.php");
   menuAon();

   $folio = $_REQUEST['id'];

   $conexion = con();
   $sql="SELECT * FROM aonbd.registrosaon WHERE folio = '$folio' ORDER BY fechaRegistro DESC";
   $result=mysqli_query($conexion,$sql);

 while($mostrar=mysqli_fetch_array($result)){
    ?>

    </div>
    
<div id="wrapper">
      <div class="limiter">
    
<div class="container-login100" style="background-color: white" >

    <script>
function sendForm(){
  window.onkeypress = function(event) {
  if (event.which == 32) {
   return false;
  }
}
}
</script>
     
 <!-- TRAEMOS LA INFORMACION BASICA DEL USUARIO, YA QUE SE UTILIZARA POSTERIORMENTE PARA FOLIAR AL ACCIDENTE EN CASO DE APROBACION-->
  <form action ="../functions/actualizarRegistro.php" method="post" 
  id="accform" name="accform" autocomplete="off" style=" gray; border-width: 1px; border-style: solid;"
  onsubmit="return confirm('¿Desea continuar?')">
      
            <div  class="col-3" >
          <label>
          <input style="border: none" name="idUsuario" id="idUsuario" readonly>
          <script>
          document.getElementById("idUsuario").value = localStorage.getItem('sessionValue');
          </script>
              </label> 
       
             
      </div>
       
        <div class="col-3">
           <label>
               <input style="border: none" id="nombreUsuario" name="nombreUsuario" readonly>
          <script>
          document.getElementById("nombreUsuario").value = localStorage.getItem('naon');
          </script> 
           
           
           </label>
    
      </div>
    
      
      <div class="col-3" >
      
              <label>
          <input style="border: none" placeholder="<?php 
  $fechaActual = date('Y-m-d');
  echo $fechaActual;
                               ?>" name="fechaHoy" id="fechaHoy"  readonly>
       
          </label>
      
      </div>

      <div class="col-1"> 
            <span class="textSectionRED">
					<p>		
          </p> 
				  </span>
      </div> 

      
    
<div class="col-3">
    <label>
   <b> DATOS DEL  FOLIO: </b> <label style="color: darkred;"><u><?php echo $mostrar['folio']; ?></u></label><br>
    Nombre de quien reporta: 
    
  <input placeholder="NOMBRE DE QUIEN REPORTA" id="nr" name="nr" value="<?php echo $mostrar['nombreReportante']; ?>"  required>
  <input id="folio" name="folio" value="<?php echo $mostrar['folio']; ?>" style="display: none;" readonly>
       
         
    </label>
          
  </div> 



       <div class="col-3">
    <label>
    Nombre de la empresa matriz*:
    <input placeholder="EMPRESA/MATRIZ" id="emp" name="emp"  value="<?php echo $mostrar['nombreEmpresa']; ?>" required>
</label>      
  </div>

  <div class="col-3">
    <label>
    Fecha de registro*:
    <input type="date" id="fecha" name="fecha" value="<?php echo $mostrar['fechaRegistro']; ?>"  required>
</label>      
  </div>
      
      
  
  <div class="col-3">
    <label>
    Tipificacion Principal*:
      <select id="tip" name="tip" required>
        <option><?php echo $mostrar['tipificacion']; ?></option>
        <?php 
                          $conexion = conAon();
                          $sql = "SELECT nombreTip  FROM aonbd.cat_tipificacion";
                          $result=mysqli_query($conexion,$sql);
                           
                                   while($milista=mysqli_fetch_array($result)){
                                           
                                       echo "<option>".$milista['nombreTip']."</option>";
                                       }
     
                                          ?>
        
         
          
      </select>
 
    </label> 
  </div>


  <div class="col-3">
    <label>
    Tipificacion Secundaria*:
      <select id="tis" name="tis" required>
      <option><?php echo $mostrar['tipificacionS']; ?></option>
        <?php 
                        
                          $sql = "SELECT nombreTip  FROM aonbd.cat_tipificacion";
                          $result=mysqli_query($conexion,$sql);
                           
                                   while($milista=mysqli_fetch_array($result)){
                                           
                                       echo "<option>".$milista['nombreTip']."</option>";
                                       }
     
                                          ?>
        
         
          
      </select>
 
    </label> 
  </div>

  <div class="col-3">
    <label>
    Otra Tipificacion*:
      <select id="ot" name="ot" required>
      <option><?php echo $mostrar['t2']; ?></option>
        <?php 
                          
                          $sql = "SELECT nombreTip  FROM aonbd.cat_tipificacion";
                          $result=mysqli_query($conexion,$sql);
                           
                                   while($milista=mysqli_fetch_array($result)){
                                           
                                       echo "<option>".$milista['nombreTip']."</option>";
                                       }
     
                                          ?>
        
         
          
      </select>
 
    </label> 
  </div>

  
  <div class="col-2">
    <label>
    Otra Tipificacion*:
      <select id="ot2" name="ot2" required>
      <option><?php echo $mostrar['t3']; ?></option>
        <?php 
                          $sql = "SELECT nombreTip  FROM aonbd.cat_tipificacion";
                          $result=mysqli_query($conexion,$sql);
                           
                                   while($milista=mysqli_fetch_array($result)){
                                           
                                       echo "<option>".$milista['nombreTip']."</option>";
                                       }
     
                                          ?>
        
         
          
      </select>
 
    </label> 
</div>

<div class="col-2">
    <label>
    Otra Tipificacion*:
      <select id="ot3" name="ot3" required>
      <option><?php echo $mostrar['t4']; ?></option>
        <?php 
                         
                          $sql = "SELECT nombreTip  FROM aonbd.cat_tipificacion";
                          $result=mysqli_query($conexion,$sql);
                           
                                   while($milista=mysqli_fetch_array($result)){
                                           
                                       echo "<option>".$milista['nombreTip']."</option>";
                                       }
     
                                          ?>
        
         
          
      </select>
 
    </label> 
</div>
 
 
  <div class="col-2">
    <label>
    Notas: 
      <textarea  name="notas" 
      spellcheck="true"
      onkeypress="return validar(event)" 
      onpaste="return validar(event)"><?php echo $mostrar['notas']; ?></textarea>
    </label>
  </div>

  <div class="col-2">
    <label>
    Codigo de Referencia*:
    <input placeholder="CODIGO DE REFERENCIA" id="cdr" name="cdr" value="<?php echo $mostrar['codigoReferencia']; ?>"  required>
</label>      
  </div>


    
  <div class="col-3">
    <label>
   1. ¿Esta usted satisfecho con el tiempo para tomar su llamada?*:
      <select id="tdll" name="tdll" required>
      <option><?php echo $mostrar['pre1']; ?></option>
        <?php 
                         
                          $sql = "SELECT res1  FROM aonbd.cat_p1";
                          $result=mysqli_query($conexion,$sql);
                           
                                   while($milista=mysqli_fetch_array($result)){
                                           
                                       echo "<option>".$milista['res1']."</option>";
                                       }
     
                                          ?>
          
      </select>
 
    </label> 
</div>
      
<div class="col-3">
    <label>
   2. ¿Ha contestado el ejecutivo a sus preguntas con claridad?*:
      <select id="clar" name="clar" required>
      <option><?php echo $mostrar['pre2']; ?></option>
        <?php 
                         
                         $sql = "SELECT res2  FROM aonbd.cat_p2";
                         $result=mysqli_query($conexion,$sql);
                          
                                  while($milista=mysqli_fetch_array($result)){
                                          
                                      echo "<option>".$milista['res2']."</option>";
                                      }
    
                                         ?>
         
          
      </select>
 
    </label> 
</div>    


<div class="col-3">
    <label>
   3. ¿Como califica la atencion recibida por el ejecutivo?*:
      <select id="aten" name="aten" required>
      <option><?php echo $mostrar['pre3']; ?></option>
        <?php 
                         
                         $sql = "SELECT res3  FROM aonbd.cat_p3";
                         $result=mysqli_query($conexion,$sql);
                          
                                  while($milista=mysqli_fetch_array($result)){
                                          
                                      echo "<option>".$milista['res3']."</option>";
                                      }
    
                                         ?>
         
          
      </select>
 
    </label> 
</div>    
<div class="col-submit">
    <button class="submitbtn" style="background: white; color: darkblue;">
       ACTUALIZAR DATOS
    </button>
  </div>
   
  </form>           

  </div>
<?php } ?>
          
          
            <script type="text/javascript">
var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

elems.forEach(function(html) {
  var switchery = new Switchery(html);
});
                
          
</script>

      </div>
    </div>
  
</body>
    
      
</html>