<?php
$marks=[
  "sabbir"=>["physics"=>79,"math"=>67,"Bangla"=>79],
    "shakil"=>["physics"=>79,"math"=>67,"Bangla"=>79],
      "Nabil"=>["physics"=>79,"math"=>67,"Bangla"=>79],
        "sakib"=>["physics"=>79,"math"=>67,"Bangla"=>79],
];
echo "<table border='1px' cellpadding='4px' cellspacing='0'>
<tr>
<th>Name</th>
<th>Physics</th>
<th>math</th>
<th>Bangla</th>
</tr>";
foreach ($marks as $key => $v1) {

  echo"<tr><td> $key</td>";
  foreach ($v1 as $v2) {
    echo"<td> $v2 </td>";
    // code...
  }
  echo "</tr>";
}
echo "</table>";

 ?>
