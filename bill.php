<?php 
function bill($cost)
{
    $unit_cost_first = 2.50;
    $unit_cost_second = 5.00;
    $unit_cost_third = 6.20;
    $unit_cost_fourth = 7.50;
    if($cost <= 50) {
        $bill = $cost * $unit_cost_first;
        echo $bill;
    }
    elseif($cost > 50 && $cost <= 100)
    {
        $bill = $cost * $unit_cost_second;
        echo $bill;
    }
    elseif($cost > 100 && $cost <= 250)
    {
        $bill = $cost * $unit_cost_third;
        echo $bill;
    }
    else 
    {
        $bill = $cost * $unit_cost_fourth;
        echo $bill;
    }
    
    
}
bill(200);
?>