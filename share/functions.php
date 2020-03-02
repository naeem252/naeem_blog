<?php
/**
 * Created by PhpStorm.
 * User: naeem
 * Date: 12/22/2019
 * Time: 6:44 PM
 */

function url_for($path){
    if($path[0] !== "/"){
        $path="/".$path;
    }
    return WWW_ROOT.$path;
}

function u($string){
    return urlencode($string);
}
function h($string){
    return htmlspecialchars($string);
}
function e($string){
    global $database;
    return mysqli_real_escape_string($database,$string);
}