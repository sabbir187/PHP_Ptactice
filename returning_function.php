<?php
function arithmatic($num1,$num2){
  $result=$num1+$num2;
  return $result;
}

function name($name1,$name2,$name3){
$name="$name1 $name2 $name3";
return $name;
}

function sum($n1,$n2,$n3){
  $sum=$n1+$n2+$n3;
  return $sum;
}

function division($to){
  $div=$to/3;
  return $div;
}

$total=sum(3,4,6);
$result=division($total);
echo "The Division is: $result <br>";


$n=name("Md","Sabbir","Ahmed");
echo "The name is:<i><b>$n</i><b/><br>";

$r=arithmatic(2,4);
echo "The result is: <b>$r</b><br>";
 ?>
