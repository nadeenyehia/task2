<?php
$first = 'z';
$second = ++$first; 
if (strlen($second) > 1) 
{
 $second = $second[0];
 }
echo $second."\n";
?> 
