<?php
$arr = array(1,1,99,14,3,2,5,2);

for($a=0; $a<count($arr)-1; $a++)
{
    for($b=0; $b<count($arr)-1; $b++)
    {
        if($arr[$b]> $arr[$b+1]){
            list($arr[$b],$arr[$b+1]) = array($arr[$b+1], $arr[$b]); 
        }
    }

}
print_r($arr);

?>