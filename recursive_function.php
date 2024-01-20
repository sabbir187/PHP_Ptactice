<?php
function num($n){
  if($n<=6){
    echo "<li>number: .$n</li><br> ";
    num($n+1);
  }
}
function factorial($n){
  if($n==0){
    return 1;
}  else {
    return ($n*factorial($n-1));

  }
}
$f=factorial(5);
echo "Factorial is: .$f<br>";

num(1);
?>
