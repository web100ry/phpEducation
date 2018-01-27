<?php
function exec_script($url, $params = array())
{
    $parts = parse_url($url);

    if (!$fp = fsockopen($parts['host'], isset($parts['port']) ? $parts['port'] : 80))
    {
        return false;
    }

    $data = http_build_query($params, '', '&');

    fwrite($fp, "GET " . (!empty($parts['path']) ? $parts['path'] : '/') . " HTTP/1.1\r\n");
    fwrite($fp, "Host: " . $parts['host'] . "\r\n");
    fwrite($fp, "Content-Type: application/x-www-form-urlencoded\r\n");
    fwrite($fp, "Content-Length: " . strlen($data) . "\r\n");
    fwrite($fp, "Connection: Close\r\n\r\n");
    fwrite($fp, $data);
    fclose($fp);

    return true;
}



$name="Name";
$age=44;
//$url = "https://script.google.com/macros/s/AKfycbyK_KPeMiXTH88M_ZTdQ9_Lb_5ZE5azH7orpDkmVk8uI8ONG-v1/exec?";
//echo $url;
//curl_exec($url);
exec_script('https://script.google.com/macros/s/AKfycbyK_KPeMiXTH88M_ZTdQ9_Lb_5ZE5azH7orpDkmVk8uI8ONG-v1/exec?', array('p1'=>'name','p2'=>'age'));
?>