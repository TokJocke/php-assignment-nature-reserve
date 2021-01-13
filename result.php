<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
    
    <?php 
        require("./animals.php");

        function printAnimals($amountOfAnimals, $animal, $name) {
            
            for ($i = 0; $i < $_POST[$amountOfAnimals]; $i++) {
               
                $animal = new $animal($_POST[$amountOfAnimals], $name); //Varför kan inte $name ersättas av $animal?
                echo $animal->name . "<br>"; 
                echo $animal->img . "<br>";
       
           
            }
        
        }

        


        printAnimals("monkeys", "Monkey", "Monkey");
        printAnimals("giraffes", "Giraffe", "Giraffe");
        printAnimals("tigers", "Tiger", "Tiger");
        printAnimals("coconuts", "Coconut", "Coconut");

       
   

   ?>












</body>
</html>




