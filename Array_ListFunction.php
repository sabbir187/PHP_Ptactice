<?php
$employ=[
  [1, "sabbir","manager",50000],
  [2,"kabir","gateman",20000],
  [3,"Rasel","director",70000],
  [4,"mina","operator",25000]
];
echo "<table border='1px' cellpadding='4px' cellspacing='0'>
<tr>
<th>id</th>
<th>Name</th>
<th>Designation</th>
<th>Salary</th>
</tr>";
foreach ($employ as list($id,$name,$designation,$salary)) {

  echo "<tr><td>$id</td><td>  $name </td><td> $designation </td><td> $salary </td><br>";
}
echo "</table>";
 ?>
