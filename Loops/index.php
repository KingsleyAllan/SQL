<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>LOOPS</h2>
    <h4>For Loop</h4>
<?php

for($i = 0; $i < 10; $i++) {
    echo "The value of i is: $i <br>";
}

?>

<h4>While Loop</h4>
<?php

$j = 0;
while ($j <= 5) {
    echo "The value of j is: $j <br>";
    $j++;
}

?>

<h4>Do-While Loop</h4>
<?php

$k = 0;
do{
    echo "The value of k is $k <br>";
    $k++;
}
while ($k <= 5);

?>
<h4>For-Each Loop</h4>
<?php

$colors = array("red",  "green", "blue", "sail", "off-white", "coffee", "magenta","navy", "midnight");
foreach ($colors as $color) {
    echo "The color is: $color <br>";
}

?>

<h4>Break and Continue</h4>
<?php

for($i = 0; $i < 10; $i++) {
    if ($i ==5) {
        break;
    }
    echo "The value of i is: $i <br>";
}

?>
<br>
<?php

$j = 0;
while ($j <= 5) {
    $j++;
    if ($j % 2 == 0) {
        continue;
    }
    echo "The value of j is: $j <br>";
}

?>
</body>
</html>
