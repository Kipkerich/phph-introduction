<html> 
<title>HTML with PHP</title>
<body>
    <h1>My Example</h1>
        <?
    //Scalar Data Types
        //Boolean
        $a=”false”;
        Echo is_bool($a);
        $a=(bool)$a;
        Echo is_bool($a);
        //Integer
        $a=100;
        Echo is_int($a);
        Echo $a;
        //Float
        $a=10.15;
        Echo is_int($a);
        Echo $a;
        //String
        $str=’abc’;
        Echo $str;
    //Compound Data Type
        //Array
        $arr=array{10,20,30};
        Print_r($arr);

        ?>
            
             <!-- 
             ?>
            //Object
             Class emp
                {
                Function empdata()
                {
                    Echo(“within the class”);
                }
                $obj=new emp();
                $obj->empdata();
            }
            %> --->

            <!--Special Data types-->
             <!--Resources-->
            <?
                    If($con=mysql_connect(“localhost”,”root”,””))
                    {
                        Echo(“Connected”);
                    }
                    Echo $con;
                    Echo get_resource_type($con);
            ?>
            
            <!--NULL-->
            
            <?
            $x=100;
            If(is_null($x))
                Echo “x is null”;
            Else
                Echo “x is not null”;
            Unset($x);
            If(is_null($x))
                Echo “x is null”;
            Else
                Echo “x is not null”;
            ?>

</body>
</html>