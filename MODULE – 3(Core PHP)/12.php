<!-- Covert a JSON string to array -->
<?php
$jsstr = '{"name1":"John","name2":"Madhav","name3":"Kamal","name4":"Ronak"}';
echo "<pre>";
echo "Json String:- <br>";
print_r($jsstr) ;
echo "</pre>";

echo "<pre>";
echo "Converting Json String to array:-<br>";
print_r(json_decode($jsstr,true)) ;
echo "</pre>";
?>