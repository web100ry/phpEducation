<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 13.03.18
 * Time: 9:22
 *
 */
Reflection::export(new ReflectionExtension('gd'));
//Reflection::export(new ReflectionExtension('standard'));

//Reflection::export(new ReflectionClass('SQLite3'));

exit;



abstract class MyClass{
    public $a=1;
    protected $b=2;
    private $c=3;
    public static $cnt=0;
    const HANDS=2;
    abstract function foo();
    public function bar(){}
    public function sayHello($name, $h=3){
        return "<h$h>Hello $name!</h$h>";
    }
}
Reflection::export(new ReflectionClass('MyClass'));

//exit;
class Counter{
    private static $c=0;
    final public static function increment(){
        return ++self::$c;
    }
    function __construct()
    {
    }
}

$method= new ReflectionMethod('Counter','__construct');
printf("%s%s%s%s%s%s%s method '%s' (is %s)\n".
    "create  in %s\n".
    "in row from %d to %d\n".
    "has modificator %d[%s]\n",
    $method->isInternal() ? ' Internal' : 'Users',
    $method->isAbstract() ? ' Abstract' : '',
    $method->isFinal() ? ' Final' : '',
    $method->isPublic() ? ' public' : '',
    $method->isProtected() ? ' protected' : '',
    $method->isPrivate() ? ' private' : '',
    $method->isStatic() ? ' static' : '',
//    $method->isPublic() ? ' public' : '',
    $method->getName(),
    $method->isConstructor() ? ' constructor' : 'NOconstructor',
    $method->getFileName(),
    $method->getStartLine(),
    $method->getEndLine(),
    $method->getModifiers(),
    implode('', Reflection::getModifierNames($method->getModifiers()))
);
//exit;
function seyHello($name,$h=3){
    static $count =0;
return "<h$h>Hello $name!</h$h>";
}


function foo1($a,$b,$c){}
function foo2(Exception $a,&$b,$c){}
function foo3(ReflectionFunction $a,$b=1,$c=null){}
function foo4(){}

$reflect=new ReflectionFunction('foo3');
echo $reflect."<br>";
foreach ($reflect->getParameters() as $i=>$param){
    echo "Parametr: ".$param->getName()."<br>";
    echo "is Null?: ".$param->allowsNull()."<br>";
    echo "is Link?: ".$param->isPassedByReference()."<br>";
    $opt= $param->isOptional()?'Yes!':'No!';
    echo "is Options?: ".$opt."<br><br>";


}

vprintf("%04b/%02b/%'#5b", explode('-', '188-8-1')); // 1988-08-01



//Reflection::export(new ReflectionFunction('seyHello'));

$func=new ReflectionFunction('foo4');
printf(
    "<p>====>%s функція '%s'<br>".
    "------ оголошена в %s<br>".
    "------ строки с %s по %d",
    $func->isInternal() ? 'Internal' : 'User',
    $func->getName(),
    $func->getFilename(),
    $func->getStartLine(),
    $func->getEndLine()
);
if ($static=$func->getStaticVariables())
    var_dump ($static,1);
    echo $func->invoke('Jhon',1);