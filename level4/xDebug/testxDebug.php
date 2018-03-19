<?php
echo "Test xDebug!";
class MyClass{
    public function myMethod($other){
        //echo "<br>".xdebug_call_class();
        echo '<br> :: '.xdebug_call_function();
        echo '<br> in file '.xdebug_call_file();
        echo "<br> on line ".xdebug_call_line();
        $other->myOtherMethod();
    }
}
class MyOtherClass{
    public function myOtherMethod(){
        echo "<br>".xdebug_call_class();
        echo '<br>:: '.xdebug_call_function();
        echo '<br>in file '.xdebug_call_file();
        echo "<br>on line ".xdebug_call_line()."<hr>";
    }
}

$a = new MyClass();
$b = new MyOtherClass();
$a->myMethod($b);
?>