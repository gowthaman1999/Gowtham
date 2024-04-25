<!DOCTYPE html> 
<html lang="en">
<head>
    <?php
        include "head.php";
    ?>
</head>
<body>
    
<!--==================== Preloader Start ====================-->
<!-- <div class="preloder" id="page-preloader">
    <div class="circle"></div>
  </div> -->
<!--==================== Preloader End ====================-->

<!-- ==================== Header Top Start Here ==================== -->
<div class="header-top d-none d-lg-block">
    
</div>
<!-- ==================== Header Top End Here ==================== -->

<!-- ==================== Bottom Header Start Here ==================== -->
<?php
    include "nav.php";
?>
<!-- ==================== Bottom Header End Here ==================== -->

<!-- ==================== Beadcumb Start Here ==================== -->
<section class="breadcumb bg-img overlay-bg py-80" style="background-image: url(assets/images/breadcumb/breadcumb.png);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="breadcumb-content">
                    <h4 class="breadcumb-title text-center text-white">CONTACT US</h4>
                    <ul class="breadcumb-list d-flex justify-content-center align-items-center">
                        <li><a href="index.php">HOME</a></li>
                        <li><span>/</span></li>
                        <li>CONTACT US</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==================== Beadcumb  End Here ==================== -->


<!-- ==================== Contact Start Here ==================== -->
<section class="contact py-100">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-6">
                <div class="row gy-4">
                    <div class="col-sm-12">
                        <div class="contact-address d-flex flex-row text-sm-start text-start">
                            <div class="icon">
                                <img src="assets/images/contact/contact-icon-04.png" alt="">
                            </div>
                            <div class="content">
                                <h6 class="title">GIVE US CALL</h6>
                                <p class="text" style="font-size:20px; margin-top:-10px"><a href="tel:+918887250143"> <b>(888)725-0143</b></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="contact-address d-flex flex-row text-sm-start text-start">
                            <div class="icon">
                                <img src="assets/images/contact/contact-icon-02.png" alt="">
                            </div>
                            <div class="content">
                                <h6 class="title">SEND US A MESSAGE</h6>
                                <p class="text" style="margin-top:-8px"><a href="mailto:sale@universalinternetproviders.com"><span class="__cf_email__" data-cfemail="5c35323a336d6e6f1c3b313d3530723f3331">sale@universalinternetproviders.com</span></a></p>
                                <p class="text"><a href="mailto:support@universalinternetproviders.com"><span class="__cf_email__" data-cfemail="5c35323a336d6e6f1c3b313d3530723f3331">support@universalinternetproviders.com</span></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="contact-address d-flex flex-row text-sm-start text-start">
                            <div class="icon">
                                <img src="assets/images/contact/contact-icon-01.png" alt="">
                            </div>
                            <div class="content">
                                <h6 class="title">OFFICIAL LOCATION</h6>
                                <p class="para"></p>
                                <p class="text">111 E Avenue H Hooks, <br>TX 75561, USA</p>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="contact-para pt-lg-4 pt-2">We are dedicated to serving customers.<br>We achieve this not only through our extensive portfolio of internet.</p>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-header style-two">
                            <h4 class="subtitle">FEEL FREE TO CONTACT</h4>
                            <h2 class="title"></h2>
                        </div>
                    </div>
                </div>
                <form action="#" autocomplete="off">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-form-field mb-4">
                                <input type="text" id="yourname" class="form-control form--control style-two" placeholder="Your Name" required="">
                            </div>
                       </div>
                        <div class="col-md-6">
                            <div class="contact-form-field mb-4">
                                <input type="email" id="yourEmail" class="form-control form--control style-two" placeholder="Email" required="">
                            </div>
                       </div>
                       <div class="col-md-6">
                            <div class="contact-form-field mb-4">
                                <input type="text" id="phone" class="form-control form--control style-two" placeholder="Phone" required="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-form-field mb-4">
                                <input type="text" id="yoursubject" class="form-control form--control style-two" placeholder="Subject" required="">
                            </div>
                        </div>
                       <div class="col-md-12">
                        <div class="contact-form-field mb-4">
                            <textarea id="yourComment" class="form-control form--control style-two" placeholder="Message" spellcheck="false"></textarea>
                        </div>
                       </div>
                       <div class="col-md-12 mt-2">
                        <div class="contact-form-field">
                            <button type="submit" class="btn--base">SEND MESSAGE </button>
                        </div>
                       </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- ======================  Contact End Here ==================== -->

<!-- ==================== Footer End Here ==================== -->
<?php
include "foot.php"; 
?>

</body>
</html>