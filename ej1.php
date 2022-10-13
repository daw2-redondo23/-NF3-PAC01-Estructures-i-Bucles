<html>
<head>
<title> Prueba</title>
</head>
<body>
<h1>Ejercicio 1</h1>
<?php
    date_default_timezone_set("Europe/Athens");
    $dia_anterior = date('d')-2;
    $mes_siguiente = date('F',strtotime('+1 month'));
    $dias_mes= cal_days_in_month(CAL_GREGORIAN,date("m"), date("Y"));
    $dia_actual = date('d');
    $resultado = $dias_mes - $dia_actual; 
    $meses_restantes = 12-date('n');
    echo "Two days ago it was $dia_anterior.";
    echo "<br/>";
    echo "The next month is $mes_siguiente.";
    echo "<br/>";
    echo "There are $resultado days left in next month";
    echo "<br>";
    echo "There are $meses_restantes months left in the current year.";
    
?>
<br/>
</div>
</body>
</html>