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
                <h1 class="display-3 text-white animated zoomIn">Order</h1>
                <a href="" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Order</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <div class="container-fluid banner">
        <div class="container">
            <div class="row gx-0">
                <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary d-flex flex-column p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">Opening Hours</h3>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Mon - Fri</h6>
                            <p class="mb-0"> 8:00am - 9:00pm</p>
                        </div>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Saturday</h6>
                            <p class="mb-0"> 8:00am - 7:00pm</p>
                        </div>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Sunday</h6>
                            <p class="mb-0"> 8:00am - 5:00pm</p>
                        </div>
                        <!-- <a class="btn btn-light" href="">Appointment</a> -->
                    </div>
                </div>
                <div class="col-lg-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-secondary d-flex flex-column p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">Make Order Now</h3>
                        <p class="text-white">Qualify is our first periority</p>
                        <h2 class="text-white mb-0">+9710562552106</h2>
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