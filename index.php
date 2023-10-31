<?php
    $title = 'Главная страница';
    require_once 'blocks/header.php';
?>
<h1>Главная страница</h1>
<?php
//    echo date('m-l H:i:s', time() + 10000) . '<br>';

//    echo date('m-d H:i:s', strtotime('-1 Week -2 Day -3 Hour'));

    echo date('m-d H:i:s', strtotime('Next Monday'));

    require_once 'blocks/footer.php';
?>