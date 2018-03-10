<?php

class MyIterator implements Iterator {
    private $var = array();

    public function __construct($array){
        if(is_array($array)) $this->var = $array;
    }
    public function rewind(){
        echo "rewind <br>";
        reset($this->var);
    }

    public function current(){
        $var=current($this->var);
        echo "current: $var <br>";
        return $var;

    }
    public function key()
    {
        $var=key($this->var);
        echo "key: $var <br>";
        return $var;
    }
    public function next(){
        $var=next($this->var);
        echo "next: $var <br>";
        return $var;

    }
 function valid(){
    $var= $this->current() !== false;
    echo "valid: {$var} <br>";
    return $var;
    }

}


class myCollection implements IteratorAggregate{
    private $items = array();
    private $count = 0;

    public function getIterator()
    {
        return new myIterator($this->items);
    }

    public function add($value){
        $this->items[$this->count++]=$value;
    }

}
$coll = new myCollection();
$coll->add('value 1');
$coll->add('value 2');
$coll->add('value 3');

foreach ($coll as $k=>$v){
    echo "key/value: [$k -> $v]\n\n";
}
?>