<?php require_once "share/initialize.php";?>

<?php include INCLUDES."/header.php";?>
<?php include INCLUDES."/navigation.php";?>

<section class="myBreadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <span class="active-bread"><i class="fas fa-home"></i> Home > </span>
                <span>About</span>
            </div>
        </div>
    </div>
</section>

<section id="aboutMain" class="">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="aboutpic-div">
                    <img src="images/about-pic.png" class="about-img" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-right-content">
                    <h4 class="about-heading">Thank you for visit our website</h4>
                    <p class="about-para">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis aliquid illum obcaecati maiores amet pariatur omnis culpa illo sequi dolore.
                    </p>
                    <p class="about-para">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis pariatur quaerat ipsa natus accusantium modi.
                         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis pariatur quaerat ipsa natus accusantium modi.
                    </p>
                    <h6 class="about-social-heading">
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
    </div>
</section>


<section class="subscribe about-subscribe my-5">
    <div class="container">
        <div class="row px-5 about-sub-container">
            <div class="col-md-6">
                <h6 class="about-sub-heading-top">
                    don't miss out feature update!
                </h6>
                <h2 class="about-sub-heading-sub">
                    get subscribe today !
                </h2>
            </div>
            <div class="col-md-6">
                <form action="" class="about-sub-form">
                    <div class="row">
                        <div class="col-md-8">
                            <input type="text" class="about-sub-input" placeholder="Your Email">
                        </div>
                        <div class="col-md-3">
                            <input type="submit" class="about-sub-btn" value="SUBSCRIBE" >
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include INCLUDES."/page_bottom.php";?>