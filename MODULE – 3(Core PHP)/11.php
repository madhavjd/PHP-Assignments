<!-- • How can you declare the array (all type) in PHP? Explain with example -->
<?php
//There are three types of arrays :- Index array , Associative array and Multidimension array

// index array (numeric keys)
$MadhavMarks = [98, 90, 90, 100];
echo "<pre>";
print_r($MadhavMarks);

// Associative array (keys will be alpha numeric user definded value)
$MadhavMarksArrAssoc = array("MATHS" => 98, "ENG" => 90, "GUJ" => 90, "COMP" => 100);
print_r($MadhavMarksArrAssoc);

//Multidimension array
$MultiD = array("10th" => array("Madhav" => array("MATHS" => 98, "ENG" => 90, "GUJ" => 90, "COMP" => 100), "Balram" => array("MATHS" => 100, "ENG" => 95, "GUJ" => 98, "COMP" => 100)));
print_r($MultiD);
print_r($MultiD["10th"]['Balram']['MATHS']);
echo $MultiD["10th"]['Balram']['MATHS'];
?>