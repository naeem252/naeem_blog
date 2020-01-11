<?php
/**
 * Created by PhpStorm.
 * User: naeem
 * Date: 12/22/2019
 * Time: 6:45 PM
 */

function db_connect(){
    $connection=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    return $connection;
}

function db_disconnect($db){
    if(isset($db)){
        mysqli_close($db);
    }
}