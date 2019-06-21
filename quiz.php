© <?= date("Y") ?> My Cool Website
<?php

$birthday = strtotime("7. December 2019");
$now = time();

$diff = $birthday - $now;
$days = $diff / 60 / 60 / 24;
?>

<form action="" method="get">
    <input type="text" name="username">
    <button>Submit</button>
</form>

<?php
if(isset($_GET['username'])) {
    echo "Hello ".$_GET['username'];
}
/*
 * Write a PHP script to calculate the difference between two dates.
Sample dates : 1981-11-04, 2013-09-04
Expected Result : 31 years, 10 months, 11 days
 */


$date1 = strtotime("1981-11-04");
$date2 = strtotime("2013-09-04");

$diff = $date2 - $date1;
$years_ts = $diff / 60 / 60 / 24 / 365;
$years = floor($years_ts);
$remainder = $diff - ($years * 365 * 24 * 60 * 60);

$months_ts = $remainder / 60 / 60 / 24 / 30;
$months = floor($months_ts);
$remainder = $remainder - ($months * 30 * 24 * 60 * 60);


$days_ts = $remainder / 60 / 60 / 24;
$days = floor($days_ts);

echo "The difference is {$years} years, {$months} months and {$days} days.";
echo "<br>";
$text = "Whatever Goes Around";

$ar_text = explode(" ", $text);

foreach ($ar_text as $word) {
    $word_ar = str_split($word);

    $word_ar[0] = "<span style='color:red'>" . $word_ar[0] ."</span>";
    if(implode($word_ar)) {
        $new_string[] = implode($word_ar);
    }
}
echo implode(" ", $new_string);

echo "<br>";

function validate_email($email)
{
    return (filter_var($email, FILTER_VALIDATE_EMAIL)) ? $email : "Invalid email";
}

echo validate_email("v.lelicanin@saeedu");

//Create a simple script that will copy all files from one directory to another. Upload the whole project.

//
//$dir = "something";
//$newdir = "something_else";
//
//$files = scandir($dir);
//
//foreach ($files as $file) {
//    if(is_file($file)) {
//        copy($file, $newdir . "/" . $file);
//    }
//}


/*Create a PHP script with 3 links. Clicking on any link should open different image and change background color of the page. Everything should work with just one php file and 3 images (just use URL to images online). */

//List dates of football matches on Champions League, having in mind that games are played on Tuesdays and Wednesdays, starting from the beginning of the year. Please make sure that January 1st - 2nd and April 30th - May 1st are holidays.

echo "<br>";
for($i = 0; $i < 40; $i++) {
    $ts = strtotime("1st January 2019 +{$i} Tuesday");
    echo date("d. m. Y. l", $ts) . "<br>";

    $ts = strtotime("1st January 2019 +{$i} Wednesday");
    echo date("d. m. Y. l", $ts) . "<br>";
}
?>








