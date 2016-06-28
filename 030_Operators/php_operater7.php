<?php
  $x = 10;
  if ($x >= 10 || foo())
    echo "yes";
  else
    echo "no";
    
  echo "<hr>";
//&&只要前面不成立就會直接echo no
  $x =10;
  if ($x >= 10 | foo())
    echo "yes";
  else
    echo "no";
    
function foo()
{
   echo "foo() is running.<br>";
}
//&前面不成但是會看後面數值是否成立
?>