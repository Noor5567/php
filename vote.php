<?php 
function vote($no1)
{
    if($no1<18)
    {
        echo "can't vote";
    }
    else 
    {
        echo "can vote";

    }
}
vote(15);
?>