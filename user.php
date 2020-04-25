<?php 
	session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset='UTF-8' />
</head>
<body>
	<?php
			
		if(isSet($_SESSION["zalogowany"])&&$_SESSION["zalogowany"]==1){
			echo "Witaj " . $_SESSION["zalogowanyImie"] . "<br>";
		}
		else{
			header("Location: index.php");
		}
	?>
	<form action="index.php" method="post"><br>
	<input type="submit" name="wyloguj" value="Wyloguj"><br>
	</form>
	
	<form action="user.php" method="post" enctype="multipart/form-data">
    <br><br>Select image to upload: <input type="file" name="myfile"><br><br>
    <input type="submit" value="Upload Image" name="submit">
	</form>

<?php
if(isSet($_FILES['myfile']))
{
$currentDir = getcwd();
$uploadDirectory= '/zdj/';
$fileName= $_FILES['myfile']['name'];
$fileSize= $_FILES['myfile']['size'];
$fileTmpName= $_FILES['myfile']['tmp_name'];
$fileType= $_FILES['myfile']['type'];
if($fileName!="" and 
($fileType=='image/png' or $fileType=='image/jpeg' or $fileType=='image/JPEG'
or $fileType=='image/PNG'))
{
$uploadPath = $currentDir . $uploadDirectory . $fileName;
if(move_uploaded_file($fileTmpName, $uploadPath))
	echo "Zdjęcie zostało załadowane na serwer FTP";
	echo '<img src="zdj/' . $fileName . '" />';
}
}
?>
	
	<br><br><a href="index.php">Index</a>
	
</body>
</html>
