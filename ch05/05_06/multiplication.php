<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Challenge: using loops</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Multiplication Table</h1>
<table>
    <?php
        echo '<tr>';
            echo '<th>&nbsp;</th>';
            for ($col = 1; $col <= 12; $col++):
                echo "<th>$col</th>";
            endfor;
        echo '</tr>';

        for ($row = 1, $col = 1; $row <= 12; $row++):
            echo '<tr>';
            if ($col = 1)
                echo "<th>$row</th>";

            while ($col >= 1 && $col <= 12):
                $mul = $row*$col;
                echo "<td>$mul</td>";
                $col++;
            endwhile;

            echo '</tr>';
        endfor;

    ?>
</table>
</body>
</html>