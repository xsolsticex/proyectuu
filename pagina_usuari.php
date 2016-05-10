<?php
session_start();
$connexio = mysqli_connect("localhost","root","","web_projecte");


define("TEMPSINACTIU", 10 ); //Segons mÃ xims que pot estar l'aplicaciÃ³ inactiva



//Temps transcorregut des de l'Ãºltim accÃ©s a la pÃ gina i la data actual.
$tempsTranscorregut = time() - $_SESSION["ultimAcces"];

if ($tempsTranscorregut >= TEMPSINACTIU) { //Si la sessiÃ³ ha caducat, han passat 30 segons o mÃ©s des de l'Ãºltim accÃ©s...
    session_destroy(); //Destruim sessiÃ³
    header("Location: index.php"); //Mostrem la pÃ gina de caducitat
} else { //Si no ha caducat...
    $_SESSION["ultimAcces"] = time(); //Actualitzem la data per tornar a comenÃ§ar
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
   <body background="imagenes/Pulse_Wallpaper_Pack_by_NYMEZIDE.jpg">
        
         <style type="text/css">
              a:link {
                 color: activeborder;
                 text-decoration: none;
             }
             a:visited {
                 color: white;
                 text-decoration: none;
             }
            #foto {
                position: absolute;
border: 2px solid white;
right:  200px;
border-radius: 800px;
overflow: hidden;
}
            #saludo {
                position: absolute;
color: white;
right:  40px;
font-family: 'logobloqo2';

}
            #menu {
                position: absolute;
border: 2px solid white;
right:  10px;
top: 2px;
border-radius: 800px;
overflow: hidden;
}
</style>
<img id="menu" src="imagenes/difuminado_degradado_by_andredevonne-d564i6z.jpg" width="299" height="120">
<div id="foto">
        <table bgcolor="white">
            
            <tr >
                <td> <?php
                $usu = $_SESSION['usuari'];
                $ffoto= "SELECT foto from usuari WHERE nomUsuari = '$usu'";
                $q = mysqli_query($connexio,$ffoto);
           $ff = mysqli_fetch_array($q);
           $x= $ff['foto'];
                
                
                       echo "<img src='imagenes/$x' width='100' heigh='100'>"; ?>
                </td> 
              
            </tr> 
            
           </table>
  </div>
<?php
if(isset($_GET["nfoto"])){
    ?>
}
                    <script>
alert('Actualiza pagina para aplicar los cambios');
</script>
<?php
    $v=$_GET['nfoto'];
    $usu = $_SESSION['usuari'];
    $nnfoto= "UPDATE usuari SET foto = '$v' WHERE nomUsuari = '$usu'";
$actualitzafoto = mysqli_query($connexio, $nnfoto);
    
}

            

                   
       if(isset($_GET["ncontrasena"]) && isset ($_GET["ncontrasena2"])){
            if($_GET["ncontrasena"] == $_GET["ncontrasena2"]){
                //header ("Location: pagina_usuari.php");
                $usu = $_SESSION['usuari'];
$nncontrasena = $_GET["ncontrasena"];
$ncontrasena= "UPDATE usuari SET clau = '$nncontrasena' WHERE nomUsuari = '$usu'";
$actualitza = mysqli_query($connexio, $ncontrasena);
            }  else {
                header ("Location: cambiar_contrasena.php");
            }
       } 
            
            ?>
<div id="saludo">
<?php
$usuari = $_SESSION['usuari'];

echo "Hola $usuari"
        ?><br>
        
        <b> <a href="tanca_sessio.php">Cerrar Sesión</a><br>
        <a href="cambiar_contrasena.php">Cambiar contraseña</a><br>
        <a href="cambiar_foto.php">Cambiar foto de perfil</a><br>
        <a href="pagina_usuari.php">Actualizar Página</a><br></b>
       
</div>
    </body>
</html>
