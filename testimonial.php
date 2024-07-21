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
                <h1 class="display-3 text-white animated zoomIn">Testimonials</h1>
                <a href="" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Testimonials</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <div class="container-fluid bg-primary bg-testimonial py-5 my-5 wow fadeInUp" data-wow-delay="0.1s">
        <h1 class="display-6 text-center">Client <strong class="">Testimonials</strong>   </h1>
        <div class="container ">

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="owl-carousel testimonial-carousel rounded p-5 wow zoomIn" data-wow-delay="0.6s">
                         <!--  -->
                         <?php
									$s = "select * from testimonial";
									$r = mysqli_query($db, $s);
									while ($row = mysqli_fetch_assoc($r)) {
									$id = $row['id'];
									$name = $row['name'];
									$pic = $row['pic'];
									$profession = $row['profession'];
									$comment = $row['comment'];

									$created_at = $row['created_at'];
									?>
                         <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto rounded mb-4" src="uploads/testimonial/<?php echo $pic; ?>" alt="">
                            <p class="fs-5"> <?php echo $comment ?></p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0"><?php echo $name ?></h4>
                        </div>
                        <?php } ?>
                        <!--  -->
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