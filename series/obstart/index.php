<?php

1. We use ob_start because their is an error on the redirect. There is not supposed to be page content before the header 
   function. ob_start stores the page content in an internal buffer and runs the redirect.
ob_start();
?>

<h1>My Page</h1>
This is my page.

<?php
$redirect_page = 'http://google.com';
$redirect = true;

if ($redirect==true) {
   2. The header function is using the $redirect_page variable and redirecting the user to google.com. 
   header('Location: '.$redirect_page);
 }

3. We use ob_end_flush to put the page contents back in to the page. Even if we can not redirect.   
ob_end_flush();

?>
