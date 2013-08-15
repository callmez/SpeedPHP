<?php
define('BEGIN_TIME', microtime(true));
define("APP_PATH",dirname(__FILE__));
define("SP_PATH",dirname(__FILE__).'/SpeedPHP');
$spConfig = array(

);
require(SP_PATH."/SpeedPHP.php");
spRun();

register_shutdown_function('infoProfile');
function infoProfile ()
{
    $endTime = microtime(true);
    echo '<div class="container">';
    echo 'Use time: ' . ($endTime - BEGIN_TIME) . '<br>';
    echo 'Use memory: ' . (memory_get_usage()/1024) . 'KB<br>';
    echo 'Include files:' . "<br>\n";
    foreach (get_included_files() as $i => $file) {
        echo ($i + 1) . '.' . $file . "<br>\n";
    }
    echo '</div>';
}