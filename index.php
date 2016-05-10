<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
 <?php
        session_start();
        
        
 $connexio = mysqli_connect("localhost","root","","web_projecte"); 

        if(isset($_GET["usuarionuevo"]) && isset ($_GET["ncontrasena"]) && isset ($_GET["ncontrasena2"])){
           $nusu = $_GET['usuarionuevo'];
           $f="SELECT * FROM usuari WHERE nomUsuari like '$nusu' ";
    
           $q = mysqli_query($connexio,$f);
           $ff=  mysqli_fetch_array($q);
           
      
            if(($_GET["ncontrasena"] == $_GET["ncontrasena2"] ) && ( $ff == 0)){
                 $nncontrasena = $_GET["ncontrasena"];
                 $foto = $_GET['foto'];
         $nnusu= "INSERT INTO usuari VALUES ('$nusu','$nncontrasena','$foto',null)";
        
         $consulta = mysqli_query($connexio, $nnusu);
                ?><script>
alert('Cuenta creada con exito');
</script> <?php
            } else { ?>
                <script>
alert('Este usuario ya existe');
window.location.href='Registro.php';
</script>
               
            <?php } 
        }
               
            
      
           
        
?>
        
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <body background="imagenes/Pulse_Wallpaper_Pack_by_NYMEZIDE.jpg">

        <style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Orbitron);
            #imagen {
                position: absolute;
border: 2px solid grey;
display: block;
margin-left: 400px;
margin-top: 100px;
border-radius: 800px;
overflow: hidden;
}
            #usu {
                position: absolute;
border: 2px solid grey;
display: block;
margin-left: 560px;
margin-top: 180px;
border-radius: 800px;
overflow: hidden;
}
            #pas {
                position: absolute;
border: 2px solid grey;
display: block;
margin-left: 560px;
margin-top: 190px;
border-radius: 800px;
overflow: hidden;
}
            #Us {
position: absolute;
margin-left: 560px;
margin-top: 160px;
color: white;


font-size: 12px;
font-family: 'Orbitron', sans-serif;

}
            #p {
position: absolute;
margin-left: 560px;
margin-top: 170px;
color: white;

font-size: 12px;
font-family: 'Orbitron', sans-serif;
}



            #reg {
position: absolute;
margin-left: 750px;
margin-top: 120px;
color: white;
font-size: 12px;
font-family: 'Orbitron', sans-serif;
}

           #log {
position: absolute;
margin-left: 580px;
margin-top: 190px;
color: white;
border-radius: 800px;
overflow: hidden;

}
           #rec {
position: absolute;
margin-left: 650px;
margin-top: 190px;
color: white;
border-radius: 800px;
overflow: hidden;
font-family: 'Orbitron', sans-serif;
font-size: 12px;

}
           #mundo {
position: absolute;
margin-left: 570px;
margin-top: 350px;

}
        </style>
        <img id="mundo" src="imagenes/earth_rotate_300_clr.gif" width="200" height="200">
        <img   id='imagen' src='imagenes/fondos-negros-para-pantalla-2.jpg' width='500' height="200">
        
        <form method="POST" name="formulari" action="control_acces.php">
            <div id="Us"> <b>Usuario</b><br></div>
            <div id='usu'>
                <input type="text" name="usuari" autofocus=""></div><br><br>
               <div id="p" ><b>Password</b> <br> </div>
            <div id='pas'>
            <input type="password" name="contrasenya"></div><br><br>
            <div id="log"><input type="submit" name="Login" value="Login"></div>
            <div id="rec"><input  type="checkbox" name="recordar">Recordar</div>
        </form> <div id="reg"> <a href="Registro.php"><img src="imagenes/registrate-aqui-gratis.gif" with="40" height="40"></a></div>
    
    </body>
</html>
