<?php

//$cars = ['mazda', 'honda', 'toyota'];

$badcars = array('yugo', 'wartburg');

$cars = ['mazda', 'honda', 'toyota', $badcars];
$cars[4] = "volvo";

unset($cars[1]);
$name = "belgrade";

echo count($cars);
//push, pop, shift, unshift
echo "<br><pre>";

array_push($cars, "mercedes");
array_pop($cars);

array_unshift($cars, "audi");
array_shift($cars);

array_splice($cars, -1, 1, "tesla");
//array_splice($cars, -3, 1);

array_splice($cars[2], 0, 1, "trabant");

//var_dump($cars);

$person = [
    'name' => 'John',
    'lastname' => 'Doe',
    'age' => 30
];


$person = array_reverse($person);

$numbers = [1, 2, 3];

$numbers = array_map(function($number){
    return $number * 5;
}, $numbers);

$numbers = array_filter($numbers, function($number){
    return $number < 12;
});


echo "<br>";

echo $person['age'];

$person = array_filter($person, function($item) {
    return $item != "30";
});
//
//$person = array_map(function($item){
//    return $item . " - added";
//}, $person);

print_r( $person );

