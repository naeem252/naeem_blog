<?php require_once "share/initialize.php";?>

<?php


$connect_sql=select_all_post();


?>
<?php include INCLUDES."/header.php";?>
<?php include INCLUDES."/navigation.php";?>



    <section id="main-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <?php while($post=mysqli_fetch_assoc($connect_sql)){?>
                        <div class="col-md-6 mb-5">

                            <div class="blog">
                                <div class="blog-img-container">
                                     <a href="#">
                                        <img src="images/<?php echo $post['post_image'];?>" alt="mose" class="blog-image img-fluid d-block bordered">
                                    </a>
                                </div>
                               

                                <div class="blog-cat"><h6 class="blog-cat-text"><?php echo $post['post_category'];?></h6></div>
                                <div class="blog-title">
                                    <a href="#" class="blog-title-link">
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
                    <div class="load-more">
                        <a href="#" class="load-more-btn myBtn">load more post</a>
                    </div>
                </div>
                <div class="col-md-4">
                   <h2 class="section-heading text-uppercase">categories</h2>
                   <ul class="list-unstyled cat-list">
                        <li class="cat-list-item"><a href="#" class="cat-list-link">technology</a><span class="cat-bage">45</span></li>
                        <li class="cat-list-item"><a href="#" class="cat-list-link">review</a><span class="cat-bage">45</span></li>
                        <li class="cat-list-item"><a href="#" class="cat-list-link">life style</a><span class="cat-bage">45</span></li>
                        <li class="cat-list-item"><a href="#" class="cat-list-link">design</a><span class="cat-bage">45</span></li>
                   </ul>
                   <h2 class="section-heading text-uppercase my-4">trending post</h2>
                   <div class="row trending-post">
                        <div class="col-12 mb-3">
                           <div class="row align-items-center">
                                <div class="col-4 ">
                                        <div class="tending-img-container">
                                            <img src="images/focus_th.jpg" alt="" class="tending-img img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <h6 class="blog-cat-text">Tecnology</h6>
                                        <h2 class="blog-title-text">How mouse work on computer</h2>
                                        <span class="blog-date">web 10 2019</span>
                                    </div>
                           </div>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="row">
                                    <div class="col-4">
                                           <div class="tending-img-container">
                                                <img src="images/camera_th.jpg" class="tending-img img-fluid ">
                                           </div>
                                        </div>
                                        <div class="col-8">
                                            <h6 class="blog-cat-text">Tecnology</h6>
                                            <h2 class="blog-title-text">How mouse work on computer</h2>
                                            <span class="blog-date">web 10 2019</span>
                                        </div>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="row">
                                    <div class="col-4">
                                          <div class="tending-img-container">
                                                <img src="images/light_th.jpg" alt="" class="tending-img img-fluid ">
                                          </div>
                                        </div>
                                        <div class="col-8">
                                            <h6 class="blog-cat-text">Tecnology</h6>
                                            <h2 class="blog-title-text">How mouse work on computer</h2>
                                            <span class="blog-date">web 10 2019</span>
                                        </div>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="row">
                                    <div class="col-4">
                                            <div class="tending-img-container">
                                                <img src="images/phone_th.jpg" alt="" class="tending-img img-fluid ">
                                            </div>
                                    </div>
                                    <div class="col-8">
                                        <h6 class="blog-cat-text">Tecnology</h6>
                                        <h2 class="blog-title-text">How mouse work on computer</h2>
                                        <span class="blog-date">web 10 2019</span>
                                    </div>
                            </div>
                        </div>
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
