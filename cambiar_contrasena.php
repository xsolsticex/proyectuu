<?php
//iniciem sessiÃ³
session_start();
$connexio = mysqli_connect("localhost","root","","web_projecte");
define("TEMPSINACTIU", 3600); //Segons mÃ xims que pot estar l'aplicaciÃ³ inactiva



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
        <title>Cambiar contraseña</title>
    </head>
    <body background="imagenes/Pulse_Wallpaper_Pack_by_NYMEZIDE.jpg">
<style type="text/css">
            #saludo2 {
                position: absolute;
color: white;
right:  40px;
font-family: 'logobloqo2';

}
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
            #menu {
                position: absolute;
border: 2px solid white;
right:  10px;
top: 2px;
border-radius: 800px;
overflow: hidden;
}
            #form {
position: absolute;
margin-left: 550px;
margin-top: 150px;
color: white;
font-family: 'Squared Display';
font-size: 24px;
}
            #titulo {
position: absolute;
margin-left: 520px;
margin-top: 120px;
color: white;
font-family: 'Squared Display';
font-size: 24px;
}
            #aceptar {
position: absolute;
margin-left: 600px;
margin-top: 260px;
}
            #imagen {
                position: absolute;
border: 2px solid grey;
display: block;
margin-left: 400px;
margin-top: 100px;
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

<img   id='imagen' src='imagenes/fondos-negros-para-pantalla-2.jpg' width='500' height="200">
<div id='titulo'>
    <b>Cambio de password:</b><br></div>
        <div id="saludo2">
<?php
$usuari = $_SESSION['usuari'];

echo "Hola $usuari"
        ?><br>
        <a href="pagina_usuari.php">Perfil</a><br>
        <a href="cambiar_foto.php">Cambiar foto de perfil</a><br>
        <a href="tanca_sessio.php">Cerrar Sesion</a><br></div>
        <div id='form'>
        <form method="GET" action="pagina_usuari.php">
            <b>Nuevo password: </b><br>
            <input type="password" name="ncontrasena"><br>
            <b>Confirmar password:</b><br>
            <input type="password" name="ncontrasena2"></div>
<div id='aceptar'><input type="submit" value="Aceptar" name="Aceptar"></div>
            
           
       
</form>

        
    </body>
</html>
