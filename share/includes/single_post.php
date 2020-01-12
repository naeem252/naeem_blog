<?php

$sql="SELECT * FROM posts ";
$sql.="WHERE id='".$post_id."'";
$sql_connect=mysqli_query($database,$sql);
$single_post=mysqli_fetch_assoc($sql_connect);

?>

<section id="bigImg" style="background-image: url('<?php echo url_for("images/{$single_post['post_image']}")?>')">
    <div class="container">
        <div class="row justify-content-center d-flex align-items-center">
            <div class="col-md-6">
                <div class="bigImgContent">
                    <h4 class="blog-cat-text"><?php echo $single_post['post_category'];?></h4>
                    <h1 class="bigImg-heading"><?php echo $single_post['post_title'];?></h1>
                    <div class="blog-footer post-social">
                        <span class="blog-writter"><i class="far fa-clock"></i><?php echo $single_post['post_author'];?></span>
                        <span class="blog-date"><i class="far fa-clock"></i> <?php echo $single_post['post_date'];?></span>
                        <span class="blog-comment-count"> <i class="far fa-comment"></i> <?php echo $single_post['post_comment_count'];?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="main_content">
    <div class="container">
        <?php

        $content_array=preg_split("/\r\n|\n|\r/",$single_post['post_content']);
        foreach ($content_array as $content){
        ?>
          <p class="para"><?php echo $content;?></p>
        <?php }?>

        <div class="tag-div tag-div-post">
            <?php

            $tags=explode(',',$single_post['post_tags']);
            foreach($tags as $tag){
            ?>
            <a href="#" class="tag"><?php echo $tag;?></a>
            <?php }?>
        </div>
        <div class="author">
            <img src="images/author.jpg" alt="" class="author-img">
            <h4 class="authro-name"><?php echo strtoupper($single_post['post_author']);?></h4>
            <p class="author-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos non officia deserunt eius, doloribus vitae, sequi quidem reiciendis veritatis maxime.</p>
            <ul class="list-unstyled d-flex author-social">

                <li class="social-item mx-4">
                    <a href="#" class="social-link"><span class="social-icon"><i class="fab fa-facebook-f"></i></span></a>
                </li>
                <li class="social-item mr-4">
                    <a href="#" class="social-link"><span class="social-icon"><i class="fab fa-twitter"></i></span></a>
                </li>
                <li class="social-item mr-4">
                    <a href="#" class="social-link"><span class="social-icon"><i class="fab fa-instagram"></i></span></a>
                </li>
                <li class="social-item mr-4">
                    <a href="#" class="social-link"><span class="social-icon"><i class="fab fa-google-plus-g"></i></span></a>
                </li>
            </ul>
        </div>
    </div>
</section>

