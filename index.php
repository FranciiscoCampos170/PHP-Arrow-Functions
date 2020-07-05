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

var_dump($sayHelloTo());