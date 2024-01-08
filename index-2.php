<?php
    session_start();
    setcookie('email', $_POST['email'], time() - 3600);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        for($i = 100; $i > 10; $i--) {
            if($i % 2 == 0)
                continue;
            if($i < 70)
                break;
            echo $i . '<br>';

        }
        echo '<br>';

        $i = 100;
        while($i > 24) {
            echo $i . '<br>';
            $i -= 50;
        }
        echo '<br>';

        $i =100;
        do {
            echo '101';
        }   while($i == 101);
    echo '<br>';


        $arr = [5, 23, 9, 23.2, 8];
        $count = count($arr);
        for($i = 0; $i < count($arr); $i++) {
            echo 'Значение элемента ' . ($i +1) . ' - ' . $arr[$i] . '<br>';
        }
        $i = 0;
        while($i < $count) {
            echo 'Значение' . ($i + 1) . ' - ' . $arr[$i] . '<br>';
            $i++;
        }

//        $test = true;
//        $i = 0;
//        while ($test === true) {
//            echo 'a -' . ($i++ + 1) . ';' . '<br>';
//        }

    setcookie('name', $_POST['name'], time() + 3600);
    setcookie('email', $_POST['email'], time() + 3600);

    if($_COOKIE['name'] != "" || $_COOKIE['name'] != "") {
        echo 'Имя пользователя: ' . $_COOKIE['name'] . '<br>';
        echo 'Email пользователя: ' . $_COOKIE['email'] . '<br>';
    }

    // session_destroy();
    if($_SESSION['name'] != "" || $_SESSION['name'] != "") {
        echo 'Имя пользователя: ' . $_SESSION['name'] . '<br>';
        echo 'Email пользователя: ' . $_SESSION['email'] . '<br>';
    }
    ?>
</body>
</html>