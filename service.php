<!DOCTYPE html>
<html lang="en">

<head>
    <title>Services</title>
    <?php include 'includes/head.php'; ?>
</head>

<body>

    <?php include 'includes/loader.php'; ?>

    <!-- Topbar Start -->
    <?php include 'includes/topbar.php'; ?>
    <!-- Topbar End -->
    <!-- Navbar Start -->
    <?php include 'includes/navbar.php'; ?>
    <!-- Navbar End -->
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
                <h1 class="display-3 text-white animated zoomIn">Services</h1>
                <a href="" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Services</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 mb-5">
                <div class="col-md-6">
                    <div class="section-title mb-5">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Services</h5>
                        <h1 class="display-5 mb-0">We Offer The Best Quality Dental Services</h1>
                    </div>
                </div>
                <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.9s">
                    <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-4">
                        <h3 class="text-white mb-3">Make Order Now</h3>
                        <p class="text-white mb-3">Ordering from us is easy and reliable.Take the first step towards better healthcare solutions!
                        </p>
                        <h2 class="text-white mb-0">+012 345 6789</h2>
                    </div>
                </div>

            </div>
            <div class="row g-5 wow fadeInUp" data-wow-delay="0.1s">
                <!--  -->
                <?php
                $s = "select * from services";
                $r = mysqli_query($db, $s);
                while ($row = mysqli_fetch_assoc($r)) {
                    $id = $row['id'];
                    $sname = $row['sname'];
                    $simage = $row['simage'];
                    $price = $row['price'];
                ?>
                    <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.3s">
                        <div class="rounded-top overflow-hidden">
                            <img class="" src="uploads/services/<?php echo $simage; ?>" alt="" width="100%" height="250px">
                        </div>
                        <div class="position-relative bg-light rounded-bottom text-center p-4">
                            <h5 class="m-0"> <?php echo $sname; ?> </h5>
                        </div>
                    </div>
                <?php } ?>
                <!--  -->
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Newsletter Start -->
    <?php include 'includes/signup.php'; ?>
    <!-- Newsletter End -->
    <!-- content end -->

    <?php include 'includes/footer.php'; ?>

</body>

</html>