<!DOCTYPE html>
<html>
<body>
	<p><h2>PHP $_SERVER</h2><br>
	$_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.</p>

<?php
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>

</body>
</html>