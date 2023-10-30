 
 <!--For Loop-->
 <html>
<body>
<?php
$a = 0;
$b = 0;
for( $i=0; $i<5; $i++ )
{
 $a += 10;
 $b += 5;
}
echo ("At the end of the loop a=$a and b=$b" );
?>
<br>
<!--Do-while loop-->
<?php
$i = 0;
$num = 0;
do
$i++;

while( $i < 10 );
echo ("Loop stopped at i = $i" );
?>
<br>
<!--For each loop-->
<?php
$array = array( 1, 2, 3, 4, 5);
foreach( $array as $value )
{
 echo "Value is $value <br />";
}
?>



</body>
</html>

<!--Break and continue statement-->
<html>
<body>
    <!--Break statement-->
<?php
$i = 0;
while( $i < 10)
{
 $i++;
 if( $i == 3 )break;
}
echo ("Loop stopped at i = $i" );
?>
<br>
    <!--Continue statement-->
    <?php
$array = array( 1, 2, 3, 4, 5);
foreach( $array as $value )
{
 if( $value == 3 )continue;
 echo "Value is $value <br />";
}
?>

</body>
</html>