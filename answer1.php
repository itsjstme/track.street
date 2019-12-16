#!/usr/bin/env php
<?php


//
//  Problem #1
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



