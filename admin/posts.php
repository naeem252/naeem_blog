<?php include "../share/initialize.php"; ?>
<?php

if(!is_logedin()){
    header("Location:login.php");
}


?>
<?php include "../share/includes/admin_header.php";?>
<?php include "../share/includes/admin_navigation.php";?>


<?php


if(isset($_GET['post']) && $_GET['post']=="add"){
    include "includes/add_post.php";
}else{
    include "includes/all_posts.php";
}
?>
