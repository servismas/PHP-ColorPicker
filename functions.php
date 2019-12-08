<?php
function AddNumbersColor($n1, $n2, $color='#EE33FF')
{
echo "Sum is: <span style='color:".$color.";'>".
($n1+$n2)."</span><br/>";
}
function AddNumbers($n1, $n2)
{
return ($n1+$n2);
}
function IncNumberByTen($n1)
{
$n1+=10;
echo 'From function:'.$n1.'</br>';
}
function IncNumberByTenRef(&$n1)
{
$n1+=10;
echo 'From function:'.$n1.'</br>';
}
function ColorTitle($color)
{
global $title;
echo "<h1 style='color:".$color.";'>".$title."
</h1>";
}

?>
