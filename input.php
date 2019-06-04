<?php
include_once "templates/header.php";
include_once "templates/functions.php";

$page_file = "templates/{$_GET['page']}.template.php";

if(file_exists($page_file)) {
    require_once $page_file;
} else {
    echo "404 page not found";
    die;
}


    /*
if($_GET['p'] === "home") {
    include_once "templates/home.template.php";
} else if ($_GET['p'] === "about") {
    include_once "templates/about.template.php";
} else if ($_GET['p'] === "products") {
    include_once "templates/products.template.php";
} else {
    echo "404 Page not found";
    die;
}
*/

include_once "templates/footer.php";