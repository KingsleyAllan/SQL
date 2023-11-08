<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>
<body>
    <h2>PHP Arithmetic Operators</h2>
    <p>The PHP arithmetic operators are used with numeric values to perform common arithmetical operations, such as;</p>
    <h4>1.Addition</h4>
    <p>Please Check Code.</p>
    <?php

    /*$x = 1000;  
    $y = 999;

    echo $x + $y;*/
    ?> 

    <h4>2.Subtraction</h4>
    <p>Pleae Check Code.</p>
    <?php
    /*$x = 130000;  
    $y = 543;
    
    echo $x - $y;*/
    ?>

    <h4>3.Multiplication</h4>
    <p>Please Check Code.</p>
    <?php
    /*$x = 0;  
    $y = 698;
    
    echo $x * $y;*/
    ?>

    <h4>4.Division</h4>
    <p>Please Check Code.</p>
    <?php
    /*$x = 12345678910;  
    $y = 01987654321;
    
    echo $x / $y;*/
    ?>

    <h4>5.Exponentiation</h4>
    <p>Please Check Code.</p>
    <?php
    /*$x = 235;  
    $y = 98;
    
    echo $x ** $y;*/
    ?>

    <h4>6.Modulus</h4>
    <p>Please Check Code.</p>
    <?php
    /*$x = 1010101;  
    $y = 2020;
    
    echo $x % $y;*/
    ?>  

    <h2>PHP Assignment Operators</h2>
    <p>The PHP assignment operators are used with numeric values to write a value to a variable.<br>
       The basic assignment operator in PHP is "=". It means that the left operand gets set to the <br>
       value of the assignment expression on the right.</p>
    <h4>1.Value Expression</h4>
    <p>Please Check Code.</p>
    <?php
    /*$x = 10;  
    echo $x;*/
    ?>  

    <h4>2.Addition</h4>
    <p>Please Check Code.</p>
    <?php
    /*$x = 5000;  
    $x += 20000;
    
    echo $x;*/
    ?>

    <h4>3.Subtraction</h4>
    <p>Please Check Code.</p>
    <?php
    /*$x = 123;
    $x -= 1;
    
    echo $x;*/
    ?>  

    <h4>4.Modulus</h4>
    <p>Please Check Code.</p>
    <?php
    /*$x = 15;
    $x %= 4;

    echo $x;*/
    ?>  

    <h4>5.Multiplication</h4>
    <p>Please Check Code.</p>
    <?php
    /*$x = 234;
    $x *= 432;
    
    echo $x;*/
    ?>  

    <h4>6.Division</h4>
    <p>Please Check Code.</p>
    <?php
    /*$x = 100000000000000;
    $x /= 10000000000000000;
    
    echo $x;*/
    ?>  

    <h2>PHP Comparison Operators</h2>
    <p>The PHP comparison operators are used to compare two values (number or string):</p>
    <h4>1.Equal(==)</h4>
    <p>Please Check Code.</p>
    <?php
    /*$x = 1;  
    $y = "1";
    
    var_dump($x == $y);*/
    ?>

    <h4>2.Identical(===)</h4>
    <p>Plese Check Code.</p>
    <?php
    /*$x = 100;  
    $y = "100";
    
    var_dump($x === $y);*/ 
    ?>

    <h4>3.Not Equal(!= or <>)</h4>
    <p>Please check Code.</p>
    <?php
    /*$x = 100;  
    $y = "100";
    
    var_dump($x != $y);
    
    $x = 100;  
    $y = "100";

    var_dump($x <> $y);*/
    ?>

    <h4>4.Not Identical(!==)</h4>
    <p>Please Check Code.</p>
    <?php
    /*$x = 100;  
    $y = "100";
    
    var_dump($x !== $y);*/
    ?>

    <h4>5.Greater Than(>)</h4>
    <p>Please Check Code.</p>
    <?php
    /*$x = 100;
    $y = 50;
    
    var_dump($x > $y);*/
    ?>

    <h4>6.Less Than(<)</h4>
    <p>Please Check Code.</p>
    <?php
    /*$x = 100;
    $y = 50;
    
    var_dump($x < $y);*/
    ?>

    <h4>7.Greater Than or Equal To(>=)</h4>
    <p>Please Check Code.</p>
    <?php
    /*$x = 50;
    $y = 50;
    
    var_dump($x >= $y);*/
    ?>

    <h4>8.Less Than or Equal To(<=)</h4>
    <p>Please Check Code</p>
    <?php
    /*$x = 50;
    $y = 50;
    
    var_dump($x <= $y);*/
    ?>

    <h4>9.Symbols(<=>)</h4>
    <p>Please Check Code</p>
    <?php
    /*$x = 5;  
    $y = 10;
    
    echo ($x <=> $y); 
    echo "<br>";
    
    $x = 10;  
    $y = 10;
    
    echo ($x <=> $y); 
    echo "<br>";
    
    $x = 15;  
    $y = 10;
    
    echo ($x <=> $y);*/
    ?>  

    <h2>Logical Operators</h2>
    <?php

    /*$x=5;
    $y=10;
    $z=15;

    if ($x > 0 && $y > 5) {
        echo "condition 1 is true";
    }

    if ($y < 20 || $z > 20) {
        echo "condition 2 is true";
    }

    if (!($x > 10)) {
        echo "condition 3 is true";
    }

    $x=10;
    if ($x < 5) {
        echo "x is less than 5";
    }
    else {
        echo "x is greater than or equal to 5";
    }


    $grade=95;
    if ($grade >= 90) {
        echo "your grade is A";
    } elseif ($grade >= 80) {
        echo "your grade is B";
    } elseif ($grade >= 70) {
        echo "Your grade is C";
    } else {
        echo "your grade if F";
    }*/
    ?>
    <h4>1.If Elseif Else Statement.</h4>
    <?php

    $age=18;
    if ($age >= 70) {
        echo "That person is a senior citizen. ";
    } elseif ($age <= 65) {
        echo "That person is an adult. ";
    } elseif ($age >= 18) {
        echo "That person is an adult";
    } else {
        echo "that person is a minor";
    } 
    ?>

    <h4>2.Switch Statement.</h4>
    <?php
    $age = "30";
    switch($age){
        case "18":
            echo "That person is an adult";
            break;
        case "30":
            echo "That person is an adult";
            break;
        case "65":
            echo "that person is a senior citizen"; 
            break;
        default:
            echo "You are a minor";      
    }
    ?>
    
</body>
</html>