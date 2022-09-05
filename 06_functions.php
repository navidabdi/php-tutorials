<?php
/* ------------ Functions ----------- */

/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
  - Functions have their own local scope as opposed to global scope
*/

function echo_name($name = 'guest', $age = 20) {
    echo 'Youre name is ' . $name . ' and your age is ' .$age. '<br />';
}

$users = [
    [
        'name' => 'nabi',
        'age' => 30
    ],
    [
        'name' => 'Ali',
        'age' => 22
    ],
    [
        'name' => '',
        'age' => 45
    ],
    [
        'name' => 'parsia',
        'age' => 36
    ]
    ];

// echo_name();
// echo_name('Ali',22);
// echo_name('Arash',45);
// echo_name('parsia',36);

foreach($users as $user){
    // echo_name($user['name'],$user['age']);
    // echo $user['name'] . '<br />';
}

// function sum($num_1 , $num_2){
//     return $num_1 + $num_2;
// }

// echo sum(150 , 369);

// Arrow functions

// $sum = fn($num_1 , $num_2) => $num_1 + $num_2;

// echo sum(150 , 369);


// Assigning anonymous functions to variables. Often used for closures and callback functions

$sum = function ($num_1 , $num_2) {
    return $num_1 + $num_2;
};

// echo $sum(5, 5);


$x = 1;

function test(){
    // global $x;
    $x = $x + 2;
    echo $x . '<br />';
    // return $num_1 + $num_2;
   
}
test();
echo $x. '<br />';