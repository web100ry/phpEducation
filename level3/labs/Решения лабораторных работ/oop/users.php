<?php
	// ������� �������������� ��������� �������
	function __autoload($class){
		require_once "$class.class.php";
	}
	
	// ������������ 1
	$user1 = new User("Rasmus Lerdorf", "rasmus", "sDe3G45"); 
	$user1->showInfo();
	
	// ������������ 2
	$user2 = new User("Zeev Suraski", "zeev", "sdsBH67"); 
	$user2->showInfo();
		
	// ������������ 3
	$user3 = new User("Andi Gutmans", "andi", "porRFkj66"); 
	$user3->showInfo();	
	
	// ������������ 4
	$user4 = clone $user3;
	$user4->showInfo(); 
	
	// ����������������� 
	$user = new SuperUser("Igor Borisov", "igor", "sdfrtRc34", "admin");
	$user->showInfo();
	echo "<hr><p>";
	$props = $user->getInfo();
	foreach($props as $prop=>$value){
		echo "$prop = $value<br>";
	}
	// ������� �������� ���� ������������
	function checkUser($obj){
		if ($obj instanceof User) {
			if ($obj instanceof SuperUser) {
				echo "<p>", $obj->name,
				        " - c����������������</p>";	
			} else {
				echo "<p>", $obj->name,
				        " - ������� ������������</p>";
			}
		}else{
			echo '<p>$obj - ����������� ������������</p>';
		}
	}
	
	// �������� ���� ������������	
	checkUser($user2);
	checkUser($user);
	
	// ���������� ������� �������������
	echo "<p>���������� ������� ������������� - ",
	        User::$users;
	// ���������� ������������������		
	echo "<p>���������� ������������������ - ",
	        SuperUser::$superusers;
	echo "<hr>", $user1;
	echo "<hr>", $user2;
	echo "<hr>", $user3;
	echo "<hr>", $user4;
	echo "<hr>", $user;
?>