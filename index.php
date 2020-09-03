<?php

/** [1] - Normal function */
$greet = function () {
    return "Hey";
};

/**[1] - Arrow function */
$message = fn ($name) => "Hello ". $name;
//var_dump($message("Francisco"));


/**[2] - Normal function */
$users = [['id' => 1, 'name' => 'Carlos'], ['id' => 2, 'Abgail']];

$ids = array_map(function($user){
    return $user['id'];
}, $users);

/**[2] - Arrow function */
$user_ids = array_map(fn ($user) => $user['id'], $users);
//var_dump($user_ids);

/**[3] - Normal function */
$name = 'Alex';

$sayHello = function () use ($name)
{
    return 'Hello '. $name;
};

/**[3] - Arrow function */
$sayHelloTo = fn() => 'Hello '. $name;

//var_dump($sayHelloTo());


/**[4] - Normal Way */

$string = 'alexander';
$split = str_split($string);
$result = array_map(function($char, $count) {
    return [
        'char' => $char,
        'occurs' => $count
    ];
}, array_unique($split), array_count_values($split));


/**[4] - Arrow function */
$new_result = array_map(fn ($char, $occurs) => compact('char', 'occurs'),array_unique($split), array_count_values($split));

//echo '<pre>', var_dump($new_result) , '</pre>'; 

/**[5] - Normal Way*/
//$user = null;
$user = ['name' => 'Rui'];
$greet = function() use($user){
    if(!$user){
        return 'Hey';
    }
    return 'Hey ' . $user['name'];
};

/**[5] - Arrow function */
$new_greet = fn() => trim('Hey ' . ($user ? $user['name'] : ''));

//var_dump($greet());


/**[6] - Normal way*/
$normal_greet = function (string $greeting): string {
    return 1;
};

/**[6] - Arrow way*/
$greet = fn(string $greeting) => $greeting;

var_dump($normal_greet('Hey'));