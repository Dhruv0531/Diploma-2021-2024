<!DOCTYPE html>
<html>
<body>
  <h2>A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function.</h2>

<?php
function myTest() {
  $x = 5; // local scope
  echo "<p>Variable x inside function is: $x</p>";
} 
myTest();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";
?>

</body>
</html>