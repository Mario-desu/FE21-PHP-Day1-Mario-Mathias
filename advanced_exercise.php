<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $characters = array(
        "Dragonball" => array
        (
            "Goku" => 5,
            "Vegeta" => 8,
            "Piccolo" => 5
        ),

        "Supermario" => array
        (
            "Mario" => 50,
            "Luigi" => 45,
            "Peach" => 35
        ),

        "Marvel" => array
        (
            "Deadpool" => 40,
            "Wolverine" => 107,
            "Iron Man" => 42
        )

    );

    echo $characters['Dragonball'] ['Goku'];

    echo "<h2> Goku from Dragonball is ".$characters['Dragonball']['Goku']." years old </h2>";
    echo "<h3> Luigi from Supermario is ".$characters['Supermario']['Luigi']." years old</h3>";
    echo "<h4> Wolverine from Marvel has got a <u>weight</u> of ".$characters['Marvel']['Wolverine']." kilograms</h4>";
    

        foreach ($characters['Supermario'] as $key=>$value){
            echo "$key is $value years old <br>";
            
        }
            

    // echo "Power ranking of Goku is " . $dragonBall['Goku'] . "<br/>";
    // echo "Power ranking of Vegeta is " . $dragonBall['Vegeta'] . "<br/>";
    // echo "Power ranking of Piccolo is " . $dragonBall['Piccolo'] . "<br/>";
    
    ?>
</body>
</html>