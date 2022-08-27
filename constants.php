<?php
/*

class cons{
    const MESSAGE = "How are you?";
}

echo cons::MESSAGE;

*/


class test{
    const MESSAGE = "I am fine";
    public function fun1(){
        echo self::MESSAGE;
    }
}

$object = new test();

$object->fun1();


?>