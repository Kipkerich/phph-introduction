<html>
<head>
<title>Writing PHP Function</title>
</head>
<body>
<?php
function writeMessage() /* Defining a PHP Function */
{
 echo "You are really a nice person, Have a nice time!";
}
writeMessage(); /* Calling a PHP Function */
?>
<br>
<!--Functions with parameters-->
<?php
function addFunction($num1, $num2)
{
 $sum = $num1 + $num2;
 echo "Sum of the two numbers is : $sum";
}
addFunction(500, 200);
?>
<br>
<!--Passing arguements by reference-->
<?php
function addFive($num)
{
 $num += 5;
}
function addSix(&$num)
{
 $num += 6;
}
$orignum = 10;
addFive($orignum );
echo "Original Value is $orignum<br />";
addSix( $orignum );
echo "Original Value is $orignum<br />";
?>

<!--Function which returns value-->
<?php
function sumFunction($num1, $num2)
{
 $sum = $num1 + $num2;
 return $sum;
}
$return_value = sumFunction(10, 20);
echo "Returned value from the function : $return_value"
?>
<br>
<?php
function printMe($param = NULL)
{
 print $param;
}
printMe("This is test");
printMe();
?>
</body>
</html>