<section id="mid-section">
    <div class="container">
        <div class="row no-gutters">
            <?php
            $posts=select_all_post(["limit"=>6]);
            while($post=mysqli_fetch_assoc($posts)){
            ?>

            <div class="col-12 col-sm-6 col-md-2">
                <a href="<?php echo url_for("/post.php?post_id={$post['id']}");?>">
                    <div class="recent-post">
                        <div class="recent-post-img">

                                <div class="recent-post-bg"></div>
                                <img src="images/<?php echo $post['post_image'];?>" class="img-fluid d-block" alt="">


                        </div>
                        <div class="recent-post-text">
                            <span class="recent-post-icon"><i class="fas fa-wine-glass-alt"></i></span>
                            <h4 class="recent-post-title"><?php echo substr($post['post_title'],0,25)."...";?></h4>
                        </div>
                    </div>
                </a>
            </div>

            <?php }?>
            <?php mysqli_free_result($posts);?>

        </div>
    </div>
</section>
<section id="footer-top">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="footer-top-about">
                    <h4 class="section-heading fta-heading">About us</h4>
                    <p class="fta-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi expedita nam nisi sunt! Distinctio nulla quam, qui reiciendis rerum tempora temporibus tenetur veritatis. A ad aliquid dolorum est expedita ?</p>
                    <ul class="fta-list list-unstyled">
                        <li class="fta-list-item"><i class="fta-icon fas fa-map-marker-alt"></i> Shulia savar dhaka dendabor notun para</li>
                        <li class="fta-list-item"><i class="fta-icon fas fa-map-marker-alt"></i> 01779204049</li>
                        <li class="fta-list-item"><i class="fta-icon fas fa-map-marker-alt"></i> naeemhasan@gmail.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer-top-feature">
                    <h4 class="section-heading fta-heading">feature post</h4>
                    <?php
                    $posts=select_all_post(["limit"=>3]);
                    while($post=mysqli_fetch_assoc($posts)){
                    ?>
                    <div class="media mb-2">
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <a href="<?php echo url_for("/post.php?post_id={$post['id']}");?>">
                                    <img src="images/<?php echo $post['post_image'];?>" width="150" class="img-fluid ftf-img" alt="">
                                </a>
                            </div>
                            <div class=" col-md-12 col-lg-6">

                                <div class="media-body">
                                    <a href="<?php echo url_for("/post.php?post_id={$post['id']}");?>">
                                        <h5 class="ftf-heading"><?php echo substr($post['post_title'],0,25)."...";?></h5>
                                    </a>

                                    <span class="ftf-date"><i class="far fa-clock"></i><?php echo $post['post_date'];?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                    <?php mysqli_free_result($posts);?>
                </div>
            </div>
            <div class="col-md-4">
                <h5 class="section-heading">tags cloud</h5>
                <div class="tag-div">
                    <?php
                    $posts=select_all_post();
                    $tags=[];
                    while($post=mysqli_fetch_assoc($posts)) {
                        $l_tags=explode(",",$post['post_tags']);
                        foreach ($l_tags as $r_tag){
                            if(!in_array($r_tag,$tags)){
                                $tags[]=$r_tag;
                            }
                        }
                    }

                    foreach ($tags as $tag){
                    ?>
                    <a href="<?php echo url_for("/post.php?post_t={$tag}");?>" class="tag"><?php echo $tag;?></a>

                    <?php }?>
                    <?php mysqli_free_result($posts);?>
                </div>
                <h6 class="about-social-heading section-heading">
                    Follow Us
                </h6>
                <ul class="about-social">
                    <li class="about-social-item">
                        <a href="#" class="about-social-link facebook"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="about-social-item">
                        <a href="#" class="about-social-link youtube">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                    <li class="about-social-item">
                        <a href="#" class="about-social-link twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="about-social-item">
                        <a href="#" class="about-social-link instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>


                </ul>
            </div>

        </div>
    </div>
</section>
<!-- modal -->
<div class="modal-div">
    <form action="" method="post" class="modal-form">
        <span class="close-icon">&times;</span>
        <label for="" class="modal-label">Search</label>
        <input type="text" class="modal-input" name="search">
        <input name="submit_search" type="submit" value="Search" class="myBtn search-btn">
    </form>
</div>
<!-- fixed social link -->
<div class="fixSocial">
    <ul class="fixSocialContainer">
        <li class="fixSocialItem">
            <a href="#" class="fixSocialLink facebook">
                Facebook <i class="fab fa-facebook-f"></i>
            </a>
        </li>
        <li class="fixSocialItem">
            <a href="#" class="fixSocialLink youtube">
                You Tube <i class="fab fa-youtube"></i>
            </a>
        </li>
        <li class="fixSocialItem">
            <a href="#" class="fixSocialLink twitter">
                Twitter <i class="fab fa-twitter"></i>
            </a>
        </li>
        <li class="fixSocialItem">
            <a href="#" class="fixSocialLink instagram">
                Instagram <i class="fab fa-instagram"></i>
            </a>
        </li>
    </ul>
</div>

<footer id="footer-section" class="text-center">
    <p class="f-content">&copy; 2019 all right reserve by naeem hasan</p>
</footer>
</body>
</html>