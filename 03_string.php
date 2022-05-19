<?php
$str = "This is a string ";
echo $str;
echo "<br>";
$lenn = strlen($str);

echo "The lenght of this string is ".$lenn ."<br>Thank you <br>";
echo "The number of words in this string is ".str_word_count($str). " <br> Thank you <br>";
echo " (Orignal) This is a string";
echo "<br>";
echo "The reverse string is " . "<br> (Reverse)". strrev($str) ." <br> Thank you <br> ";
echo "The search for is in string is ".strpos($str, "is"). "<br>";
echo "The replaced string is ". str_replace("is","at",$str);

?>