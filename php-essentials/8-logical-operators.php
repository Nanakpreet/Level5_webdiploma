<?php
// !!! DO NOT CHANGE THESE !!!
$a = 'coding';
$b = 6;
$c = 'realistic';
$d = 3;
$e = '6';
$letters = [];
// !!! Scroll down to find the activity !!!

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP Essentials - 8. Logical Operators</title>
</head>

<body>
    <!-- 
    In this exercise, you are to create conditions for each if statement
    to reveal the secret word. Variables have been created for you to
    use within your conditional statements.

    !!! Do not alter any code or the order of code, except where marked. !!!
 -->

    <?php

    //1. If $d is less than $b
    if ($d < $b) {
        $letters[] = 'f';
        print_r($letters);
        echo "<br>";
    }

    //2. If $a does not equal $c
    if ($a != $c) {
        $letters[] = 'a';
        print_r($letters);
        echo "<br>"; 
    }

    //3. If $b plus $d is equal to 12
    if (/* Your code goes here */) {
        $letters[] = 'm';
    }

    //4. If the length of string $c is greater than or equal to $b
    //   If you need help getting the length of a string, use Google to find a solution
    //   "How to get string length php"
    if (/* Your code goes here */) {
        $letters[] = 'b';
    }

    //4. Use the str_split() function to separate the letters of word $c into an array named $c_letters.
    //   Help: https://www.w3schools.com/php/func_string_str_split.asp
    $c_letters = /* Your code goes here */;

    //   Then, check if the letter at index [2] is equal to 'a'
    if (/* Your code goes here */) {
        $letters[] = 'l';
        
    }

    //5. If $b is greater than 10 OR $d is greater than 10
    if (/* Your code goes here */) {
        array_splice($letters, 1, 0, 'b');
        array_splice($letters, 3, 0, 'a');
    }

    //6. the inverse of "$b is greater than $d -AND- $b is identical to $e".
    //   You may use extra brackets to simplify this case.
    if (/* Your code goes here */) {
        $letters[] = 'o';
    }

    //7. If the type of $b does not equal 'float'
    //   Help: https://www.w3schools.com/php/func_var_gettype.asp
    if (/* Your code goes here */) {
        $letters[] = 's';
    }

    //8. If $b divided by $d is equal to 2
    if (/* Your code goes here */) {
        array_splice($letters, 3, 0, 'u');
        array_splice($letters, 6, 0, 'u');
    }

    echo implode("", $letters); // Joins the letters in the array and echos them
    ?>

</body>

</html>