<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12.03.18
 * Time: 22:44
 */
abstract class Localization {
    function formatMoney($sum){
        number_format($sum);
    }
    function translate($phrase){
        return $phrase;
    }
}

class English extends Localization{
    function formatMoney($sum){
        $text="";
        if ($sum<0){
            $text .= '-';
            $sum= abs($sum);
        }
    $text .= '$' . number_format($sum,2,'.',',');
        return $text;
    }

}

class Russion extends Localization{
    function formatMoney($sum){
        $text = number_format($sum,2,',','.');
        return $text;
    }

    function translate($phrase){
        if ($phrase=="Yes")
        return "Так";
        if ($phrase=="No")
            return "Ні";

    }
}


echo "===ENGLISH===<br>";
$local = new English();
echo $local->formatMoney(123123123)."<br>";
echo $local->translate("Yes")."<br>";
echo "===RUSSIAN===<br>";
$local = new Russion();
echo $local->formatMoney(123123123)."<br>";
echo $local->translate("Yes")."<br>";