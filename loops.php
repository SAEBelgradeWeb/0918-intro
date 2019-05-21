<?php

for($i=0; $i<10; $i++) {
    if($i < 3) continue;
    echo $i. "<br>";
    if($i == 3) {
        echo "Now it is 3 <br>";
        break;
    }
}


$i = 0;
while($i < 10) {

break;
}


$cars = ['mazda', 'honda', 'toyota'];

foreach ($cars as $key => $car ) {
 echo "<br>" . $key . " - " . $car;
}

$person = [
    'name' => "Vladimir",
    'lastname' => "Lelicanin"
];

echo "<ul>";
foreach ($person as $key => $value ) {
    echo "<li>" . ucfirst($key) . ": {$value}";
}

echo "</ul>";
//_______________
//| Key | Value |
//_______________
//| aks  | laksd |