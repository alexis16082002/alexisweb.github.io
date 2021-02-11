<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Contacto</title>
    <link rel="icon" type="image/png" href="../icono.png"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/contacto.css">

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
      <div class="contacto">







      
        
      <form class="row g-3 needs-validation" novalidate>
  
    <label for="validationCustom01" class="form-label">Nombres</label>
    <input type="text" class="form-control" id="validationCustom01"  required>
    <div class="valid-feedback">
      Bien!
    
  </div>
  
    <label for="validationCustom02" class="form-label">Apellidos</label>
    <input type="text" class="form-control" id="validationCustom02"  required>
    <div class="valid-feedback">
      Bien!
    
  </div>
  
  
  
      
            <label for="exampleFormControlInput1" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="ejemplo@gmail.com">
          
          
            <label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            
            
        
          
          <a class="btn btn-outline-primary enviar">Enviar</a>
          

          
      </div>
  </div>
    
</body>
</html>