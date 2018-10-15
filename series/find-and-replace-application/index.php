<?php

1. We are creating the $offset variable because it gives the program a starting point on where to look for the string position. 
   It is being used to count the number of characters leading up to the string and then display the number of spaces 
   where that string is.
$offset = 0;

2. What we are doing in this if statement is determining if the text areas are populated with text. We would do it so
   if someone enters a value, it will show up. 
if (isset($_POST['text'])&&isset($_POST['searchfor'])&&isset($_POST['replacewith'])) {
3. We would do this so it would be easier to reference these text areas in later string functions.
   $text = $_POST['text'];
   $search = $_POST['searchfor'];
   $replace = $_POST['replacewith'];
 4. We create the $string_length to determine how many characters the searched string is going to be. 
   $search_length = strlen($search);

   if (!empty($text)&&!empty($search)&&!empty($replace)) {

     while ($strpos = strpos($text, $search, $offset)) {
 5. We change the offset value because we want the program to return how many spaces before the search term +
    the number of letter in the search terms.
       $offset = $strpos + $search_length;
 6. What we are doing here is replacing the position of the string that is returned back to us and having the 
    program display the number of characters of the string instead.
        $text = substr_replace($text, $replace, $strpos, $search_length);
     }

     echo $text;

   } else {
  7. We include this because it is a message that reminds users to make sure they complete every text area. They can not 
     procceed without doing so.
      echo 'Please fill in all the fields.';
   }

}

?>
8. The form action is so when a user types in all their infomation, the program has somewhere to go afterwards.
   The method attribute is how the program wants to recieve the information provided by the user.
<form action="index.php" method="POST">
      <textarea name="text" rows="6" cols="30"></textarea><br><br>
      Search for:<br>
      <input type="text" name="searchfor"><br><br>
      Replace with:<br>
      <input type="text" name="replacewith"><br><br>
   
   9. The type attribute determines what kind of way the data is entered in by the user. The value attribute is what the whole
   program is being used for. It puts text in where the submit button is and provides informatiob on what the program
   is about.
   <input type="submit" value="Find and Replace">
</form>
