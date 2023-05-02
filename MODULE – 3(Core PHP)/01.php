<!-- Write a PHP program to enter marks of five subjects Physics, Chemistry,
Biology, Mathematics and Computer, calculate percentage and grade by if
else -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Result</title>
</head>
<body>
<h1> Display Grade of Student as per marks obtained</h1>
<form method="POST">
Enter the Marks of the student </br>
<fieldset>
Physics:  <input type="number" name="phy"/></br></br>
Chemistry:<input type="number" name="chem"/></br></br>
Maths:    <input type="number" name="maths"/></br></br>
Biology:  <input type="number" name="bio"/></br></br>
English:  <input type="number" name="eng"/></br></br>
<input type="submit" value="Calculate" name="submit"/>
</fieldset>
</form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
$ph=$_POST['phy'];
$ch=$_POST['chem'];
$mt=$_POST['maths'];
$bi=$_POST['bio'];
$en=$_POST['eng'];
$per=0;
    $per=($ph+$ch+$mt+$bi+$en)/5;
    if ($ph || $ch || $mt || $bi || $en <40) {
       echo "You are fail";
    }
    else {
        if($per>=90)
        {
         $gr="A";
        }
        else if($per>=80)
        {
         $gr="B";
        }
        else if($per>=70)
        {
         $gr="C";
        }
        else if($per>=60)
        {
         $gr="D";
        }
        else if($per>=40)
        {
         $gr="E";
        }
        else
        {
         $gr="Fail";
        }
        echo"Percentage obtained by student is $per% and grade obtain by student is $gr</br>";
    }
    }
    
?>