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
    const MY_AGE = 24;
    echo MY_AGE . '<br>';

    $n = 500; //int
//    $n = 45;
    $num = -0.788; //float

    $str = 'Переменная'; //string
    $bool = false; // boolean

    $a = 0.2100;
    $b = '0.7';
    echo $a + floatval($b) . '<br>';

    echo $str . ': ' . $n . '<br>' . 'Var 2: ' . $num . '.';
?>
</body>
</html>