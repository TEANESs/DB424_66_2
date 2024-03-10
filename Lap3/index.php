<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery</title>
</head>
<body>
<?php
$a3 = explode (",","apple,pear,peach");
echo $a3[0].'<br>';
echo $a3[1].'<br>';
echo $a3[2].'<br>';

$food = ['morning'=>'โจ๊ก','lunch'=>'ข้าวผัด', 'dinner'=>'หมูกะทะ'];
echo $food['morning'].'<br>';
echo $food['lunch'].'<br>';
echo $food['dinner'].'<br>';
?>
<pre>
    <?php var_dump($food); ?>
</pre>
<?php
echo '<br>';

$multiArray = [[1, 2, 3],['a','b',['c',5]]];
echo '<pre>';
print_r($multiArray);
echo '</pre>';
echo $multiArray[1][0];
echo '<br>';
echo $multiArray[1][2][1];

sort($food);
echo '<pre>';
print_r($food);
echo '</pre>';
?>
<?php
$array = array('a', 'b', 'c');
$count = count($array);

for ($i = 0; $i < $count; $i++) {
    echo "i:{$i}, v:{$array[$i]}<br>";
}
?>
<?php
$colors = array('red', 'blue', 'green');

foreach ($colors as $color) {
    echo "Do you like $color?<br>";
}
?>
<?php
$arr = ["foo" => "bar", "bar" => "foo"];

foreach ( $arr as $key => $value )
{
      echo "key: " . $key . "<br>";
    echo "val: {$arr[$key]}<br>";
}
?>
</body>
</html>