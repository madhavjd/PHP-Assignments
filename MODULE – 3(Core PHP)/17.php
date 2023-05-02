<!-- Declare a Multi Dimensioned array of floats called balances having Three
rows and five columns. -->
<?php
$balances = array(
 "row1"=>array("col1"=>"Hello","col2"=>5,"col3"=>18,"col4"=>17,"col5"=>8),
 "row2"=>array("col1"=>90,"col2"=>56,"col3"=>12,"col4"=>11,"col5"=>13),
 "row3"=>array("col1"=>3,"col2"=>76,"col3"=>13,"col4"=>54,"col5"=>12)
);
echo"<pre>";
print_r($balances);
?>