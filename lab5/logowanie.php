
<?php
	session_start();
	require("funkcje.php");
	echo "<h1> Nasz system </h1>";
	
	if(isSet($_POST["zaloguj"]))
		{
			$login = $_POST["login"];
			$login = test_input($login);
			$haslo = $_POST["haslo"];
			$haslo = test_input($haslo);
			//echo "Przeslany login: " . $login . "<br>";
			//echo "Przeslane haslo: " . $haslo . "<br>";
			
			if($login == $osoba1->login && $haslo == $osoba1->haslo){
				$_SESSION["zalogowanyImie"] = $osoba1->imieNazwisko;
				$_SESSION["zalogowany"]=1;
				header("Location: user.php");
			}
			else if($login == $osoba2->login && $haslo == $osoba2->haslo){
				$_SESSION["zalogowanyImie"] = $osoba2->imieNazwisko;
				$_SESSION["zalogowany"]=1;
				header("Location: user.php");
			}
			else{
				header("Location: index.php");
			}
		}
		
?>