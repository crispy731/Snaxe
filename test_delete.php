<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php



$x = 12;
$a = 34657;
function newCalculator($x) {
    $number1 = $x * 0.75;
    echo "This is 75% of your number:" . " $number1";
} 

function oldCalculator($a) {
    $number2 = $a * 0.75;
    echo "This is 75% of your number:" . " $number2";
}

echo newCalculator(34);
echo "\n";
echo oldCalculator(27362387);


?>








</body>
</html>