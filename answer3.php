#!/usr/bin/env php
<?php
$problem_three_input = 'without,hello,bag,world';


function problemThree($input){

    $array = explode(",", $input);
    sort($array);
    echo implode("," , $array);

}

echo "
Question #3:
Write a program that accepts a comma-separated sequence of words as input and prints the words in a comma-separated sequence after sorting
them alphabetically.
";
echo "\n\n";
echo "Solution " ;
echo "\n\n";
problemThree($problem_three_input);