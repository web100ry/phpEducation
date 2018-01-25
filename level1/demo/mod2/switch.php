<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>switch</title>
</head>

<body>
<h1>switch</h1>
<?php
$a = 1;

switch ($a){
	case 1: 
		echo "ОДИН";
		break;

	case 2: 
		echo "ДВА";
		break;

	case 3: 
		echo "ТРИ";
		break;

	case 4: 
		echo "ЧЕТЫРЕ";
		break;
	
	default:
		echo "МНОГО";
}
?>

</body>
</html>
