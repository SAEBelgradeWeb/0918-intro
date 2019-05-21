<?php
$person = [
    'name' => "Vladimir",
    'name2' => "Vladimir",
    'name3' => "Vladimir",
    'name4' => "Vladimir",
    'lastname' => "Lelicanin"
];

?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<table border="1">
    <tr>
        <th>Item</th>
        <th>Value</th>
    </tr>

    <?php foreach($person as $item => $value) : ?>
    <tr>
        <td><?= $item ?></td>
        <td><?= $value ?></td>
    </tr>
    <?php endforeach; ?>

</table>

</body>
</html>