<?php
function sum($a,$b){
    return $a+$b;
}
function sub($a,$b){
    return $a-$b;
}
function multi($a,$b){
    return $a*$b;
}
function devid($a,$b){
    return $a/$b;
}
function mod($a,$b){
    return $a%$b;
}


echo "sum =".sum(12,3);
echo"<br>";
echo "subtraction =".sub(12,3);
echo"<br>";
echo "Multiflaction =".multi(12,3);
echo"<br>";
echo "Devision =".devid(12,3);
echo"<br>";
echo "mod =".mod(12,10);

?>