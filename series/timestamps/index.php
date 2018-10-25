<?php


1. The time function is a function to display the numerical time since Jan. 1st 1970 in terms of seconds. 
$time = time();


2. What this line of code is doing is formatting the $time function and making what is displayed more user friendly. 
$time_now = date('D M d Y @ H:i:s', $time);

3. What this line of code is doing is displaying an alternate date/time by going backwards or forwads in time as opposed to 
$time_now.  
$time_modified = date('D M d Y @ H:s', $time);


4. A way the $time_now might be used in a web application is in a forum. Your post displays on the screen with the date/time
you posted it at.
5. A way the $time_modified might be used in a web application is if a company was promoting a product that comes out in 
the future. 
echo 'The current date/time is '.$time_now.'<br>The modified date/time is '.$time_modified;



?>
