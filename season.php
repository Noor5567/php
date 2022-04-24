<?php 
function season($temp)
{
    if ($temp<20)
    {
        echo "we are in winter";
    }
    else 
    {
        echo "we are in summer";
    }
}
season(12);
?>