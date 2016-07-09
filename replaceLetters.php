<?php

/* 
 * php replaceLetters.php
 */

/* 
 * Reads a file and replaces all the selected characters inside with another given character
 */

$fileContents = file_get_contents('example.txt');

$fileWithLettersReplaced = mb_convert_encoding($fileContents, 'UTF-8');
    
//$letterToFind = 'A';
//$letterToReplaceWith = 'B'; 
$newFileName = 'exampleResult.txt';

//$fileWithLettersReplaced = str_replace($letterToFind, $letterToReplaceWith, $file);

file_put_contents($newFileName,$fileWithLettersReplaced);

?>