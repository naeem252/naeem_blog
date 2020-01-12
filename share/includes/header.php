<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo url_for("css/all.min.css");?>">
    <link rel="stylesheet" href="<?php echo url_for("css/bootstrap.min.css");?>">
    <link rel="stylesheet" href="<?php echo url_for("css/jquery-ui.min.css");?>">
    <link rel="stylesheet" href="<?php echo url_for("css/slick.css");?>">
    <link rel="stylesheet" href="<?php echo url_for("css/slick-theme.css");?>">
    <!--    <link rel="stylesheet" href="css/style.css">-->
    <link rel="stylesheet" href="<?php echo url_for("css/style.css");?>">
    <script src="<?php echo url_for("js/jquery.js");?>"></script>
    <script src="<?php echo url_for("js/jquery-migrate.js");?>"></script>
    <script src="<?php echo url_for("js/jquery-ui.min.js");?>"></script>
    <script src="<?php echo url_for("js/slick.min.js");?>"></script>
    <script src="<?php echo url_for("js/main.js");?>"></script>
    <title>Naee || Blog</title>
</head>
<body>


<?php

if(isset($_POST['submit_search'])){
    $search_q=$_POST['search'];
//    $sql="SELECT * FROM posts ";
//    $sql.="WHERE post_tags LIKE '%{$search_q}%'";
    header("location:post.php?post_t={$search_q}");
}


?>