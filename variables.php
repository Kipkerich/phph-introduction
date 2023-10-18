<!--Local and global variable-->
<?php
error_reporting(E_ALL);
$x=100; //Global Variable
function fun1()
{
$x=1234; //Local Variable
echo $GLOBALS[‘x’]; //calling Global Variable
echo $x; //calling local Variable
}
?>

<!--Variables variable-->

<?
$a=2500;
$b= ‘a’;
Echo $$b;
?>

<!-- Static variable-->

<?php
Function fun()
{
Static $x=100;
$x++;
Echo $x;
}
Fun();
Fun();
Fun();
?>

<!--Reference variable-->

<?php
$x=100;
$y=&$x; //creating reference variable
Echo $y;
$y=200;
Echo $x;
?>

<!--Constant variable-->
<?php
define("MINSIZE", 50); //Defining The Constant
echo MINSIZE; //Using the Constant
echo constant("MINSIZE"); //Same thing as the previous 
line
?>

