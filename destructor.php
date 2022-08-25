<?php

/*
    class des{
        public $name;
        public $color;
        
        function __construct($name){
            $this->name = $name;
        }
        function __destruct(){
            echo "This car is{$this->name}";
        }

    }

    $obj = new des(' "Tesla"');

    */

    
    class car{
        public $name;
        public $color;

        function __construct($name,$color){
            $this->name = $name;
            $this->color = $color;
        }
        function __destruct(){
            echo "This car is {$this->name} and This color is {$this->color}";

        }

    }

    $tesla = new car ("Tesla","Silver");




?>