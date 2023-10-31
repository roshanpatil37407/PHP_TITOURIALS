<?php
function fun($marks)
{
    $sum=0;
    foreach($marks as $value)
    {
        $sum +=$value;
    }
    return $sum;
}
$roshan=[99,98,96,95,93,100];
$marks=fun($roshan);
echo"total mark srcored by roshan out of 600 is $marks";