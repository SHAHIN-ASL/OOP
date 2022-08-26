<?php

/*

class player{
    public $name;
    public $age;
    public $salary;

    function __construct($n, $a, $s){
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }

    

    function info(){
        echo "<h3>Player Profile</h3>";
        echo "Player Name : ".$this->name . "<br>";
        echo "Player Age : ".$this->age . "<br>";
        echo "Player Salary : ".$this->salary . "<br>";
    }


}

class manager extends player{
    public $ta = 1000;
    public $phone = 500;
    public $totalsalary;

    function info(){
        $this->totalsalary = $this->salary + $this->ta + $this->phone;

        echo "<h3>Manager Profile</h3>";
        echo "Manager Name : ".$this->name . "<br>";
        echo "Manager Age : ".$this->age . "<br>";
        echo "Manager Salary : ".$this->totalsalary . "<br>";
    }
    
   
}



//$e1 = new player ("Shakib", 33 , 400000);
$e1 = new player ("Shakib", 33 , 400000);
$e2 = new manager ("Sujon", 50 , 300000);

$e1->info();
$e2->info();

*/


/*

class car {
    public $name;
    public $color;

    function __construct($name,$color){
        $this->name = $name;
        $this->color = $color;
    }
    function intro(){
        echo "This car is {$this->name} and this color is {$this->color}"."<br>";
    }
}

class bus extends car{
    function msg(){
        echo "Is it car or bus?";
    }
}

$object = new bus("Tesla","Red");

$object->intro();
$object->msg();

*/



class car {
    public $x;
    public $y;

    public function __construct($a,$b){
        $this->x = $a;
        $this->y = $b;
    }
    protected function intro(){
        echo "This car is {$this->x} and This color is {$this->y}.<br>";
    }
}

class honda extends car{
    public function msg(){
        echo "Is it Honda or Car";
    }
}

$object = new honda("Tata","Yellow");

$object->intro();
$object->msg();








?>