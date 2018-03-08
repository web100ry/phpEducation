<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 07.03.18
 * Time: 10:41
 */
class Book implements ArrayAccess{
   // public $title;
   // public $author;
   // public $isbn;
private $props = array();
    public function offsetSet($item, $value)
    {
        $this->props[$item]=$value;
    }
    public function offsetGet($item)
    {
        return $this->props[$item];

    }
    public function offsetExists($item)
    {
        return isset($this->props[$item]);
    }
    public function offsetUnset($item)
    {
        unset ($this->props[$item]);
    }
}
$book= new Book;
$book['title'] = 'PHP4';
if (isset ($book['title'])) echo $book['title']."<br>";
unset ($book['title']);
$book['title'] = 'PHP7';
$book['author'] = 'Jhon Smith';
$book['isbn'] = 23458798;
$book['pages'] = 123;
print_r($book);
?>