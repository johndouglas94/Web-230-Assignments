
<h1>My Page</h1>

<?php
$redirect_page = 'http://google.com';
$redirect = true;

if ($redirect==true) {
   // 1. What is happening here is the header is forcing the page to redirect the user to the goolge home page.
   header('Location: '.$redirect_page);
 }
?>
