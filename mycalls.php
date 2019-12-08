<?php
include('functions.php');

AddNumbersColor(110, 50000);
$total = AddNumbers(1,2)+AddNumbers(100,1000);
echo $total.'</br>';
$number=5;
IncNumberByTen($number);
echo 'From outside function:'.$number.'</br>';
$number2=5;
IncNumberByTenRef($number2);
echo 'From outside function:'.$number2.'</br>';
$title="Chapter 1";
ColorTitle('#EE33FF');
?>