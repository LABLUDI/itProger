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

    $a = 45;
    $str = 'Hello!';
    $isWeatherGood = false;

    if($str !== 'Hello' && !$isWeatherGood) {
	    echo 'Это так хозяин!';
    } else if($a == 5) {
        $res = "$a = 5";
        echo $res;
    } else if($a > 50) {
        $res = "$a > 50";
        echo $res;
    } else if($a <= 45) {
        $res = "$a <= 45";
        echo $res;
    } else {
	    echo 'Ответ не верный хозяин!';
    }

?>
</body>
</html>