<?php
$title = 'Главная страница';
require_once 'blocks/header.php';
?>
	<h1>Главная страница</h1>
<?php
if(isset($_GET['source']) && $_GET['source'] !== "") {
    $link = explode("?source=", $_SERVER['REQUEST_URI']);
    $redirect = "http://" . $_SERVER['HTTP_HOST'] . $link[0];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: '. $redirect);
    exit();
}
//	phpinfo();
//echo '<pre>';
//echo $_SERVER['HTTP_HOST'] . ' ~ ' . $_SERVER['REQUEST_URI'];
//echo $_SERVER['HTTP_USER_AGENT'];
//echo '</pre>';

require_once 'blocks/footer.php';
?>