<html lang="es">
<head>
<title> Prueba</title>
</head>
<body>
<h1>Ejercicio 5</h1>
<?php
session_start();
$color=$_POST["color"];
$fuente=$_POST["fuente"];
$tamanyo=$_POST["tamanyo"];
$texto=$_POST["texto"]; 
if(isset($_POST["datos"])){
    setcookie("color",$color, time()+60);
    setcookie("fuente",$fuente, time()+60);
    setcookie("tamanyo",$tamanyo, time()+60);
    setcookie("texto",$texto, time()+60);
    echo "<p>Cookies guardadas(pulsa el enlace para ver el texto)</p>";
    echo "<a href='http://localhost:8080/exercici2/ej5b.php'>http://localhost:8080/exercici2/ej5b.php</a>";

    
} 
else{
    echo "<p>Cookies no guardadas</p>";
}

?>
<?php include "ej2.php";?>
<br/>
</div>
</body>
</html>