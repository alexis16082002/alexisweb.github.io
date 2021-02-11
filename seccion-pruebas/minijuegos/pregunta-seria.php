<?php

$nombre = $_POST['nombre'];

  if($nombre == "CRISTHEL"){
    $nombre = "AMOR";
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Pregunta Seria</title>
    <link rel="stylesheet" href="css/pregunta-seria.css">
    <link rel="icon" type="image/png" href="../../icono.png"/>
    
    
     <!-- CSS only -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    
      <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    

</head>
<body>


   <div class="page-nav">
   <?php
			//mostramos el header
			require_once('header.php');
		?>
   </div>
   
   
     <div class="page-content">
        <div class="pregunta">
          <h2>HOLA <?php echo $nombre; ?></h2>
          <p>Responde a esta pregunta seriamente ¿Puedo tener amigas?</p>
          <a href="#" class="button" id="si" data-bs-toggle="modal" data-bs-target="#exampleModal">SI</a>
          <a href="#" class="button" id="no">NO</a>
        </div>

        <div class="error">
          <H1>Por favor de entrar en un Ordenador</H1>
        </div>

        


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">GRACIAS</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        GRACIAS <?php echo $nombre; ?>, sabía que si ibas a querer.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <a type="button" href="index.php" class="btn btn-primary">Salir</a>
      </div>
    </div>
  </div>
</div>


        





      <!-- Fin div content-->        
      </div>




      

    







<script src="js/jquery-3.2.1.js"></script>
<script src="js/pregunta-seria.js"></script>
</body>
</html>