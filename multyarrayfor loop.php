<?php
$emp=[
       [109,"jawad","manager",19900],
       [110,"ranjha","helper",1800],
       [111,"qasim","call duty",1700],
       [112,"ali","dealing",10000],


];
for($row=0;$row<4;$row++){
    for($col=0;$col<4;$col++){
        echo $emp[$row][$col]."  ";
    }
echo "<br>";
}

echo "<pre>";
print_r($emp);
 echo "</pre>";

?>