<?php
$title = 'Главная страница';
require_once 'blocks/header.php';
?>
	<h1>Главная страница</h1>
<?php
    $message = 'Сообщение';
    $to = 'admin@itproger.com';
    $from = 'example@itproger.com';
    $subject = 'Тема сообщения';

    $subject = '=?utf-8?b?' . base64_encode($subject) . '?=';
    $headers = "From: $from\r\nReply-to: $from\r\nContent-type:text/plane; charset=utf-8\r\n";

    mail($to, $subject, $message, $headers);

require_once 'blocks/footer.php';
?>