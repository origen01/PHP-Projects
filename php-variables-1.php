<html>
    <head>
        <title>Idrissa's PHP Website: Variables (Part 1)</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        </head>
        
        <body>
            <h1 class="center">An Introduction to Variables (Part 1)</h1>
<?php
//Remember to COMMENT YOUR CODE!!!

//All PHP files end in .php.  HTML is acceptable in PHP

//Remember, PHP statements always end in a semicolon.

//Example of string variable
$variable_one = 'This is my first variable';
// Once the variable has been defined, echo the value in the browser viewport.
echo 'Variable One: '. $variable_one . '<br>';
// A period (.) is used for concatenation, (ie: to join strings with variables) 
// I also added a <br> as a carriabge return (ie: to start a new line)

//Examples of number variables
$number_variable = 29;
$second_number_variable = 5778;

echo 'Number Variable 1: ' . $number_variable . '<br>';
echo 'Number Variable 2: ' . $second_number_variable . '<br>';

//Variables can be other variables
$new_number_variable = $second_number_variable;

echo 'New Number Variable: ' . $new_number_variable . '<br>';

//Variables can be the result of math equations
$math_variable = 5 * 5;

echo 'Math Variable: ' . $math_variable . '<br>';

//Variables can be the result of math equations involving other variables
$math_variable_two = $number_variable * 5;

echo 'Second Math Varible: ' . $math_variable_two . '<br>';

?>
        </body>
</html>