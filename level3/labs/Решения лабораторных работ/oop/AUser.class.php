<?php
	// ���������� � �������������
	abstract class AUser {
		public $name; // ��� ������������
		public $login; // �����
		public $password; // ������
		
		function __construct($name="", $login="", $password="") {
			$this->name = $name;	
			$this->login = $login;	
			$this->password = $password;
		}
		
		abstract function showInfo();
	}
?>