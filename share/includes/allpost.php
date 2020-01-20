
<?php

$connect_sql=select_all_post(["post_t"=>$post_t,"limit"=>9]);


?>

<section id="main-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row" id="main_post_div_post">
                    <?php while($post=mysqli_fetch_assoc($connect_sql)){?>
                    <div class="col-md-4 mb-5">
                        <div class="blog">
                            <div class="blog-img-container">
                                <a href="<?php echo url_for("/post.php?post_id={$post['id']}");?>">
                                    <img src="<?php echo url_for("images/{$post['post_image']}")?>" alt="mose" class="blog-image img-fluid d-block bordered">
                                </a>
                            </div>


                            <div class="blog-cat"><h6 class="blog-cat-text"><?php echo $post['post_category'];?></h6></div>
                            <div class="blog-title">
                                <a href="<?php echo url_for("/post.php?post_id={$post['id']}");?>" class="blog-title-link">
                                    <h2 class="blog-title-text"><?php echo $post['post_title'];?></h2>
                                </a>
                            </div>
                            <div class="blog-footer">
                                <span class="blog-date"><i class="far fa-clock"></i> <?php echo $post['post_date'];?></span><span class="blog-comment-count"> <i class="far fa-comment"></i> <?php echo $post['post_comment_count'];?></span>
                            </div>
                        </div>
                    </div>
                    <?php }?>

                </div>
                <?php if(!isset($post_t)){?>
                    <?php if(!isset($_SESSION['load_off'])){?>
                        <div class="load-more">
                            <a href="#" id="load_more_btn_post" class="load-more-btn myBtn">load more post</a>
                            <img id="load_gif" style="display: none;" src='images/loader.gif' width='150' height='150'>
                        </div>
                    <?php }}?>
            </div>

        </div>
    </div>
</section>

<?php include INCLUDES . "/page_bottom.php";?>