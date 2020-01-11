<?php require_once "share/initialize.php";?>

<?php include INCLUDES."/header.php";?>
<?php include INCLUDES."/navigation.php";?>

<section class="myBreadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <span class="active-bread"><i class="fas fa-home"></i> Home > </span>
                <span>Contact</span>
            </div>
        </div>
    </div>
</section>

<section id="contactMain" class="">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-left">
                    <h4 class="left-heading section-heading">
                        get in touch
                    </h4>
                    <p class="left-para">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, dignissimos accusamus amet culpa quia sequi harum odit a laboriosam sunt officia ab vero, explicabo placeat.
                    </p>
                    <ul class="contact-address">
                        <li class="address-item">
                            <span class="address-icon"><i class="fas fa-map-marker-alt"></i>
                            </span>
                            <span class="address-item-text">
                                nobinagor,savar dhaka
                            </span>
                        </li>
                        <li class="address-item">
                            <span class="address-icon">
                                <i class="fas fa-phone"></i>
                            </span>
                            <span class="address-item-text">
                                01779204049
                            </span>
                        </li>
                        <li class="address-item">
                            <span class="address-icon">
                                <i class="far fa-envelope"></i>
                            </span>
                            <span class="address-item-text">
                               naeemhasan252@gmail.com
                            </span>
                        </li>
                    </ul>
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
            <div class="col-md-6">
                <div class="contact-right">
                    <h2 class="contact-right-heading section-heading">
                        leave a message
                    </h2>
                    <form action="" class="contact-right-form">
                        <div class="row">
                            <div class="col-12">
                                <input type="text" class="contact-right-input" placeholder="Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <input type="email" class="contact-right-input" placeholder="Email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <input type="text" class="contact-right-input" placeholder="Website">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <textarea name="message" id="message" cols="30" rows="10" class="message" placeholder="message"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <input type="submit" class="contact-sub-btn" value="SEND MESSAGE">
                            </div>
                        </div>
                    </form>
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