<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 14.03.18
 * Time: 23:26
 */
interface IPLugin{
   // function getMenuItems();
   // function getArticles();
   // function getSideBars();
}

class VasinClass implements IPLugin{
    function getName(){return 'Plugins of Vasiya!';}
    function getMenuItems()
    {
      return array('description'=>'Vasin Plugin','link'=>'Sum link');
    }
    function getSideBars()
    {
       return array('One'=>'One', 'Two'=>'Two');
    }
}

class PetinClass implements IPLugin{
    function getName(){return 'Plugins of Plugins!';}
    function getMenuItems()
    {
        return array('description'=>'Petin Plugin','link'=>'Sum link');
    }
    function getArticles()
    {
        return array('OneAt'=>'OneAt', 'TwoAt'=>'TwoAt');
    }
}