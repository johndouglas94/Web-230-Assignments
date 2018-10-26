<?php

include 'config.inc.php';

1. The $_SERVER['SCRIPT_NAME] is the function thats going to allow the user to stay on the same page that the submit
button is on.
$script_name = $_SERVER['SCRIPT_NAME'];

2. What's hapening is the images are only coming from the localhost and not anywhere else. 
echo $images; 

 ?>

3. Using the $script_name variable benefits us because whatever page the user is on when they submit, they will still
stay on that page.
<form action="<?php echo $script_name; ?>" method="POST">
<input type="submit" name="submit" value="Submit">
</form>
