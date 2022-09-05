<?php
/* ----------- Arrrays ----------- */

/*
  If you need to store multiple values, you can use arrays. Arrays hold "elements"
*/

$nums = [1,2,3,4,5];

// var_dump($nums);

// echo $nums[4];

// $colors = ['red','blue','black'];

// echo $colors[2];

$colors = [
    'red' => '#f00',
    'green' => '#0f0',
    'blue' => '#00f'
];

// echo $colors['red'];

$user_1 = [
    'first_name'=> 'Nabi',
    'last_name'=> 'Abdi',
    'email'=> 'info@webkima.com',
];
// echo $user_1['first_name'];

$users = [
    [
        'first_name'=> 'Nabi',
        'last_name'=> 'Abdi',
        'email'=> 'info@webkima.com',
    ],
    [
        'first_name'=> 'Ali',
        'last_name'=> 'mohamadi',
        'email'=> 'info@webkima.com',
    ],
    [
        'first_name'=> 'maral',
        'last_name'=> 'mati',
        'email'=> 'info@webkima.com',
    ],
];

// echo $users[2]['first_name'];
// var_dump($users[0]);

var_dump(json_encode($users));