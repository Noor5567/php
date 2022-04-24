<?php
$string ="first solve the problem";
$word= strrpos($string, ' ') + 1; // +1 so we don't include the space in our result
$last = substr($string, $word);
echo $last; 
?>