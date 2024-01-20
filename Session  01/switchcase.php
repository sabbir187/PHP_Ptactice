<?php
$age=131;
switch ( true) {
  case ($age>=2 && $age<33):
  echo "eligible";
    break;
    case ($age>=20 && $age<33):
    echo "not eligible";
      break;
      default:
    echo "Enter valid age";
    break;
}
 ?>
