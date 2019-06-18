<?php
include_once "templates/functions.php";

$data = "102342akasjdkas";

$data = filter_var($data, FILTER_VALIDATE_INT);

dd($data);
