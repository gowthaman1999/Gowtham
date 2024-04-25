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
                    <h4 class="breadcumb-title text-center text-white">DON'T SHARE</h4>
                    <ul class="breadcumb-list d-flex justify-content-center align-items-center">
                        <li><a href="index.html">HOME</a></li>
                        <li><span>/</span></li>
                        <li>DON'T SHARE</li>
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

        <!-- Text -->
        <center>
            <p class="para pt-3 pb-3"><b>Please fill out the form below if you want to choose not to have your information sold in accordance with the California Consumer Privacy Act (CCPA).</b></p>

            <form action="#" autocomplete="off">
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8">
                                <div class="contact-form-field mb-3">
                                    <input type="text" id="" class="form-control form-control-lg " placeholder="Enter Your Name *" required="">
                                </div>
                            </div>
                            <div class="col-md-2">
                            </div>
                        </div>
                    </div>
                   </div>
                    <div class="col-md-12 mt-3">
                        <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8">
                                <div class="contact-form-field mb-3">
                                    <input type="email" id="" class="form-control form-control-lg " placeholder="Enter Your E-Mail *" required="">
                                </div>
                            </div>
                            <div class="col-md-2">
                            </div>
                        </div>
                   </div>
                   <div class="col-md-12 mt-2">
                        <div class="contact-form-field">
                            <button type="submit" class="btn--base">SUBMIT <i class="far fa-paper-plane"></i></button>
                        </div>
                    </div>
               </div>
           </form>
        </center> 
                            
    </div>
</section>
<!-- ======================  Contact End Here ==================== -->

<!-- ========================= Footer Contact Start Here ==================== -->
<?php
include "foot.php"; 
?>

</body>
</html>
