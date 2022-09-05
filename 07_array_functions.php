<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

$fruits = ['apple','banana','orange'];

// Get array length
// echo count($fruits);

// Search array
// var_dump(in_array('apple', $fruits)) ;

// Add to an array
$fruits[] = 'grape';
array_push($fruits, 'mango', 'raspberry');
array_unshift($fruits, 'kiwi'); // Adds to the beginning

// Remove from array
array_pop($fruits); // Removes last
array_shift($fruits); // Removes first
// Remove specific element
unset($fruits[2]);

// var_dump($fruits) ;


// Split into chunks of 2
// $chunkedArray = array_chunk($fruits, 2);s
// var_dump($chunkedArray);

// var_dump($chunkedArray[1][1]);

// Concatenate arrays
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = array_merge($arr1, $arr2);
// var_dump($arr3);
$arr4 = [...$arr1, ...$arr2]; // Use Spread
// var_dump($arr4);

// $numbers = [1,2];
// Create array of numbers with range()
$numbers = range(1, 5);
// Map through array and create a new one
// $newNumbers = array_map(function ($number) {
//     echo "Number ${number} <br />";
//   }, $numbers);

var_dump(array_reverse($numbers));