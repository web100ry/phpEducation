<?
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		echo '<pre>';
		print_r($_FILES);
		echo '</pre>';
		
		//move_uploaded_file
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<title>�������� ������ �� ������</title>
</head>
<body>
<h1>�������� ������ �� ������</h1>
<form action="<?=$_SERVER["PHP_SELF"]?>">
	<input type="file" name="userfile"><br>
	<input type="submit" value="���������">
</form>


</body>
</html>
