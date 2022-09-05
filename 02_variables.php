<?php

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = 'Nabi';
$age = 30;
$money = 10.500;
$is_member = false;
$arr = ['user1','user2',2,false];

$webkia;

// var_dump($name);
// var_dump($age);
// var_dump($money);
// var_dump($is_member);
// var_dump($webkia);

echo 'My name is ' . $name . ' and my age is ' . $age;

echo "My name is $name and my age is $age";

echo "My name is ${name} and my age is ${age}";