<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }


    </style>
</head>
<body>
<?php

$myName = "Mario";

echo "<h1>$myName</h1>";

?>

<?php

$name = "Peter";
$age = "30";
$jobTitle = "Sales Consultant";

echo "Hi, my name is $name, I am $age, and I work as a $jobTitle."

?>

<?php

$names = array('Mark', 'John', 'Georg', 'Lisa');

echo "The third player in the team is " . $names[2];

?>
    
</body>
</html>