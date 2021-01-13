<?php 
        abstract class Animal {
            function __construct($quantity, $name) {
                $this->quantity = $quantity;
                $this->name = $name;

            }

            public $img;
           
         //   public $quantity; Dessa gör ingen skillnad?
         //   public $name; 

            public function printAnimal() {
                
            }

        }

        class Monkey extends Animal {
            function __construct($quantity, $name) {
                parent::__construct($quantity, $name);
            }
            
          public $img = "<img src='./pictures/apa.jpg'>";
            
        }
/* 
        class Giraffe extends Animal {
            function __construct($quantity, $name) {
                parent::__construct($quantity, $name);
            }
            
     
            
        }

        class Tiger extends Animal {
            function __construct($quantity, $name) {
                parent::__construct($quantity, $name);
            }
            
     
            
        }

        class Coconut extends Animal {
            function __construct($quantity, $name) {
                parent::__construct($quantity, $name);
            }
            
     
            
        }

 */
?>