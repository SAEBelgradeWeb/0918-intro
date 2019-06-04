<?php
include_once "templates/functions.php";
$now= time();
echo "<br>";

$birthday= mktime(12, 15,0, 11,17,1999);

echo ($now - $birthday) / 60 / 60 / 24;
echo "<br>";
echo $bg_year = strtotime("1st January 2019");
echo "<br>";

echo $bg_year = strtotime("1st January 2019 Friday +1 week");
echo "<br>";

echo date("d m Y. ", $bg_year);

$dt = getdate(time());

dd($dt);
//echo ($now - $bg_year) /  60 / 60 / 24;


https://www.google.com/search?q=dogs&country=uk&
