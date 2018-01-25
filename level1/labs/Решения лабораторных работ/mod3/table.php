<?php
	$cols = 10;
	$rows = 10;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Таблица умножения</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>
	<h1>Таблица умножения</h1>
	<table border="1">
	<?php
		for($tr=1; $tr<=$rows; $tr++){
			echo "<tr>";
			for($td=1; $td<=$cols; $td++){
				if($td==1 or $tr==1){
					echo "<th style='background-color:yellow'>", $tr * $td, "</th>";
				}else{
					echo "<td>", $tr * $td, "</td>";
				}
			}	
			echo "</tr>";
		}
	?>
	</table>
</body>
</html>
