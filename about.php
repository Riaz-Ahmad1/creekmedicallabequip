<!DOCTYPE html>
<html lang="en">

<head>
 <?php  include 'includes/head.php'; ?>
</head>

<body>

<?php include 'includes/loader.php'; ?>

    <!-- Topbar Start -->
    <?php  include 'includes/topbar.php'; ?>
    <!-- Topbar End -->
    <!-- Navbar Start -->
    <?php  include 'includes/navbar.php'; ?>
    <!-- Navbar End -->
     
    <!-- content start -->

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">About</h1>
                <a href="" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">About Us</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">About Us</h5>
                        <h1 class="display-5 mb-0">The World's Best Medical Equipment That You Can Trust</h1>
                    </div>
                    <h4 class="text-body fst-italic mb-4">We provide solution for all lab requirements
                    </h4>
                    <p class="mb-4">
                    The company was founded in Dubai, which is one of the seven 
                    emirates of the U.A.E. The company specializes in the supply and installation of all 
                    types of laboratory microscopes. Olympus world marked the beginning of 
                    educational microscopes and the access to microscopes for research and advanced technologies.
                    </p>
                    <div class="row g-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Award Winning</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Professional Staff</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>24/7 Opened</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Fair Prices</h5>
                        </div>
                    </div>
                    <a href="appointment.php" class="btn btn-primary py-3 px-5 mt-4 wow zoomIn" data-wow-delay="0.6s">Make Order Now</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <!-- Newsletter Start -->
    <?php  include 'includes/signup.php'; ?>
    <!-- Newsletter End -->
     <!-- content end -->




    <?php  include 'includes/footer.php'; ?>

</body>

</html>