<?php

?>

1. //The action attribute is the place in which the form data is going to go. What it does is define a destination of data submitted by 
the user.
2. //The method attribute is how the data is going to be received by the user. What it does is gets thw input data by
the user and diplays it in the url. 
<form action="index.php" method="GET">
    Day:<br><input type="text" name="day"><br>
    Date:<br><input type="text" name="date"><br>
    Year:<br><input type="text" name="Year"><br><br>
    <input type="submit" value="Submit">
</form>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <div class="fluid-container">
    <div class="row justify-content-center">
      <div class="col-6" style="padding:25px;">
        <h1>Working With Forms</h1>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-6">
        <form action="index.php" method="GET">
          <div class="form-group">
            <label for="day">Day:</label><br>
            <input type="text" name="day" class="form-control" placeholder="Enter day here." value=""><br><br>
          </div>
          <div class="form-group">
            <label for="date">Date:</label><br>
            <input type="text" name="date" class="form-control" placeholder="Enter date here." value=""><br><br>
          </div>
          <div class="form-group">
            <label for="year">Year:</label><br>
            <input type="text" name="year" class="form-control" placeholder="Enter year here." value=""><br><br>
          </div>
          <div>
           <input type="submit" class="btn" value="Submit">
         </div>
        </form>
       </div>
      </div>
     </div>
