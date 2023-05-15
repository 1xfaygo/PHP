<!DOCTYPE html>
<html>
<body>

<?php
function tafelvn($x){ 
$number = array(3);
foreach($number as $value){
  for ($i = 0; $i <= 10; $i++) {
    $totaal = $number[0]*$i;
  echo "The number is:" .$totaal. "<br>";
  }
}
echo "<br>";
for ($i = 0; $i <= 10; $i++) {
    $totaal = $i*$x;
  echo "The number is:" .$totaal. "<br>";
  }
}
tafelvn(6)
?>  

</body>
</html>
