<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <style>
        img {
            max-width: 300px;
            margin-bottom: 30px;    
        }
        .box {
            display: flex;
            align-items: center;
            flex-direction: column;
            margin-right: 30px;
        }
        .group {
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
        }
    </style>
</head>

<body>
    
    <?php 

        require "./animals.php";

        $tigers = $_POST["tigers"];
        $monkeys = $_POST["monkeys"];
        $giraffes = $_POST["giraffes"];
        $coconuts = $_POST["coconuts"];
        $colletedAnimals = array();
        
        
        if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
        
            for($i=0;$i<$monkeys;$i++) {
                
                $monkey = new Monkey("apa", "./pictures/apa.jpg", "oooOOO");
                array_push($colletedAnimals, $monkey);

            }

        
            foreach ($colletedAnimals as $animal) {
                echo $animal->name;
                echo "<br>";
                $animal->imgEcho();
                echo "<br>";
                
    
            }
        }

            
            
        
            
        
        
      
   
   
   ?>


</body>
</html>




