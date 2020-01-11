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