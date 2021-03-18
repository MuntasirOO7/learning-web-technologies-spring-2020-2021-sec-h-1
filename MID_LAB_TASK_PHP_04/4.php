<?php
function test($a, $b, $c) 
{
  $max = max($a, max($b, $c));
  return $max;
}

echo test(1, 2, 3)."\n";
echo test(1, 3, 2)."\n";
echo test(1, 1, 1)."\n";

?>