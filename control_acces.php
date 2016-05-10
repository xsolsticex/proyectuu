<<<<<<< HEAD
<?php /*
session_start();
$connexio = mysqli_connect("localhost","root","","web_projecte"); 
//$connexio = mysqli_connect("mysql12.000webhost.com","a2308147_bd","dani1234","a2308147_bd");
$usuari = $_POST["usuari"];
$pwd =$_POST["contrasenya"];
$sentenciaSQL = "SELECT nomUsuari,clau FROM usuari WHERE nomUsuari='".$usuari."' and clau='".$pwd."'"; 
$rs = mysqli_query($connexio,$sentenciaSQL);

if (mysqli_num_rows($rs)!=0){  

$_SESSION["usuari"] = $usuari;
   
   if (isset($_POST['recordar']))
    {
        setcookie("nom",$_POST['usuari'],time()+5, "/");  
        setcookie("password",$_POST["contrasenya"],time()+5, "/"); 
   }
    else
    {
       setcookie("nom",$_POST['usuari'],time()-5, "/");
        setcookie("password",$_POST["contrasenya"],time()-5, "/");
   }
    header ("Location: pagina_usuari.php");
}else{
              ?>  <script>
alert('Usuario o password incorrectos');
window.location.href='index.php';
</script>
<?php } */?>
 <?php


$nom = $_POST['usuari']; //aqui obtenemos lo campos con el metodo $_post 

$pwd = $_POST['contrasenya']; 

//$con = mysqli_connect('mysql12.000webhost.com','a4066265_root','123456','a4066265_datab')or die ('Ha fallado la conexi&oacute;n: '.mysql_error()); 
$con = mysqli_connect('localhost','root','','web_projecte')or die ('Ha fallado la conexi&oacute;n: '.mysql_error()); 

//nota: usuario_base de datos dejala default y sera "root" 

$cons1="select * from usuari where nomusuari='".$nom."' and clau='".$pwd."'";

$query1 = mysqli_query($con,$cons1);

$registres = mysqli_num_rows($query1);

$Result1= mysqli_fetch_array($query1);

if($registres<1){ //si el resultado de la query es negativa manda un mensaje de alerta 
echo "<script>alert('Nombre o password Incorrecto, verifique...');window.location='index.php';</script>"; 
session_destroy(); 
}else{ 
session_start();
$usuari=$_POST["usuari"];
$contrasenya=$_POST["contrasenya"];
$_SESSION["ultimAcces"] = time();
     $_SESSION["usuari"] = $_POST["usuari"];
    $_SESSION["contrasenya"] =  $_POST["contrasenya"];
if (isset($_POST['recorda'])){
        setcookie("usuari",$_POST['usuari'],time()+(3600),"/");
        setcookie("contrasenya",$_POST['contrasenya'],time()+(3600),"/");}
    else {
        setcookie("usuari",$_POST['usuari'],time()-(3600),"/");
        setcookie("contrasenya",$_POST['contrasenya'],time()-(3600),"/");

    }
echo "<script>window.location='pagina_usuari.php';</script>"; 
} 


 

?> 

=======
<?php /*
session_start();
$connexio = mysqli_connect("localhost","root","","web_projecte"); 
//$connexio = mysqli_connect("mysql12.000webhost.com","a2308147_bd","dani1234","a2308147_bd");
$usuari = $_POST["usuari"];
$pwd =$_POST["contrasenya"];
$sentenciaSQL = "SELECT nomUsuari,clau FROM usuari WHERE nomUsuari='".$usuari."' and clau='".$pwd."'"; 
$rs = mysqli_query($connexio,$sentenciaSQL);

if (mysqli_num_rows($rs)!=0){  

$_SESSION["usuari"] = $usuari;
   
   if (isset($_POST['recordar']))
    {
        setcookie("nom",$_POST['usuari'],time()+5, "/");  
        setcookie("password",$_POST["contrasenya"],time()+5, "/"); 
   }
    else
    {
       setcookie("nom",$_POST['usuari'],time()-5, "/");
        setcookie("password",$_POST["contrasenya"],time()-5, "/");
   }
    header ("Location: pagina_usuari.php");
}else{
              ?>  <script>
alert('Usuario o password incorrectos');
window.location.href='index.php';
</script>
<?php } */?>
 <?php


$nom = $_POST['usuari']; //aqui obtenemos lo campos con el metodo $_post 

$pwd = $_POST['contrasenya']; 

//$con = mysqli_connect('mysql12.000webhost.com','a4066265_root','123456','a4066265_datab')or die ('Ha fallado la conexi&oacute;n: '.mysql_error()); 
$con = mysqli_connect('localhost','root','','web_projecte')or die ('Ha fallado la conexi&oacute;n: '.mysql_error()); 

//nota: usuario_base de datos dejala default y sera "root" 

$cons1="select * from usuari where nomusuari='".$nom."' and clau='".$pwd."'";

$query1 = mysqli_query($con,$cons1);

$registres = mysqli_num_rows($query1);

$Result1= mysqli_fetch_array($query1);

if($registres<1){ //si el resultado de la query es negativa manda un mensaje de alerta 
echo "<script>alert('Nombre o password Incorrecto, verifique...');window.location='index.php';</script>"; 
session_destroy(); 
}else{ 
session_start();
$usuari=$_POST["usuari"];
$contrasenya=$_POST["contrasenya"];
$_SESSION["ultimAcces"] = time();
     $_SESSION["usuari"] = $_POST["usuari"];
    $_SESSION["contrasenya"] =  $_POST["contrasenya"];
if (isset($_POST['recorda'])){
        setcookie("usuari",$_POST['usuari'],time()+(3600),"/");
        setcookie("contrasenya",$_POST['contrasenya'],time()+(3600),"/");}
    else {
        setcookie("usuari",$_POST['usuari'],time()-(3600),"/");
        setcookie("contrasenya",$_POST['contrasenya'],time()-(3600),"/");

    }
echo "<script>window.location='pagina_usuari.php';</script>"; 
} 


 

?> 

>>>>>>> origin/master
