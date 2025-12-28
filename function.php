<?php

function sum($a, $b)
{

    $cum = $a + $b;

    return $cum;
}


$add = sum(1, 2);

echo "sum", $add, "\n";



// &$x means "I'm giving you direct access to the original variable, not a copy."
function addRef(&$x, $y)
{
    $x = $x + $y;
    return $x;
}

$num = 9;

addRef($num, 12);

echo "prac", $num, "\n";

// A closure is a function that "remembers" its birth environment, even after that environment has gone away.


$anonymous = function ($num) {
    return $num = $num + 1;
};

$final = $anonymous(12);

echo $final;


$foodlist = array("apple", "banana", "mango");

array_pop($foodlist);

echo print_r($foodlist, true);
echo var_export($foodlist, true);


// callbackfunction

$numbers = ['shakti', 'amu'];
function square($number)
{

    return $number * $number;
}

function applyCallback($numbers, $callback)
{
    foreach ($numbers as $number) {
        echo $callback($number);
    }

    $numbers = [1, 2, 3, 4, 5];
    applyCallback($numbers, 'square');
}

$users = [
    ['name' => 'John', 'age' => 25],
    ['name' => 'Jane', 'age' => 30],
    ['name' => 'Bob', 'age' => 20]
];

// Callback approach
function sortByAge($a, $b)
{
    return $a['age'] <=> $b['age'];
}
usort($users, 'sortByAge');

// Closure approach (more common)
usort($users, function ($a, $b) {
    // spaceship opetator
    // <=>

//     $a <=> $b returns:
//   -1  if  $a < $b    (left is smaller)
//    0  if  $a == $b   (both are equal)
//    1  if  $a > $b    (left is bigger)

    //     Spaceship Operator <=> - Simple Explanation
    // What it Looks Like:
    // <=> - It looks like a spaceship (or a Pac-Man!)

    // What it Does:
    // It compares two values and tells you which one is bigger or if they're equal.
    return $a['age'] <=> $b['age'];
});

$add = fn($a, $b) => $a + $b;

echo "addition", $add(3, 4);

// Arrow Functions Capture Variables by Value Automatically
$y=2;
$fn1=fn($a)=>$a+$b;

$fn2=function($x)use($y){
return $x+$y;
};

// string fucntions

$name='shakti';

// Hash the password (string)
$hashedPassword = password_hash($name, PASSWORD_DEFAULT);

echo "Original: $name\n";
echo "Hashed: $hashedPassword\n";

$userDate=date("Y-m-d H:i:s");

echo $userDate,"\n";

$dateWithMoth=date("d/m/y");
echo $dateWithMoth,"\n";

$dateWithMouthUser=date("d.M.Y/D");

echo $dateWithMouthUser,"\n";


$tempsetp=time();

echo $tempsetp,"\n";

echo (date("F d, Y h:i:s A",$tempsetp));

