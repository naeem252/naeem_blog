<?php require_once "share/initialize.php";?>

<?php


$connect_sql=select_all_post(["limit"=>8]);
$categories=select_all_category();
unset($_SESSION['load_off']);

?>
<?php include INCLUDES."/header.php";?>
<?php include INCLUDES."/navigation.php";?>



    <section id="main-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row" id="main_post_div">
                        <?php while($post=mysqli_fetch_assoc($connect_sql)){?>
                        <div class="col-md-6 mb-5">

                            <div class="blog">
                                <div class="blog-img-container">
                                     <a href="<?php echo url_for("/post.php?post_id=".$post['id']); ?>">
                                        <img src="images/<?php echo $post['post_image'];?>" alt="mose" class="blog-image img-fluid d-block bordered">
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
                        <?php mysqli_free_result($connect_sql);?>
                    </div>
                    <?php if(!isset($post_t)){?>
                       <?php if(!isset($_SESSION['load_off'])){?>
                            <div class="load-more">
                                <a href="#" id="load_more_btn" class="load-more-btn myBtn">load more post</a>
                                <img id="load_gif" style="display: none;" src='images/loader.gif' width='150' height='150'>
                            </div>
                    <?php }}?>
                </div>
                <div class="col-md-4">
                   <h2 class="section-heading text-uppercase">categories</h2>
                   <ul class="list-unstyled cat-list">
                       <?php while($category=mysqli_fetch_assoc($categories)){?>
                        <li class="cat-list-item"><a href="#" class="cat-list-link"><?php echo $category['cat_title'];?></a><span class="cat-bage"><?php echo $category['cat_post_count'];?></span></li>

                       <?php }?>
                   </ul>
                   <h2 class="section-heading text-uppercase my-4">trending post</h2>
                   <div class="row trending-post">
                       <?php
                        $posts=select_all_post(["limit"=>4]);
                        while($post=mysqli_fetch_assoc($posts)){
                       ?>
                        <div class="col-12 mb-3">
                           <div class="row align-items-center">
                                <div class="col-4 ">
                                        <div class="tending-img-container">
                                            <img src="images/<?php echo $post['post_image'];?>" alt="" class="tending-img img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <h6 class="blog-cat-text"><?php echo $post['post_category'];?></h6>
                                        <a href="<?php echo url_for("/post.php?post_id={$post['id']}");?>">
                                            <h2 class="blog-title-text"><?php echo substr($post['post_title'],0,25)."...";?></h2>
                                        </a>
                                        <span class="blog-date"><?php echo $post['post_date'];?></span>
                                    </div>
                           </div>
                        </div>
                       <?php }?>
                       <?php mysqli_free_result($posts);?>

                   </div>
                   <div class="subscription mt-4">
                       <h2 class="sub-heading">
                           subcription
                       </h2>
                       <p class="sub-text">
                           Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis perspiciatis dolore maiores praesentium numquam molestiae sapiente nam fugit laborum qui!

                       </p>
                       <form action="" class="sub-form">
                           <input placeholder="Your Email" type="text" class="sub-input">
                           <input type="submit" class="sub-btn myBtn" value="Subscription">
                       </form>
                   </div>
                </div>
            </div>
        </div>
    </section>



<?php include INCLUDES."/page_bottom.php";?>
