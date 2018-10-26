<?php

require 'config.inc.php';

1. What this foreach loop is doing is going through each of the IP addresses amd seeing if they are blocked from
  accessing the page. If they are blocked, a messege will appear saying so. 
foreach($ip_blocked as $ip) {
  if ($ip==$ip_address) {
    die('Your IP address, '.$ip_address.' has been blocked');
  }
}

?>

<h1>Welcome!</h1>
