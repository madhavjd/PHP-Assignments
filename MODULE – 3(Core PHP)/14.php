<!-- • Get random values from array  -->
<?php
$arr = array( "a"=>"210", "b"=>"31", "c"=>"7", "d"=>"20" );
 
// Use array_rand function to returns random key
$key = array_rand($arr);
 
// Display the random array element
echo $arr[$key];
?>