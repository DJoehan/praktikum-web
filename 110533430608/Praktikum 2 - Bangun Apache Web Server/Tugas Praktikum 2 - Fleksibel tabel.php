<!DOCTYPE html>
<html>
<head>
	<title>Tabel Fleksibel</title>
</head>
<body>

<?php
	$rows = 3;
	$columns = 4;
	$cells = 10;
?>

<?php
    $width = $columns * 75;
    echo "<table width=".$width." border=1>";
    $row = 0;
    $cel = 1;
    while ($row < $rows && $cel <= $cells)
    {
        echo "<tr>";
        $col = 0;
        while ($col < $columns)
        {
            if ($cel <= $cells)
            {
                echo "<td><div align=center>".$cel."</div></td>";
                $cel++;
            }
            $col++;
        }
        echo "</tr>";
        $row++;
    }
    echo "</table>";
?>

</body>
</html>