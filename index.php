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
    $x = 222;

    switch($x){
        case 5:
            echo 'Var: 5';
            break;
        case 8:
            echo 'Var: 8';
            break;
        case 10:
            echo 'Var: 10';
            break;
        case 6:
            echo 'Var: 6';
            break;
        default:
            echo 'Default work!';
    }
?>
</body>
</html>