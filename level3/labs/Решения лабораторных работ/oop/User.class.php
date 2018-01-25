<?php
	// ���������� � �������������
	class User extends AUser{
		static $users = 0; // ������� 
		protected $objNum = 0;
		function __construct($name="", $login="", $password="") {
			try{
				if(empty($name) or empty($login) or empty($password)) throw new Exception("������� �� ��� ������!");
				$this->name = $name;	
				$this->login = $login;	
				$this->password = $password;
				$this->objNum += ++self::$users;
			}catch(Exception $e){
				echo "��������� ������ ", $e->getMessage(),
					" � ������ ", $e->getLine(),
					" ����� ", $e->getFile();
				exit;	
			}
		}
		
		function showInfo() {
			echo "<p>������������: ", $this->name;	
			echo "<br>�����: ", $this->login;	
			echo "<br>������: ", $this->password;	
		}
		
		function __clone() {
			$this->name = "Guest";	
			$this->login = "guest";	
			$this->password = "qwerty";
			self::$users++;
			$this->objNum++;
		}
		
		function __toString() {
			return "������ #".$this->objNum.": ".$this->name;	
		}
	}
?>