
<h1>My Page</h1>

<?php
$redirect_page = 'http://google.com';
$redirect = true;

if ($redirect==true) {
   header('Location: '.$redirect_page);
 }
?>
