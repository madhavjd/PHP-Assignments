<!-- Write a PHP program to find the largest of three numbers using ternary
Operator. -->
<?php
function largest($x,$y,$z){
    $max = $x;
    $max = $x;
  $max = ($x > $y)? (($x > $z)? $x : $z) : (($y > $z)? $y : $z);
  echo "Largest number among $x, $y and $z is: $max\n";
}
largest(100, 50, 25);
echo "<br>";
largest(50, 50, 25);
?>