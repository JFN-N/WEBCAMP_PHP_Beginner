<?php

$x=0;
$y=1;

echo "$x\n";
echo "$y\n";

$z=0;

while($z<11000){
    $z=$x+$y;
    echo "$z\n";

    $x=$y;
    $y=$z;
}
