<?php require_once "share/initialize.php";?>
<?php
sleep(1);
//load more project
$offset=$_GET['load_more'] ?? 1;
$offset=$offset;
$sql="SELECT * FROM posts ";
$sql.="LIMIT 2 OFFSET {$offset}";
$query_connect=mysqli_query($database,$sql);

while($row=mysqli_fetch_assoc($query_connect)) {
//    echo $row['post_title'] . "<br>";
?>

<div class="col-md-6 mb-5">
    <?php
    $sql="select * from posts ORDER BY id DESC LIMIT 1";

    $connect_q=mysqli_query($database,$sql);
    $data=mysqli_fetch_assoc($connect_q);
    if($data['id']==$row['id']){
        $_SESSION['load_off']=true;
    }

    ?>
    <div class="blog">
        <div class="blog-img-container">
            <a href="<?php echo url_for("/post.php?post_id={$row['id']}");?>">
                <img src="images/<?php echo $row['post_image'];?>" alt="mose" class="blog-image img-fluid d-block bordered">
            </a>
        </div>


        <div class="blog-cat"><h6 class="blog-cat-text"><?php echo $row['post_category'].$data['id'];?></h6></div>
        <div class="blog-title">
            <a href="<?php echo url_for("/post.php?post_id={$row['id']}");?>" class="blog-title-link">
                <h2 class="blog-title-text"><?php echo $row['post_title'];?></h2>
            </a>
        </div>
        <div class="blog-footer">
            <span class="blog-date"><i class="far fa-clock"></i> <?php echo $row['post_date'];?></span><span class="blog-comment-count"> <i class="far fa-comment"></i> <?php echo $row['post_comment_count'];?></span>
        </div>
    </div>
</div>

<?php }?>



