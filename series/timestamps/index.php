<?php

$time = time();
$time_now = date('D M d Y @ H:i:s', $time);

$time_modified = date('D M d Y @ H:s', $time);

echo 'The current date/time is '.$time_now.'<br>The modified date/time is '.$time_modified;



?>
