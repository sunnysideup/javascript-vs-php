<?php

$x = 0;
echo "start counting ...";
echo "\n";
$start = microtime(TRUE);
while ($x < 1000000000) {
    $x++;
}
echo "Counted to ".$x;
echo "\n";

$end = microtime(TRUE);
echo "\n";
echo "\n";
echo $end - $start . ' seconds';
echo "\n";
echo "\n";
echo "DONE";
