<!DOCTYPE html>
<html>
<body>
  <p><h3>PHP $GLOBALS</h3><br>
  $GLOBALS is a PHP super global variable which is used to access global variables from anywhere in the PHP script (also from within functions or methods).<br>

  PHP stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable.</p>

<?php 
$x = 75;
$y = 25; 

function addition() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;
?>

</body>
</html>
