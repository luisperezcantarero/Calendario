<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario</title>
</head>
<body>
    <?php
        $month = date("n");
        $year = date("Y");

        $today = date("j");
        $actual_month = date("n");
        $actual_year = date("Y");

        echo "<h2>Calendario: $month/$year</h2>";
        echo "<table>";
        echo "<tr><th>Lunes</th><th>Martes</th><th>Miércoles</th><th>Jueves</th><th>Viernes</th><th>Sábado</th><th>Domingo</th></tr>";
        echo "</table>"
    ?>
</body>
</html>