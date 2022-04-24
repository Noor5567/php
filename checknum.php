<?php
function CheckNumber($x) {
  if ($x > 0)
    {
        echo "Positive number";
    }
  if ($x == 0)
    {
        echo "Zero";
    }
  if ($x < 0)
    {
        echo "Negative number";
    }
}
CheckNumber(-10.8);
?>