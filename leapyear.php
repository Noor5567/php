<?php
   function leap($year){
       if (($year % 4 == 0) & (0 != $year % 100) | (0 == $year % 400))
         print("$year is a leap year");
      else
         print("$year is not a leap year");
   }
   leap(2013);
?>