<!-- How can you tell if a number is even or odd without using any Condition or
loop? -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for="even-odd">Enter a number to check even-odd</label>
        <input type="number" name="evo" value="evo" id="year">
        <input type="submit" name="submit">
    </form>
</body>
</html>
<?php
$arr=array("0"=>"Even","1"=>"Odd");
if (isset($_POST['submit'])) {
$check=$_POST['evo'];

echo "Your number is: ".$arr[$check%2];
}
?>