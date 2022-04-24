<?php 
function twoint($no1,$no2)
{
    if($no1==$no2)
    {
        echo ($no1+$no2)*3;
    }
    else 
    {
        echo $no1+$no2;
    }
}
twoint(3,2);
?>