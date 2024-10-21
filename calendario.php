<?php
/**
 * Dado el mes y año almacenados en variables, escribir un programa que muestre el
 * calendario mensual correspondiente. Marcar el día actual en verde y los festivos
 * en rojo.
 * 
 * @author Luis Pérez
 */
?>
<!-- VISTA -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario</title>
    <link rel="stylesheet" href="style_calendario.css">
</head>
<body>
    <?php
        $today = date("j");
        $actual_month = date("n");
        $actual_year = date("Y");

        $date = new DateTime("$actual_year-$actual_month-01");
        $firstday_week = $date->format('N');
        $days_month = $date->format('t');


        echo "<h2>Calendario: $actual_month/$actual_year</h2>";
        echo "<table border='1px'>";
        echo "<tr><th>Lunes</th><th>Martes</th><th>Miércoles</th><th>Jueves</th><th>Viernes</th><th>Sábado</th><th>Domingo</th></tr>";
        echo "<tr>";
        for ($i = 1; $i < $firstday_week; $i++) {
            echo "<td></td>";
        }
        for ($day = 1; $day < $days_month; $day++) {
            if ($day == $today) {
                echo "<td style='background-color: green;'>$day</td>";
            } else if (($actual_month == 10 && $day == 1) || ($actual_month == 10 && $day == 12)) {
                echo "<td style='background-color: red;'>$day</td>";
            } else {
                echo "<td>$day</td>";
            }

            if (($day + $firstday_week - 1) % 7 == 0) {
                echo "<tr></tr>";
            }
        }
        while (($day + $firstday_week - 1) % 7 != 1) {
            echo "<td></td>";
            $day++;
        }

        echo "</tr>";
        echo "</table>";
    ?>
</body>
</html>