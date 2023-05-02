<!-- Write a program to find whether a number is Armstrong or not -->
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
        <input type="number" placeholder="Enter a number to check armstrong" name="arm" value="arm" id="year">
        <input type="submit" name="submit">
    </form>
</body>
</html>
<?php  
if (isset($_POST['submit'])) {
    $num=$_POST['arm'];  
    $total=0;  
    $x=$num;  
    while($x!=0)  
    {  
    $rem=$x%10;  
    $total=$total+$rem*$rem*$rem;  
    $x=$x/10;  
    }  
    if($num==$total)  
    {  
    echo "Yes it is an Armstrong number";  
    }  
    else  
    {  
    echo "No it is not an armstrong number";  
    }  
}

?>  