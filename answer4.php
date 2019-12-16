#!/usr/bin/env php
<?php
$problem_four_input = 'New to Python or choosing between Python 2 and Python 3? Read Python 2 or Python 3.';


function problemFour($input){

    $rs = array();
    $array = explode(" ", $input);
    sort($array);
    foreach($array as $item){
        if(isset($rs[$item])){
            $rs[$item] += 1;    
        }else
            $rs[$item] = 1;
        echo $item;
    }
    foreach($rs as $key => $item){
        echo "{$key}:{$item} \n";
    }

}

echo "
Question #4:
Write a program to compute the frequency of the words from the input. The output should output after sorting the key alphanumerically.
";
echo "\n\n";
echo "Solution " ;
echo "\n\n";
problemFour($problem_four_input);