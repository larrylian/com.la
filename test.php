<?php
/**
 * Created by PhpStorm.
 * User: larry
 * Date: 14/09/2017
 * Time: 9:35 AM
 */
error_reporting(E_ALL);
define('BASE_PATH', dirname(__FILE__)."/");
cmdSh("test.sh");
function cmdSh($fileName) {
    $cmdPrefix = "/usr/bin/sudo /bin/sh ";
    $file = BASE_PATH.$fileName;
    echo $cmdPrefix.$file;
    exec($cmdPrefix.$file, $out);
    return $out;
}
