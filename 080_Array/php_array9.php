<?php
function cmp($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
    
}
$a = array(3, 2, 5, 6, 1);
usort($a, "cmp");//usort使用者自訂排序法 
//foreach ($a as $key => $value) {
  //  echo "$key: $value <br />";
//}

?>