<?php


class laptop {
    
    public $name;
    public $color;

    function set_name($name){
        $this->name = $name;
    }

    function get_name(){
        return $this->name;
    }
}

$obj = new laptop();
$obj2 = new laptop();
 
$obj->set_name("HP Laptop");
$obj2->set_name("DELL Laptop");

echo $obj->get_name();
echo "<br>";
echo $obj2->get_name();

?>