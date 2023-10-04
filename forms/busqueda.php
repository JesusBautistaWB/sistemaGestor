<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html">
  <title>Busqueda AON</title>
  
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
     menuAON_BS();
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
  <form action ="../functions/insertarRegistro.php" method="post" 
  id="accform" name="accform" autocomplete="off" style=" gray; border-width: 1px; border-style: solid;"
  onsubmit="return confirm('Se enviara el accidente para su respectivo proceso. ¿Desea continuar?')">
      
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

      
    
<div class="col-2">
    <label>
   <b> BUSQUEDA:</b> <label><br>
    
  <input placeholder="INGRESE DATOS PARA BUSCAR" id="nr" name="nr"   required>
       
         
    </label>
          
  </div> 
  <div class="col-1">
    <label> EJECUTIVO:
      <input type="checkbox"><br>
      GERENTE:
      <input type="checkbox"><br>

    </label>
</div>
<div class="col-submit">
    <button class="submitbtn" style="background: white; color: darkblue;">
      BUSCAR
    </button>
  </div>
 
  </form>           

  </div>

 
          
          
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