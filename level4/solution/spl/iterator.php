<?php
class NumberSquared implements Iterator {
	private $_start, $_end;
	private $_cur;

	public function __construct($start, $end){
        echo "----construct------<br>";
	    $this->_start = $start;
		$this->_end = $end;
	}
	public function rewind(){
		$this->_cur = $this->_start;
	echo "----rewind------<br>";
	}
	public function key(){
        echo "----key------<br>";
	    return $this->_cur;
	}
	public function current(){
        echo "----current------<br>";
		return pow($this->_cur, 2);

	}
	public function next(){
        echo "----next------<br>";
	    $this->_cur++;

	}

	public function valid(){
        echo "----valid------<br>";
			return $this->_cur <= $this->_end;
	}

}
$obj = new NumberSquared(1, 9);
echo "<br>";
var_dump($obj);
echo "<br>";

foreach ($obj as $key => $value) {
	print "Квадрат числа $key - $value <br>\n ";
}
?>