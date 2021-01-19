<?php 
        abstract class Animal {
            function __construct($name, $imgUrl, $sound) { 
                $this->name = $name;
                $this->imgUrl = $imgUrl;
                $this->sound = $sound;
            }
           
            public $name; 
            public $imgUrl;
            public $sound; 


        abstract function makeSound();

        public function imgClick() {
            $alert = 'alert("' . $this->makeSound() . '")'; 
            return $alert;



        }

        public function imgEcho() {
            echo "<img src='" . $this->imgUrl . "' onclick='" . $this->imgClick() . "'.>";
        }

        }

        class Monkey extends Animal {
            function __construct($name, $imgUrl, $sound) {
                parent::__construct($name, $imgUrl, $sound);
            }

            
          
            function makeSound() { 
                return "hohahuha";
                
            } 
            
        }
 