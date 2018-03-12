<?php

$params=parse_ini_file("config.ini");
    $db = new PDO($params['db.conn']);
    $sql="SELECT * FROM users";
    $stmt=$db->query($sql);
    $it=new IteratorIterator($stmt);
    $limit=new LimitIterator($it,4,7);
    $arr = iterator_to_array($limit);
    print_r($arr);

?>