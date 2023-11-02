<?php
$title = 'Главная страница';
require_once 'blocks/header.php';
?>
    <h1>Главная страница</h1>
<?php
$lis = [
	5,
	7,
	3,
	6,
	7,
	8,
];
unset($lis[1]);
$lis = array_values($lis);
//    sort($lis);
//    rsort($lis);
//    shuffle($lis);

//    if(in_array(30, $lis) == '')
//        echo 'Not found';
//    else
//        echo 'Found';

$arr = array_slice($lis, 2, 2);
var_dump($arr);
echo '<br>';

$arr_1 = [
	5,
	7,
];
$arr_2 = [
	6,
	8,
	9,
];
$arr_3 = array_merge($arr_1, $arr_2);

print_r($arr_3);
echo '<br>';

print_r($lis);
echo '<br>';

$x = (float)'10';
echo gettype($x) . '<br>';
echo is_numeric($x) . '<br>';

$str = 'Example';
echo strpos($str, 'am') . '<br>';

$words = 'jhon, bob, alex';
$arr_words = explode(',', $words);
print_r($arr_words);
echo '<br>';
echo '<br>' . implode(' ', $arr_words);



require_once 'blocks/footer.php';
?>