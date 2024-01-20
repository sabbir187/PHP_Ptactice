<?php
function square($n,$nam){
  return [$n = $nam];
}
$a=[1,3,4,5,6];
$name=['sabbir','kabir','shibhlu','ahnaf','shakil'];
$newArray=array_map('square',$a,$name);
echo "<pre>";
print_r($newArray);
echo "</pre>";
 ?>
