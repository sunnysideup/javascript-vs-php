<?php

$x = 0;
echo "START";
echo "\n";
$start = microtime(TRUE);
while ($x < 1000000000) {
    $x++;
}
$end = microtime(TRUE);
echo "\n";
echo "\n";
echo $end - $start . ' seconds';
echo "\n";
echo "\n";
echo "DONE";
