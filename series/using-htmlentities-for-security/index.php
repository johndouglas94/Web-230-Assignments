<?php

// 1. What htmlentities is doing is providing security so users can't input curtain types of data. 
if (isset($_GET['day'])&&isset($_GET['date'])&&isset($_GET['year'])) {
  $day = htmlentities($_GET['day']);
  $date = htmlentities($_GET['date']);
  $year = htmlentities($_GET['year']);
  if (!empty($day)&&!empty($date)&&!empty($year)) {
    echo 'It is '.$day.' '.$date.' '.$year;
  } else {
    echo 'Fill in all fields.';
  }
}

?>
<form action="index.php" method="GET">
    Day:<br><input type="text" name="day"><br>
    Date:<br><input type="text" name="date"><br>
    Year:<br><input type="text" name="Year"><br>
    <input type="submit" value="Submit">
</form>
