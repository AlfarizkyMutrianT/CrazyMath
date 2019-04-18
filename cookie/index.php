<?php
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
if(!isset($_COOKIE["user"])) {
	echo '<form action="init.php" method="POST">';
	echo '<input type="text" name="nama">';
	echo '<input type="submit" name="submit">';
	echo '</form>';
} else {
     echo "Value is: " . $_COOKIE["user"];
}
?>

<p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>

</body>
</html>