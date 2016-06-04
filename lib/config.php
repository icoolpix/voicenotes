<?php
require_once('mysqldb.php');
error_reporting(E_ALL);
$db = new Mysqlidb('localhost','user','','voicenotes');
if(!$db) die("Database error");
define('APP_PATH',$_SERVER['DOCUMENT_ROOT'].'/');
define('RECORD_DIR','recordings/');
//$prefix = 't_';
//$db->setPrefix($prefix);