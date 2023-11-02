<?php
$title = 'Главная страница';
require_once 'blocks/header.php';
?>
    <h1>Главная страница</h1>
<?php
//    $file = fopen('text.txt', 'a');
//
//    fwrite($file, "\nExample text \nHello");
//
//    fclose($file);

    $filename = 'text.txt';

    $file = fopen('text.txt', 'r');

    $content = fread($file, filesize($filename));

    fclose($file);

    echo '<pre>' . $content . '</pre>' . '<br>';

    file_put_contents('a.txt', "Example\nHello");

    echo file_get_contents('a.txt') . '<br>';

    echo file_exists('a.txt') . '<br>';

//    rename('a.txt', 'new_name.txt');

//    unlink('new_name.txt');

    echo fileperms(__FILE__);
    chmod(__FILE__, 777);

require_once 'blocks/footer.php';
?>