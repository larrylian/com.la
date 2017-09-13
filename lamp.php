<?php
/**
 * Created by PhpStorm.
 * User: larry
 * Date: 13/09/2017
 * Time: 11:07 PM
 */

define('BASE_PATH', dirname(__FILE__)."/");
$status = $_GET["status"]??"";
switch ($status) {
    case "on":
        lampOn();
        echoSuccess();
        break;
    case "off":
        lampOff();
        echoSuccess();
        break;
    case "init":
        lampInit();
        echoSuccess();
    default:
        echoJson(["code"=>"100000", "msg"=>"参数错误"]);
        break;
}
function lampOn() {
    cmdSh("on.sh");
}
function lampOff() {
    cmdSh("off.sh");
}
function lampInit() {
    cmdSh("init.sh");
}
function cmdSh($fileName) {
    $cmdPrefix = "/usr/bin/sudo /bin/sh ";
    $file = BASE_PATH.$fileName;
    exec($cmdPrefix.$file);
}
function echoSuccess(){
    echoJson(["code"=>"0", "msg"=>"OK"]);
}
function echoJson($data) {
    header("Content-type: application/json;charset='utf-8'");
    echo json_encode($data, JSON_UNESCAPED_UNICODE);
    exit();
}
