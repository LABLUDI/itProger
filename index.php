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
// Цикл For
    for($i = 100; $i > 20; $i -= 5)
        echo $i . '<br>';

// Цикл While
    $i = 1;
    while($i <= 10) {
        echo $i . '<br>';
        $i++;
    }

// Бесконечный Цикл
//    $isHasHouse = true;
//    while($isHasHouse) {
//        echo $isHasHouse . '<br>';
//    }

// Цикл Do While
    $i = 100;
    do {
        $i--;
        echo $i . '<br>';
    } while($i < 10);

// Операторы в Циклах
    for($el = 100; $el > 10; $el /= 2) {
        if($el < 15)
            break;

        if($el % 2 == 0)
            continue;

        echo $el . '<br>';
    }

// Перебор массива
    $list = [5, 7, 3, 8, 'some', 45.7];
    $count = count($list);

    for($i = 0; $i < $count; $i++)
        echo "Element $i: $list[$i]<br>";

// Цикл foreach()
    $list2 = ['age' => 24, 'name' => 'Alex', 'hobby', 'football'];
    $arr = [5, 6, 8, 9];

    foreach($list as $item => $value) {
        echo "Key: $item. Value: $value.<br>";
    }

    foreach($arr as $i => $value){
        echo "Index: $i. Value: $value.<br>";
    }
?>
</body>
</html>