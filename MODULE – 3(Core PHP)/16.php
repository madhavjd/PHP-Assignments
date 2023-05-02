<!-- • Use a for loop to total the contents of an integer array called numbers which
has five elements. Store the result in an integer called total.  -->
<?php
$numbers = [1,98,65,3,5];
print_r($numbers);
	for( $i = 0, $total = 0; $i < 5; $i++ ){
        $total = $total + $numbers[$i];
    }
    
    echo "<pre>";
    echo "Total is ".$total;
?>