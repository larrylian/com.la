<?php
/**
 * Created by PhpStorm.
 * User: larry
 * Date: 13/09/2017
 * Time: 11:07 PM
 */

define('BASE_PATH', dirname(__FILE__)."/");
$status = isset($_GET["status"])?$_GET["status"]:"";
switch ($status) {
    case "on":
        lampOn();
        break;
    case "off":
        lampOff();
        break;
    case "init":
        lampInit();
    case "test":
        test();
    default:
        echoJson(["code"=>"100000", "msg"=>"参数错误"]);
        break;
}
function lampOn() {
    $out = cmdSh("on.sh");
    echoSuccess($out);
}
function lampOff() {
    $out = cmdSh("off.sh");
    echoSuccess($out);
}
function lampInit() {
    $out = cmdSh("init.sh");
    echoSuccess($out);
}
function test() {
    $out = cmdSh("test.sh");
    echoSuccess($out);
}
function cmdSh($fileName) {
    $cmdPrefix = "/usr/bin/sudo /bin/sh ";
    $file = BASE_PATH.$fileName;
    exec($cmdPrefix.$file, $out);
    return $out;
}
function echoSuccess($data){
    echoJson(["code"=>"0", "msg"=>"OK", "data" => $data]);
}
function echoJson($data) {
    header("Content-type: application/json;charset='utf-8'");
    echo json_encode($data, JSON_UNESCAPED_UNICODE);
    exit();
}
