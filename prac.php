<?php

// (string) - Converts to data type String
// (int) - Converts to data type Integer
// (float) - Converts to data type Float
// (bool) - Converts to data type Boolean
// (array) - Converts to data type Array
// (object) - Converts to data type Object
// (unset) - Deprecated. Converts to data type NULL

$a = 1;
$b = 80;
$c = $a / $b;

// type casting
// $d = (Float)$c;

echo "value:", $c, "\n";

// var_dump($d);
var_dump($c);
$d = ($a > $b) ? "greater" : "smaller";

echo $c, "\n";


$case = "sunday";
switch ($case) {

    case "sunday":
        echo "hello sundayn", "\t";

        break;


    default:

        echo "Bad sunday";

        break;
}


for ($i = 0; $i <= 9; $i++) {

    echo $i, "\n";
}


$numbersets = array(1, 2, 3, 4, 5, 6, 7);

foreach ($numbersets as $key => $value) {

    echo "index", $key, "\t", "value:", $value, "\t";
}


var_dump($c);


// Type juggling in PHP refers to PHP's automatic conversion of values between data types during operations, such as arithmetic or comparison.

// type juggling:


// string is converted to int
$str="5";

$num=40;

$d=$str+$num;
echo "the sum",$d,"\t";

// boolean +int

$bool=false;
$num2=23;

$sum=$bool+$num2;

echo  $sum;

$num=true;

$number=1;

if($num==$number){
    echo "equals";
}

else {

    echo "not";
}






