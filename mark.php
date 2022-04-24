<?php
$mark1= 95;
$mark2 = 74;
$mark3 = 85;
$mark4 = 64;
$mark5 = 53;
$avg=($mark1+$mark2+$mark3+$mark4+$mark5)/ 5;
if ($avg >= 90)
{
    echo "A";
}
else if ($avg >= 80 && $avg < 90)
{
    echo "B";
}
else if ($avg >= 70 && $avg < 80)
{
    echo "C";
}
else if ($avg >= 60 && $avg < 70)
{
    echo "D";
}
else
{
     echo "F";
}

?>