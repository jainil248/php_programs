<?php

$myString = "This is akash TechnoLabs";

print_r(str_word_count($myString,0));
echo "<br>";
print_r(str_word_count($myString,1));
echo "<br>";
print_r(str_word_count($myString,2));

?>

!*<!-- format:
0 returns the number of words found.
1 returns an array contains all the words found within the specified
string.
2 returns an associative array, where the key is the numeric position of
the word inside the string and the value is the actual word itself. -->