<?php
$employ=[
  [1, "sabbir","manager",50000],
  [2,"kabir","gateman",20000],
  [3,"Rasel","director",70000],
  [4,"mina","operator",25000]
];
echo "<table border='1px' cellpadding='4px' cellspacing='0'>";
echo "<tr>
  <th> Emp Id</th>
  <th>Name</th>
  <th>Degignation</th>
  <th>Salary</th>
</tr>";
foreach ($employ as $v1) {
  echo "<tr>";
  foreach ($v1 as $v2) {
    echo   "<td> $v2 </td> ";
  }
  echo "<tr>";

}
echo "</table>";
 ?>
