<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>PHP</title>
</head>
<body>
<?php
    $x = 10;
    $y = 20;

    echo $x + $y . '<br>';
    echo $x - $y . '<br>';
    echo $x * $y . '<br>';
    echo $x / $y . '<br>';
    echo $x % $y . '<br>';

    $x += 10; // $X = $x + 10;
    $y -= 10; // $y = $y - 10;
    echo $x . '<br>';
    echo $y . '<br>';

    $x++;// $x += 1; Инкремент
    $x--; // $x -= 1; Декремент

    echo M_PI . '<br>';
    echo M_E . '<br>';

    echo abs(-22) . '<br>';
    echo ceil(3.1) . '<br>';
    echo floor(3.9) . '<br>';
    echo round(3.15435353, 2) . '<br>';

    $rand = mt_rand(1, 974982108708999999);
    $rand++;

    echo $rand . '<br>';
    echo min(2,0, 5, 4, 3, 6, 24, 41, 4, 3) . '<br>';
    echo max(2,0, 5, 4, 3, 6, 24, 41, 4, 3) . '<br>';

?>
</body>
</html>