<section id="slick">
    <div class="container">
        <div class="row mySlick">
            <div class="col-12 col-md-6">
                <div class="slick-item">

                    <div class="media mb-2">
                        <div class="row">
                            <div class="col-md-12 col-lg-4">
                                <img src="images/phone_th.jpg" width="150" class="img-fluid post-ftf-img ftf-img" alt="">
                            </div>
                            <div class=" col-md-12 col-lg-6">

                                <div class="media-body">
                                    <h5 class="ftf-heading">my new post and some thing</h5>
                                    <span class="ftf-date"><i class="far fa-clock"></i> web 02 2019</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="slick-item">

                    <div class="media mb-2">
                        <div class="row">
                            <div class="col-md-12 col-lg-4">
                                <img src="images/phone_th.jpg" width="150" class="img-fluid post-ftf-img ftf-img" alt="">
                            </div>
                            <div class=" col-md-12 col-lg-6">

                                <div class="media-body">
                                    <h5 class="ftf-heading">my new post and some thing</h5>
                                    <span class="ftf-date"><i class="far fa-clock"></i> web 02 2019</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="slick-item">

                    <div class="media mb-2">
                        <div class="row">
                            <div class="col-md-12 col-lg-4">
                                <img src="images/phone_th.jpg" width="150" class="img-fluid post-ftf-img ftf-img" alt="">
                            </div>
                            <div class=" col-md-12 col-lg-6">

                                <div class="media-body">
                                    <h5 class="ftf-heading">my new post and some thing</h5>
                                    <span class="ftf-date"><i class="far fa-clock"></i> web 02 2019</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="slick-item">

                    <div class="media mb-2">
                        <div class="row">
                            <div class="col-md-12 col-lg-4">
                                <img src="images/phone_th.jpg" width="150" class="img-fluid post-ftf-img ftf-img" alt="">
                            </div>
                            <div class=" col-md-12 col-lg-6">

                                <div class="media-body">
                                    <h5 class="ftf-heading">my new post and some thing</h5>
                                    <span class="ftf-date"><i class="far fa-clock"></i> web 02 2019</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="comment">
    <div class="container">
        <h4 class="section-heading comment-heading fta-heading">3 comment</h4>
        <div class="comment-section">
            <ul class="comments list-unstyled">
                <li class="comment">
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="images/commentator.jpg" width="100" alt="commentor" class="commentator-img ">
                        <div class="comment-content ml-3">
                            <div class="d-flex row justify-content-between">
                                <div class="col-12 col-md-6">
                                    <h4 class="commentator-name">Naeem Hasan</h4>
                                </div>
                                <div class="col-12 col-md-6">
                                    <span class="comment-date"><i class="far fa-clock"></i> Aug,15,19</span>
                                    <span class="comment-like"><i class="far fa-heart"></i> 25</span>
                                    <span class="comment-share"><i class="far fa-share-square"></i> 5</span>
                                </div>

                            </div>
                            <p class="comment-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, molestiae. Officia suscipit, dignissimos natus quos.
                            </p>
                        </div>
                    </div>
                    <ul class="accordion" class="replies  my-3 list-unstyled">
                        <h3 class="replies-heading">Replies <i class="fas fa-chevron-down"></i></h3>
                        <div>
                            <li class="reply mb-3">
                                <div class="d-flex justify-content-center align-items-center">
                                    <img src="images/replies.jpg" width="100" alt="reply" class="reply-img ">
                                    <div class="reply-content ml-3">
                                        <div class="d-flex row justify-content-between">
                                            <div class="col-12 col-md-6">
                                                <h4 class="replies-name">Naeem Hasan</h4>
                                            </div>
                                            <div class="col-12 col-md-6 my-3">
                                                <span class="reply-date"><i class="far fa-clock"></i> Aug,15,19</span>
                                                <span class="reply-like"><i class="far fa-heart"></i> 25</span>
                                                <span class="reply-share"><i class="far fa-share-square"></i> 5</span>
                                            </div>

                                        </div>
                                        <p class="reply-text">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, molestiae. Officia suscipit, dignissimos natus quos.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="reply mb-3">
                                <div class="d-flex justify-content-center align-items-center">
                                    <img src="images/replies.jpg" width="100" alt="reply" class="reply-img ">
                                    <div class="reply-content ml-3">
                                        <div class="d-flex row justify-content-between">
                                            <div class="col-12 col-md-6">
                                                <h4 class="replies-name">Naeem Hasan</h4>
                                            </div>
                                            <div class="col-12 col-md-6 my-3">
                                                <span class="reply-date"><i class="far fa-clock"></i> Aug,15,19</span>
                                                <span class="reply-like"><i class="far fa-heart"></i> 25</span>
                                                <span class="reply-share"><i class="far fa-share-square"></i> 5</span>
                                            </div>

                                        </div>
                                        <p class="reply-text">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, molestiae. Officia suscipit, dignissimos natus quos.
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </div>

                    </ul>

                </li>
                <li class="comment">
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="images/commentator.jpg" width="100" alt="commentor" class="commentator-img ">
                        <div class="comment-content ml-3">
                            <div class="d-flex row justify-content-between">
                                <div class="col-12 col-md-6">
                                    <h4 class="commentator-name">Naeem Hasan</h4>
                                </div>
                                <div class="col-12 col-md-6">
                                    <span class="comment-date"><i class="far fa-clock"></i> Aug,15,19</span>
                                    <span class="comment-like"><i class="far fa-heart"></i> 25</span>
                                    <span class="comment-share"><i class="far fa-share-square"></i> 5</span>
                                </div>

                            </div>
                            <p class="comment-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, molestiae. Officia suscipit, dignissimos natus quos.
                            </p>
                        </div>
                    </div>
                    <ul class="accordion" class="replies  my-3 list-unstyled">
                        <h3 class="replies-heading">Replies <i class="fas fa-chevron-down"></i></h3>
                        <div>
                            <li class="reply">
                                <div class="d-flex justify-content-center align-items-center">
                                    <img src="images/replies.jpg" width="100" alt="reply" class="reply-img ">
                                    <div class="reply-content ml-3">
                                        <div class="d-flex row justify-content-between">
                                            <div class="col-12 col-md-6">
                                                <h4 class="replies-name">Naeem Hasan</h4>
                                            </div>
                                            <div class="col-12 col-md-6 my-3">
                                                <span class="reply-date"><i class="far fa-clock"></i> Aug,15,19</span>
                                                <span class="reply-like"><i class="far fa-heart"></i> 25</span>
                                                <span class="reply-share"><i class="far fa-share-square"></i> 5</span>
                                            </div>

                                        </div>
                                        <p class="reply-text">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, molestiae. Officia suscipit, dignissimos natus quos.
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </div>
                    </ul>

                </li>
            </ul>
        </div>
    </div>
</section>

<section id="post-comment">
    <div class="container">
        <h4 class="section-heading leav-comment fta-heading">Leav A Comment</h4>
        <form action="" class="comment-form">
            <div class="row mb-5 d-flex justify-content-center align-items-center">
                <div class="col-md-4">
                    <input type="text" class="com-input" placeholder="Name">
                </div>
                <div class="col-md-4">
                    <input type="text" class="com-input" placeholder="Email">
                </div>
                <div class="col-md-4">
                    <input type="text" class="com-input" placeholder="Website">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <textarea name="comment" id="comment-post" placeholder="Message" class="message" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="submit text-center">
                <input type="submit" name="submit" value="Submit" class="submitbtn">
            </div>
        </form>
    </div>
</section>


<?php include INCLUDES."/page_bottom.php";?>