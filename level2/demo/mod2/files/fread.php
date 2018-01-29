<HTML>
<HEAD>
<TITLE>fread</TITLE>
</HEAD>
<BODY>
<?
	$fp = fopen("data.txt", "r") or die("Ошибка!");
	
	$data = fread($fp, 5);
	
	echo $data;
	
	fclose($fp);
	
		
?>
</BODY>
</HTML>