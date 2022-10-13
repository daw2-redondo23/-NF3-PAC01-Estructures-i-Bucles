<html>
<head>
<title> Prueba</title>
</head>
<body>
<h1>Ejercicio 3</h1>
<?php  
    $fecha_actual = strtotime(date("d-m-y"));
    $fin_verano = strtotime("23-09-2022");
    $comienzo_verano = strtotime("21-06-2022");

    if($fecha_actual>$comienzo_verano && $fecha_actual<$fin_verano){
        echo "Good Summer!";
    }
    else{
        echo "Good Winter!";
    }
?>
<?php include "ej2.php";?>
<br/>
</div>
</body>
</html>