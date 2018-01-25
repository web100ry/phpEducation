<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 17.01.18
 * Time: 22:08
 */
////////////////////////////////////////
/*
 * Функція з невідомими по кількості та типу аргументами
 * */
function foo(){
echo "Argumets:".func_num_args()."<br>";

echo"Array: ";
print_r(func_get_args());
echo "<br>";
    echo "Argumets:".func_get_arg(1)."<br>";

}
foo('a',234,true);
/////////////////////////////////////////

/*
 * змінні та посилання
 *
*/

$count='a';//increment - next - b
$b=&$count;
echo "<br>".$b++;
echo $count."<br>";

////////////////////////////////////////
function myCount($item, $mode=0){

$myType=gettype($item);
if ($myType == 'NULL')return 0;
elseif ($myType == 'array'){
    $count=0;
    foreach ($item as $w) {
        $count++;
    if($mode==1 and is_array($w)) {
        $count+=myCount($w,1);
        }
    }
    return $count;
}
elseif ($myType) return 1;
}

$menu1 = array(
    'Home' => 'index.php',
    'About' => 'about.php',
    'Contact' => 'contact.php',

    'Test' => 123123,123123,123,123,1231,231,23,12,324,123,123,345,5457,777
);
echo myCount($menu1,1);
echo myCount('wer');
echo myCount();

print_r(get_defined_functions());

?>