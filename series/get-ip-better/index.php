<?php

$http_client_ip = $_SERVER['HTTP_CLIENT_IP'];
echo '<h3>$http_client_ip is: '.$http_client_ip.'</h3>';

$http_x_forwarded_for = $_SERVER['HHTP_X_FORWARDED_FOR'];
echo '<h3>$http_x_forwarded_for is: '.$http_x_forwarded_for.'</h3>';

$remote_addr = $_SERVER['REMOTE_ADDR'];
echo '<h3>$remote_addr is: '.$remote_addr.'</h3>';

1. What this conditional statment is doing is checking to see if either $http_client_ip or $http_x_forwarded_for is
  NOT empty. If they are NOT empty, display either internet IP or proxy. If they are empty, display local IP address. 
if (!empty($http_client_ip)) {
  $ip_address = $http_client_ip;
} else if (!empty($http_x_forwarded_for)) {
  $ip_address - $http_x_forwarded_for;
} else {
  $ip_address = $remote_addr;
}

echo '<h3>$ip_address is: '.$ip_address.'</h3>'; 

?>
