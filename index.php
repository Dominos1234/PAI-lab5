<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset='UTF-8' />
</head>
<body>
	<?php
		require("funkcje.php");
		echo "<h1> Nasz system </h1>";
		if(isSet($_POST["wyloguj"]))
		{
			$_SESSION["zalogowany"]=0;
		}
	?>
	<form action="logowanie.php" method="post">
		<fieldset>
			<legend>Logowanie:</legend>
			<label for="login">Login:</label>
			<input type="text" name="login"><br><br>
			<label for="haslo">Hasło:</label>
			<input type="password" name="haslo"><br><br>
			<input type="submit" name="zaloguj" value="Zaloguj"><br>
		</fieldset>
	</form>
	<br><br>
	<form action="cookie.php" method="get">
		<fieldset>
		<legend>Cookies:</legend>
		<label for="czas">Czas życia:</label>
		<input type="number" name="czas"><br><br>
		<input type="submit" name="utworzCookie" value="Utworz cookie">
		</fieldset>
		
	</form>
	<br><a href="user.php">User</a><br><br>
	<?php
		if(isset($_COOKIE['nazwa'])){
			echo 'Nasze ciasteczko "' . $_COOKIE['nazwa'] . '" jeszcze żyje!';
		}
	?>

</body>
</html>
