<!DOCTYPE html>
<html>
<body>

<?php
function tafelvn($x){ 

  echo "<br>";
  for ($i = 0; $i <= 10; $i++) {
      $totaal = $i*$x;
    echo $i.'x' .$x.'='.$totaal. "<br>";
    }
}
tafelvn(6);
$numbers = array(3,6,8,12);
foreach($numbers as $value){
  tafelvn($value);
  // echo 'getal uit array: '.$value.'<br>';
  // for ($i = 0; $i <= 10; $i++) {
  //   echo 'tafel van '.$value.'x'.$i.'='.$value*$i.'<br>';
  // }
  echo '<br>';
}
?>  

</body>
</html>
