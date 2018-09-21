<?php

function add($number1, $number2) {
   $result = $number1 + $number2;
   return $result;
}

echo add(10, 10) + 100;

echo '<br/ >';

function multiply($Num1, $Num2) {
  $result = $Num1 * $Num2;
  return $result;
}

echo multiply(25, 12) * 2;

echo '<br/ >';

function subtract($sub1, $sub2, $sub3, $sub4) {
     $result = $sub1 - $sub2 - $sub3 - $sub4;
    return $result;
}

  echo subtract(150, 20, 45, 18);
?>
