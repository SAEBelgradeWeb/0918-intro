<?php

function delete_all($thing) {
    if(is_file($thing)) {
        echo $thing;
        unlink($thing);
    } else if (is_dir($thing)) {
        $directory = scandir($thing);
        array_splice($directory, 0, 2);
        foreach ($directory as $item) {
            delete_all($thing . "/" . $item);
        }
        rmdir($thing);
    }
}

delete_all("test3");
//check if file
// delete
// else check if dir
// scan dir
// delete all files- recursion - delete_all(_)
//remove dir