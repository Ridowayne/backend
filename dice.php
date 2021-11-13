<?php
$number1 = rand(1, 6);
$number2 = rand(1, 6);

echo "Number1: ".$number1."<br>";
echo "Number2: ".$number2."<br>";

if($number1+$number2 > 6 && $number1+$number2 != 12){
    echo "Weldone you did well you have ". $number1+$number2;
}elseif($number1+$number2 < 6){
    echo "You did not do well you have ". $number1+$number2;
}elseif($number1 == 6 && $number2 == 6){
    echo "Bravo you have a double 6";
}else{
    echo "No number slected";
}