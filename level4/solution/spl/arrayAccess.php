<?php

class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('users.db');
    }
}
class Db {
	private $_db;
	function __construct(){
		$this->_db = new MyDB();
	}
    
	public function userExists($name){
		return (boolean) $this->_db->query("SELECT count(*) FROM users WHERE name = '$name'");
	}
	public function getUserId($name){

		$result = $this->_db->query("SELECT inn FROM users WHERE name = '$name'");
        $row= $result->fetchArray();
            return $row["inn"];
	}
	public function setUserId($name, $inn){
		$this->_db->query("INSERT INTO users VALUES('$name', $inn))");
	}
	public function removeUser($name){
		$this->_db->query("DELETE FROM users WHERE name='$name'");
	}
}
class UserToInn implements ArrayAccess {
	private $_db; // Объект, средствами которого осуществляется
	// доступ к базе данных
	function __construct(){
		$this->_db = new Db();
    }
	function __destruct(){
		unset($this->_db);
	}
	function offsetExists($name) {
		return $this->_db->userExists($name);
	}
	function offsetGet($name) {
		return $this->_db->getUserId($name);
	}
	function offsetSet($name, $id) {
		$this->_db->setUserId($name, $id);
	}
	function offsetUnset($name) {
		$this->_db->removeUser($name);
	}
}
$userMap = new UserToInn();
if(isset($userMap["Ivan"]))
	print "Номер ИНН пользователя IVAN - " . $userMap["Ivan"];
?>