<!--Numeric arrays-->

<?php
$cars=array("Saab","Volvo","BMW","Toyota"); 
echo $cars[0] ." ". $cars[1]." ". $cars[2]." " .$cars[3];
?> 
<br>

<!--Associative arrays--> 

<?php
$ages = array("Peter"=>32, "Quagmire"=>30, "Joe"=>34);
echo "Peter is " . $ages['Peter'] . " years old.";
?>
<br>
<!--Multidimensional Arrays--> 

<?php
$families = array(
    "Griffin"=>array("Peter", "Lois","Megan"),
    "Quagmire"=>array("Glenn"),
    "Brown"=>array("Cleveland","Loretta","Junior")
    );

    echo $families['Griffin'][1];
    ?>