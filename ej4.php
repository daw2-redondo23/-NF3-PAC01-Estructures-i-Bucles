<html lang="es">
<head>
<title> Prueba</title>
</head>
<body>
<h1>Ejercicio 4</h1>
<form id="form" method="post" action="ej5.php">
    <ol>
        <li>
            <label for="color">Escoge el color: </label>
            <input type="color" name="color" id="color">
        </li>
        <li>
            <label for="fuente">Escoge la fuente: </label>
            <input type="text" name="fuente" id="fuente">
        </li>
        <li>
            <label for="tamanyo">Escoge el tamaño </label>
            <input type="number" name="tamanyo" id="tamanyo">
        </li>
        <li>
            <label for="texto">Escriba el texto que desea: </label>
            <input type="texto" name="texto" id="texto">
        </li>
        <li>
            <label for="datos">Selecciona si quieres guardar la informacion</label>
            <input type="checkbox" name="datos" id="datos">
        </li>
        <br>
        <input type="submit" value="enviar">
    </ol>
</form>
<?php 
  
session_start();
   
if(isset($_SESSION['views']))
    $_SESSION['views'] = $_SESSION['views']+1;
else
    $_SESSION['views']=1;
      
echo"views = ".$_SESSION['views'];
  
?>
<?php include "ej2.php";?>
<br/>
</div>
</body>
</html>