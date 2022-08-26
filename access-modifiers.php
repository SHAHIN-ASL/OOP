<?php

/*
    class book{
        public $name;
        protected $color;
        public $author;

        function __construct($name,$color,$author){
            $this->name=$name;
            $this->color=$color;
            $this->author=$author;
        }

    }

    $obj = new book("Algorithm","Red","Ahsanul Islam");

    echo $obj->name."<br>";
    echo $obj->color."<br>";
    echo $obj->$author;
    
  */
  
  

    class tree {
        public $name;
        public $color;
        public $height;

        function set_name($n){
            $this->name = $n;
        }
         function set_color($n){
            $this->color = $n;
        }
         function set_height($n){
            $this->height = $n;
        }
    }

    $obj = new tree();

    $obj->set_name("Mango Tree");
    $obj->set_color("Greeen");
    $obj->set_height("10'");
     


   

?>