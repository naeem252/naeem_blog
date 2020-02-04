<?php
/**
 * Created by PhpStorm.
 * User: Naeem
 * Date: 2/2/2020
 * Time: 9:02 PM
 */
function login_user($user){
    $_SESSION['username']=$user['username'];
    $_SESSION['login_time']=time();
    $_SESSION['admin_id']=$user['id'];
    header("Location:index.php");
}
function is_logedin(){
    if(isset($_SESSION['username'])){
        return true;
    }else{
        return false;
    }
}
function logout(){
    if(isset($_SESSION['username'])){
        unset($_SESSION['username']);
        unset($_SESSION['login_time']);
        unset($_SESSION['admin_id']);
        header("Location:index.php");
    }
}