<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If Statements --------- */

// $age = '20';

echo 'script is working!' . '<br /><br /><br />';

// if($age == 20){
//     echo 'برقرار هست شرط';
// }else {
//     echo 'برقرار نیست شرط';
// }

// $name = 'Nabi';

// if (empty($name)){
//     echo 'لطفا نام کاربری خود را وارد کنید';
// } elseif($name === 'admin') {
//     echo 'شما نام کاربری ادمین گذاشتید لطفا برای امنیت ان را تغییر دهید';
// }else {
//     echo $name;
// }

/* -------- Switch Statements ------- */

// $favcolor = 'green';

// switch($favcolor) {

//     case 'red':
//         echo 'Product category red';
//         break;
//     case 'blue':
//         echo 'Product category blue';
//         break;
//     case 'green':
//         echo 'Product category green';
//         break;

//         default:
//         echo 'please chose a valid color';
// }

$is_member = false;

echo $is_member ? 'you are a user' : 'you are not a user';