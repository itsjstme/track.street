#!/usr/bin/env php
<?php
$problem_two_input = '100,150,180';

function calc_formulae(&$item, $key, $params){
    $item = intval(sqrt((2 * intval($params[C]) * intval($item)) / intval($params[H])));
}

function problemTwo($input){

    $array = explode(",", $input);

    array_walk($array, 'calc_formulae', array(
        "C" => 50,
        "H" => 30
    ));
    
    echo implode("," , $array);

}

echo "
Question #2:
Write a program that calculates and prints the value according to the given formula:
Q = Square root of [(2 * C * D)/H]
The following are the fixed values of C and H:
C is 50. H is 30.
D is the variable whose values should be input to your program in a comma-separated sequence.
";
echo "\n\n";
echo "Solution " ;
echo "\n\n";
problemTwo($problem_two_input);