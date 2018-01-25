<?php
	class SuperUser extends User implements ISuperUser{
		public $role;	
		static $superusers = 0; // ������� 
		function __construct($name, $login, $password, $role) {
			parent::__construct($name, $login, $password);
			$this->role = $role;	
			self::$superusers++;
			parent::$users--;
		}	
		function showInfo() {
			parent::showInfo();
			echo "<br>����: ", $this->role;	
		}
		function getInfo() {
			$arr = array();
			foreach($this as $key=>$val){
				$arr[$key] = $val;
			}
			return $arr;
		}
	}
?>