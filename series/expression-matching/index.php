<?php

  $string = 'This is a string.';

  if(preg_match('/is/', $string)){
    echo 'Match found';
   }else{
      echo 'No match found';
    }
      echo '<br />'; 

    $string = 'My Name is John.';

    if(preg_match('/The/', $string)){
      echo 'Match found';
     }else{
       echo 'Match NOT found';
     }

?>
