<?php

1. What the if staement is doing here is determining that if the "Roll dice" button is been clicked, echo out what is
 below. 
if (isset($_POST['roll'])) {
2. The rand function is a generator that displays random numbers. 
  $rand = rand(1, 6);
  echo 'You rolled a '.$rand;
}

3. A way that $rand might be used in a web application is if a site uses captcha to block out spammers.  

?>


<form action="index.php" method="POST">
      <input type="submit" name="roll" value="Roll dice.">
</form>
