<?php
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

# We can use gettype() to know datatype

// 1. String
    $message = 'hello, world';
    $message2 = "hello, world";

// 2. Integer
    $age = 26;

// 3. Float
    $price = 999.99;
    $pi = 3.14;

// 4. Boolean
    $is_login = true;
    $is_admin = false;

/* 5. Arrays
1. Numeric Indices
2. Associative Keys
*/
$color = array("red", "green", "blue");
$person = array(
    "name" => "Maung Maung",
    "age" => "20"
);

// 6. Objects
// Objects have both properties and methods
class Person {
    public $name;
    public $age;
}
$person = new Person();
$person->name = "Maung Maung";
$person->age = 20;
?>