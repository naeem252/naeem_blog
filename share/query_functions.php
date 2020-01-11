<?php
/**
 * Created by PhpStorm.
 * User: naeem
 * Date: 12/22/2019
 * Time: 9:32 PM
 */
function select_all_post(){
    global $database;
    $sql="SELECT * FROM posts";
    $connect_sql=mysqli_query($database,$sql);
    return $connect_sql;
}