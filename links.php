<?php
if(isset($_GET['image'])) {
    switch ($_GET['image']) {
        case "blue":
            $image = "https://img.purch.com/w/660/aHR0cDovL3d3dy5saXZlc2NpZW5jZS5jb20vaW1hZ2VzL2kvMDAwLzEwNC84MTkvb3JpZ2luYWwvY3V0ZS1raXR0ZW4uanBn";
            $color = "blue";
        break;
        case "red":
            $image = "https://upload.wikimedia.org/wikipedia/commons/6/66/An_up-close_picture_of_a_curious_male_domestic_shorthair_tabby_cat.jpg";
            $color = "red";
            break;
        case "purple":
            $image = "https://images.unsplash.com/photo-1518791841217-8f162f1e1131?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80";
            $color = "purple";
            break;
    }
} else {
    $image = "";
    $color = "white";
}
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: <?= $color ?>">
<ul>
    <li><a href="?image=blue">One</a></li>
    <li><a href="?image=red">Two</a></li>
    <li><a href="?image=purple">Three</a></li>
</ul>


<img src="<?= $image ?>" alt="" width="200">
</body>
</html>



