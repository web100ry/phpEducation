<?php

	/*
	ЗАДАНИЕ 1
	- Откройте файл mod4\menu.php
	- Скопируйте код функции getMenu()
	- Вставьте скопированный код в данный файл
	*/
function getMenu($menu, $vert=true){
    if(!is_array($menu)) return false;
    echo "<ul style=\"list-style-type: none\">";
    $style='';
    if(!$vert)$style=' style="display:inline;margin-right:10px"';
    foreach ($menu as $NameMenu => $LinkMenu) {
        echo "<li$style><a href=\"$LinkMenu\">$NameMenu</a></li>";
    }
return true;
}

	/*
	ЗАДАН0ИЕ 2
	- Откройте файл mod4\table.php
	- Скопируйте код функции getTable()
	- Вставьте скопированный код в данный файл
	*/

function getTable($cols,$rows,$color='red'){

    echo"<table align='center' border='1'>";
    var_dump($color,$cols);
    for($tr=1;$tr<=$rows;$tr++) {
        echo "\t<tr align=\"center\">\n";
        for ($td=1;$td<=$cols;$td++){
            if($tr==1||$td==1)
                echo "\t\t<th style='background-color: $color'>".$tr*$td."</th>\n";
            else
                echo "\t\t<td>".$tr*$td."</td>\n";
        }
        echo "\t</tr>\n";
    }
    echo "</table>";
}


?>