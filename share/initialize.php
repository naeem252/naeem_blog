<?php
ob_start();
session_start();



define("SHARE",dirname(__FILE__));
define("INCLUDES",SHARE."/includes");
define("ROOT",dirname(SHARE));
define("CSS",ROOT."/css");
define("IMAGES",ROOT."/images");


$public_end = strpos($_SERVER['SCRIPT_NAME'], '/naeemBlog') + 10;
$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
define("WWW_ROOT", $doc_root);

require_once "db_credentials.php";
require_once "db_functions.php";
require_once "functions.php";
require_once "query_functions.php";




$database=db_connect();