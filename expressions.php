<?php

(2 > 1) && (3 > 5); // false

(2 > 1) OR (3 > 5); // true

(!(2 > 1) OR (3 > 5)) AND (4 == 4); //false

if((2 > 1) AND (3 > 5)) {
    ///
}

if((2> 1)) {
    if(3 > 5) {
        ///
    }
}

$result = (2 > 1) ? "yes" : "no";

