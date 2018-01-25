<?php
// ��������, ���� �� ����� ����������
if(
	isset($_POST['num1']) && is_numeric($_POST['num1']) &&
	isset($_POST['num2']) && is_numeric($_POST['num2']) &&
	isset($_POST['operator']) && !empty($_POST['operator'])
){
	// ����������� ���������� ��������
	$num1 = $_POST['num1'] * 1;
	$num2 = $_POST['num2'] * 1;
	$operator = $_POST['operator'];
	
	// �������� ���������� ��� �������� ���������� ����������
	$output = "$num1 $operator $num2 = ";
	
	// � ����������� �� ��������� ����� ��������� ������ �������������� ��������
	switch ($operator){
		case '+':
			$output .= $num1 + $num2; break;
		case '-':
			$output .= $num1 - $num2; break;
		case '*':
			$output .= $num1 * $num2; break;
		case '/':
			// � ������ ������� �� �������� ���������,
			// ����� �������� �� ��� ����� ����
			if($num2 == 0){
				$output = '������� �� ���� ���������!';
			}else{
				$output .= $num1 / $num2;
			}
			break;
		default:
			$output = "����������� �������� '$operator'";
	}
	
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>�����������</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>

<h1>�����������</h1>

<?php
// ���� ��������� ����������, ������� ���
if(isset($output)){
	print "<p>���������: $output</p><hr />";
}
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

����� 1:<br />
<input type="text" name="num1" /><br /><br />

��������:<br />
<input type="text" name="operator" /><br /><br />

����� 2:<br />
<input type="text" name="num2" /><br /><br />

<input type="submit" value="�������!" />

</form>

</body>
</html>