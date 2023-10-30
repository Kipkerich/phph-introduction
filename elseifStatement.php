<html>
<body>
<?php
$d=date("D");
if ($d=="Fri")
 echo "It is the last working day!"; 
elseif ($d=="Sun")
 echo "It is a new week!"; 
elseif ($d=="Mon")
echo "It is the first working day!";
else
 echo "Have a nice day!"; 
?>
</body>
</html>