<?php
include_once "templates/functions.php";

//filesize("test.txt");

$dir = scandir("templates");
//array_splice($dir, 0, 2);
echo "<ul>";
foreach ($dir as $item ) {
    echo "<li> $item </li>";
}

echo "</ul>";

//$file = fopen("test2.txt","x");
//fwrite($file, "This is me adding");
//$text = fread($file, filesize("test.txt"));
//fclose($file);
//dd($text);

//$content =  file_get_contents("https://www.php.net/manual/en/function.fopen.php");

// file_put_contents("test.txt",  " Data " . $content );
//echo $content;


//rename("new_name.txt", "templates/new_name.txt");

//unlink('templates/new_name.txt');

//rmdir('templates');

$dir = opendir("templates");

while($item = readdir($dir)) {
    echo $item . "<br>";
}

closedir($dir);