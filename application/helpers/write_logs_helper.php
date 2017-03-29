<?php

/**
 * dynamically generate the activity logs for projects
 *
 * @param string $log_type
 * @param string $field
 * @param string $value
 * @return html
 */
if (!function_exists('write_logs_helper')) {

    function write_logs_helper($value)
    {
            $dt = new DateTime();
    $tz_object = new DateTimeZone('Africa/Cairo');
    $dt->setTimezone($tz_object);
 $dt->format('Y-m-d H:i:s');
 $value.=" at " .$dt->format('Y-m-d H:i:s');   

        
$current = file_get_contents("_/log/log.txt", FILE_USE_INCLUDE_PATH);
  
$current.= "<br>";
$current .=$value;
        $f = "_/log/log.txt";
  
      
        file_put_contents($f, $current);

    }

}
