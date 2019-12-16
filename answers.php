#!/usr/bin/env php
<?php


//
//  Problem #2
// 
function problemOne(){

    $array = [];

    for ($iCounter = 2000;$iCounter <= 3500; $iCounter++)
    {
        if ($iCounter % 7 == 0 && $iCounter % 5 != 0)
        {
            $array[] = $iCounter;
        }
    }

    echo implode(",", $array);

}


echo "
Question #1:
Write a program which will find all such numbers which are divisible by 7, but are not a multiple of 5, and are between 2000 and 3200 (both
included). The numbers obtained should be printed in a comma-separated sequence on a single line.
";
sleep(3);
echo "\n\n";
echo "Solution "; 
problemOne();
echo "\n\n";



//
//  Problem #2
// 
sleep(5);
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