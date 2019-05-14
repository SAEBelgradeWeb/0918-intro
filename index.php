<?php

$name = "Neven";
$cars = ['mazda', 'honda', 'toyota'];
echo "Hello, I am {$name}. I am \"always\" on time. \\";
echo "<br>";
echo 'Hello, I am ' . $name;
echo "<br>";
echo "Hello" . " ". "world";
echo "<br>";

var_dump($name);
echo "<br>";
var_dump(1);
echo "<br>";
var_dump(true);

echo "<br>";
echo "<pre>";
var_dump($cars);

echo "</pre>";

echo "<br>";
var_dump(isset($cars));

$str = "2";
$ingr = 2;

$intgr2 = (int) $str;
define('DATABASE_PASSWORD', 'admin123');
echo "<br>";
echo "<br>";
echo "<br>";
$text = "Fox and fox and so go the Fox";
echo DATABASE_PASSWORD;

echo "<br>";

echo str_ireplace("Fox", "Mouse", $text, $count);
echo "<br>Fox was replaced with a Mouse $count times";
$a = 10;
$str1 = "Hello ";
$str1.= "World";
echo "<br>";
echo $str1;
echo "<br>";
echo ++$a;
echo "<br>";
echo $a++;

echo "<br>";

echo $a;


