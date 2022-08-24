<?php

/*
     class class1{
        function fun1(){
            echo "This is OOP First Function";
        }
        function fun2(){
            echo "This is OOP Second Function";
        }
        function fun3(){
            echo "This is OOP Third Function";
        }
    }

    $obj = new class1();
    $obj -> fun1();

*/



/*
class class2{
    public $x = 100;
    function fun4(){
        echo $this -> x;
    }
}

$obj = new class2();
$obj -> fun4();

*/




class class3{
    public $x = 1;
    function fun5 (){
        return $this -> x++;
    }
}

$obj1 = new class3();
$obj2 = new class3();

$obj1 -> fun5();

echo $obj1 -> x;

echo "<br>";

echo $obj2 -> x;







?>
