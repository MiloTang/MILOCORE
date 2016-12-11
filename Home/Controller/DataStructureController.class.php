<?php
$x=5;
$y=6;
function mytext() {
global $x,$y;
$Y=$X+$Y;
}
mytext();
echo $y;
?>