<?php
include_once "templates/functions.php";
include_once "templates/header.php";

dd($_POST);
?>

<?php

if(isset($_REQUEST['name'])) {
    echo "Hello " . $_REQUEST['name'] . " " . $_REQUEST['lastname'];
    echo "<br> Your secret password: " . $_REQUEST['password'] . " is saved to database!";
}
include_once "templates/footer.php";

