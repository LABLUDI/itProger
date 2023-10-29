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
    function info($word) {
        echo "$word<br>";
    }
    info(1);
    info('Hello');

    function math($x, $y) {
        return $x + $y;
    }

    $res = math(4,6);
    $res2 = math(90, 90000);

    info($res);
    info($res2);

    function summary($arr){
        $summa = 0;
        foreach($arr as $value){
            $summa += $value;
        }
        return $summa;
    }

    $list = [5, 7, 3];
    echo summary($list).'<br>';
    echo summary([5, 2, 3]) . '<br>';

    // Область видимости

    function info2() {
        global $n;
        $n = 0;
    }


    function  click() {
        static $count;
        $count++;
        echo $count . '<br>';
    }

    $n = 6780;
    info2();
    echo $n;
    click();
    click();
    click();
    click();
    click();
?>
</body>
</html>