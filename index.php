<!doctype html>
<html lang="es">
 <head>
  <title>LOTERIAS</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta name="robots" content="noindex, nofollow">
  <link rel="stylesheet" href="assets/index/styles.css"> 


 </head>

   <body>

   <header>
    <h1>Bienvenido a la administracion de loterias</h1>
    </header>
   
    <main>
      <div class="login" id="login-form">    
        <h2><b>LOGIN</b></h2> 
        <?php
        require("classess/connection/connection.php");
        include ("config/login.php");

        ?>
        <form action="config/login.php"  method="post">
         
          <label for="username"><b>usuario</b></label>
          <input type="text" id="username" name="username" Required class="inputbox">
            
          <label for="password">contraseña</label>       
          <input type="password" id="password" name="password" Required class="inputbox">

          <label for="role">Rol</label>
                   
          
              
          <Input name="btningresar" class="btn" type="submit" value="iniciar sesion" >
        
         
        </form>      
      </div> 

      <a>hola mi nombre es gerardo perez</a>

    <a>braian alejandro perez castillo</a>
     
     <a>Cesar Luis Hernandez Oñate</a>
    </main>

   <script src="https://localhost/loteriasJP/assets/login.js"></script>
   
    <!-- place footer here -->
 
  </body>
</html>
