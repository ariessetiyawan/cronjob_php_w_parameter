<?php
    error_reporting(1);
    $time_login = date('Y-m-d H:i:s');
    var_dump($argv);
    parse_str($argv[1], $param);
    parse_str($argv[2], $param1);
    parse_str($argv[3], $param2);
    
    $start= $param['start'];
    $sd= $param1['sd'];
    $nis=$param2['nis'];
    
    var_dump ($start.'<br>');
    var_dump ($sd.'<br>');
    var_dump ($nis.'<br>');

?>
