<?php
session_start();
$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if ($_SESSION["randStr"])
	{
		$randStr = $_POST["str"];
		if ($randStr == $_SESSION["randStr"])
		{
			$result = "���������";
		}
		else
		{
			$result = "�� ���������";
		}
	}
	else
	{
		$result = "������ �������!";
	}
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<title>�����������</title>
</head>
<body>
<h1>�����������</h1>
<form action="" method="post">
	<div>
		<img src="noise-picture.php">
	</div>
	<div>
		<label>������� ������</label>
		<input type="text" name="str" size="6">
	</div>
	<input type="submit" value="OK">
</form>
<?php if ($result) echo "<div>", $result, "</div>"?>
</body>
</html>
