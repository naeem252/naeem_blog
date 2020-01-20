<?php
/**
 * Created by PhpStorm.
 * User: naeem
 * Date: 12/22/2019
 * Time: 9:32 PM
 */
function select_all_post($options=[]){
    global $database;
    $limit=$options['limit'] ?? false;
    $post_t= $options['post_t'] ?? false;
    $sql="SELECT * FROM posts ";
    if($post_t){
        $sql.="WHERE post_tags LIKE '%{$post_t}%' ";
    }
    if($limit){
        $sql.="LIMIT {$limit}";
    }
    $connect_sql=mysqli_query($database,$sql);

    return $connect_sql;
}
function select_all_category(){
    global $database;
    $sql="SELECT * FROM categories";
    $connect_query=mysqli_query($database,$sql);
    return $connect_query;
}