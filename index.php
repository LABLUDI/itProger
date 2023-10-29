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
// Одномерные массивы
    $nums = array(4, 5, 6, -23, 6);
    $nums[0] = 45;
    echo $nums[0] . '<br>';

    $arr = [4, 5, 0.4, 'ghbdtn', true, 21];
    echo $arr[4] . '<br>';

// Ассоциативные массивы
    $list = ['age' => 24, 'name' => 'Alex', 'hobby' => 'basketball'];
    echo $list['name'] . '<br>';

// Многомерные массивы
    $matrix = [
            [4, 6, 3, 8],
            [true, false],
            ['Hello']
    ];
    $matrix[1][0] = 'pok';
    echo $matrix[1][0];
?>
</body>
</html>