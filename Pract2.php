<?php
for ($i = 1; $i <= 100; $i++) {
    $f = true;
    if ($i > 1) {
        for ($j = 2; $j <= sqrt($i); $j++) {
            if ($i % $j === 0) {
                $а = false;
                break;
            }
        }
    } else {
        $f = false;
    }
    if ($f) {
        echo $i . " ";
    }
}
