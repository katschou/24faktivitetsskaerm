<?php
require "classes/classDB.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING & ~E_DEPRECATED & ~E_STRICT);


define("CONFIG_LIVE", "0"); // 0: Test environment || 1: Live environment

if(CONFIG_LIVE == 0){
    /*
    $DB_SERVER = "localhost";
    $DB_NAME = "aktiviteter";
    $DB_USER = "root";
    $DB_PASS = "root";
*/

    $DB_SERVER = "mysql97.unoeuro.com";
    $DB_NAME = "katrinaschouby_dk_db_aktiviteter";
    $DB_USER = "katrinaschouby_dk";
    $DB_PASS = "z6nEpmR35yHkachFgAw2";


}else{
    $DB_SERVER = "";
    $DB_NAME = "";
    $DB_USER = "";
    $DB_PASS = "";
}

$db = new db($DB_SERVER, $DB_NAME, $DB_USER, $DB_PASS);
