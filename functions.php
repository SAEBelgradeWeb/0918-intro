<?php

function run(){
    echo "RUN FOREST!";
}

function forty_two() {
    return 42;
}

function add($one, $two) {
    echo $one + $two;
}

function add_2($one, $two) {
    return $one + $two;
}

function let_me_in($age) {
    if($age > 18) {
        return true;
    }

    return false;
}


run();

$result = forty_two();

add(5, 6);

$res = add_2(8, 10);
echo $res . "$";

//------>||||||||----->

$char_no = strlen("Bla");

function greeting($age, $name="stranger" ) {
    echo "hello {$name}";

}

greeting(40);


round(1 / 3, 2); // 0.33

substr("Hello", 3, 1);
$x = "10";
$y = "20";
function one($x) {
    global $y;

    echo $x;
    echo $y;
}

one($x);

$one = ['one', 'two', 'three'];
$two = ['four', 'five', 'six' ];


function mix_arrays($ar1, $ar2) {
    $out = [];
    foreach ($ar1 as $key => $item) {
            array_push($out, $ar1[$key]);
            array_push($out, $ar2[$key]);
    }
    return $out;
}

echo "<pre>";
var_dump(mix_arrays($one, $two));

