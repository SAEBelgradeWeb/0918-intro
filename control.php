<?php

if ($age > 18) {

    if($ticket == true) {
        echo "Yes! You can enter the party";
    }

    if($jacket == "leather") {
        echo "WTF!";
    }
} else if ($age == 18) {
  echo "Huh, you are on the edge, but I will let you in!";
} else if ($age == 17) {
    echo "Huh, you are on the edge, but I will let you in!";
} else {
    echo "You are too young!";
}

$day = "";

if($day == "Monday") {
    echo "Happy Monday!";
} else if ($day == "Tuesday") {
    echo "Happy Tuesday!";
}else if ($day == "Wednesday") {
    echo "Happy Wednesday!";
}else if ($day == "Thursday") {
    echo "Happy Thursday!";
}else if ($day == "Friday") {
    echo "Happy Friday!";
}else if ($day == "Saturday") {
    echo "Happy Saturday!";
}else if ($day == "Sunday") {
    echo "Happy Sunday!";
}

switch ($day) {
    case "Monday":
        echo "Happy Monday!";
    break;
    case "Tuesday":
        echo "Happy Tuesday!";
    break;
    case "Wednesday":
        echo "Happy Wednesday!";
    break;
    case "Thursday":
        echo "Happy Thursday!";
    break;
    case "Friday":
        echo "Happy Friday!";
    break;
    default:
        echo "Happy Weekend!";
}

if ("Monday" == $day) {

}

//ternary

if($gender == "male") {
    echo "Hello man!";
} else {
    echo "Hello woman!";
}

$result = ($gender == "male") ?  "Hello man!" : "Hello woman!";

echo $result;


$gasoline = ($money > 10) ? 100 : 0;




