<?php
	function getMenu($menu, $vertical=true){
		if(!$vertical){
			$style = "display:inline";
		}
		echo '<ul style="list-style-type:none">';
		
			foreach ($menu as $link=>$href){
				echo "<li style='$style'><a href=\"$href\">", $link, '</a></li>';
			}
		
		echo '</ul>';
	}
	$menu = array(
		"Номе"=>"index.php", 
		"Contact"=>"contact.php", 
		"About"=>"about.php", 
		"Project"=>"project.php", 
		"Map"=>"map.php"
	);
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Меню</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>
	<h1>Меню</h1>
	<?php
		getMenu($menu);
	?>
	<hr>
	<?php
		getMenu($menu, false);
	?>
</body>
</html>
