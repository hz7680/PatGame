<?php
    require_once '../common/set_inc.php';
    $arr = array();
    $arr['key1'] = 'val1';
    $arr['key2'] = 'val2';
    $str = serialize($arr);
    echo $str . '<br/>';
    echo var_dump(unserialize($str));