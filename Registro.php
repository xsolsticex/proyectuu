<html>
    <head>
        <meta charset="UTF-8">
        <title>Cambiar contraseña</title>
    </head>
    <body>
<?php
$connexio = mysqli_connect("localhost","root","","web_projecte"); 
session_start();

?>
        Crear usuario:<br>
<?php
if (isset($_SESSION['usuari'])){
$usuari = $_SESSION['usuari'];
echo "hola $usuari"."<br>";
}

           
        
        ?>
        <form method="GET" action="index.php">
            Usuario: <br>
            <input type="text" name="usuarionuevo"><br>
            Contraseña: <br>
            <input type="password" name="ncontrasena"><br>
            Confirmar contraseña:<br>
            <input type="password" name="ncontrasena2">
            <input type="file" name="foto">
            <input type="submit" value="Aceptar" name="Aceptar">
            <a href="index.php">Inicio</a>
    
  
       
</form>
   
    </body>
</html>