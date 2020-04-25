<?php 
session_start();
setcookie("nazwa", "ciacho21", time() + $_GET["czas"], "/");
echo "Udało ci się stworzyć ciasteczko!";
 ?>
<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset='UTF-8' />
</head>
<body>
	<a href="index.php">Wstecz</a>
</body>
</html>
