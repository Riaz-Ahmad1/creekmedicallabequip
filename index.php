

<!DOCTYPE html>
<html lang="en">

<head>
 <?php  include 'includes/head.php'; ?>
 <style>
                #ScrollToTop {
                display: none;
                position: fixed;
                bottom: 20px;
                right: 30px;
                z-index: 999999999;
                font-size: 18px;
                border: none;
                outline: none;
                background-color: #222;
                color: white;
                cursor: pointer;
                border-radius: 3px;
                width: 40px;
                height: 40px;
                text-align: center;
                line-height: 35px;
                vertical-align: middle;
            }

            .fa-angle-double-up:before {
                content: "\f102";
            }

            #ScrollToTop i {
                line-height: 40px;
            }
 </style>
</head>

<body>
    <!-- Spinner Start -->
    <?php include 'includes/loader.php'; ?>

    <!-- Spinner End -->


    <!-- Topbar Start -->
    <?php include 'includes/topbar.php'; ?>

    <!-- Topbar End -->


    <!-- Navbar Start -->
    <?php  include 'includes/navbar.php'; ?>

    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Keep Your Order Now</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Take The Best Quality </h1>
                            <a href="appointment.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Order Now</a>
                            <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown"></h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Your Wellness, Our Priority</h1>
                            <a href="appointment.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Order Now</a>
                            <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Banner Start -->
    <div class="container-fluid banner mb-5">
        <div class="container">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
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
                        <a class="btn btn-light" href="appointment.php">Order Now</a>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-dark d-flex flex-column p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">Our Services</h3>
                         <p class="text-white">
                         We provide top-quality, reliable products designed to meet the highest standards of safety and performance.
                         </p>
                        <a class="btn btn-light" href="">View Our Products</a>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-secondary d-flex flex-column p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">Make Order Now</h3>
                        <p class="text-white mb-3">Ordering from us is easy and reliable.Take the first step towards better healthcare solutions!
                        <h2 class="text-white mb-0">+9710562552106</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Start -->


    <!-- About Start -->
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
    <!-- About End -->


    <!-- Appointment Start -->
    <div class="container-fluid bg-primary bg-appointment my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="display-5 text-white mb-4">We Are Best Quality Medical Equipment Supplier You Can Trust</h1>
                        <p class="text-white mb-0">We are the best quality medical equipment supplier you can trust. Our 
                            certified and award-winning products meet the highest standards of safety and performance. From
                             diagnostic tools to therapeutic devices, we offer a comprehensive range of equipment to ensure
                              optimal care for healthcare professionals and patients alike. 
                            Trust us to provide the best solutions for all your medical equipment needs.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="img/medicaimg.jpg" alt="" width="100%" height="550px">
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->


    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 ">
                 <div class="section-title mb-5">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Services</h5>
                        <h1 class="display-5 mb-0">We Offer The Best Quality Dental Services</h1>
                   </div>
                </div>

                    <div class="row g-5 mb-5">
                        <!--  -->
                        <?php
                            $s ="select * from services";
                            $r =mysqli_query($db, $s);
                            while ($row = mysqli_fetch_assoc($r)) {
                            $id = $row['id'];
                            $sname = $row['sname'];
                            $simage = $row['simage'];
                            $price = $row['price'];
                            ?>

                        <div class="col-md-3 service-item wow zoomIn" data-wow-delay="0.6s">
                            <div class="rounded-top overflow-hidden">
                                <img class="" src="uploads/service/<?php echo $simage; ?>" height="250px" width="100%" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0"><?php echo $sname; ?></h5>
                                <hr class="text-primary w-50 mx-auto mt-0">
                                $<?php echo $price; ?>
                                <a href="appointment.php" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Buy 

                                </a>

                            </div>
                        </div>
                        <?php } ?>
                        <!--  -->
                    </div>
                </div>
            
            <div class="row g-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-12 service-item wow zoomIn" data-wow-delay="0.9s">
                    <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-4">
                        <h3 class="text-white mb-3">Make Order Now</h3>
                        <h2 class="text-white mb-0">+012 345 6789</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Offer Start -->
    <div class="container-fluid bg-offer my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7 wow zoomIn" data-wow-delay="0.6s">
                    <div class="offer-text text-center rounded p-5">
                        <h1 class="display-5 text-white">Save 30% On Your First Order</h1>
                        <p class="text-white mb-4">Save 30% on your first order of our top-quality medical equipment! 
                            Take advantage of this limited-time offer to experience our certified and award-winning products 
                            at an unbeatable price. Whether you need diagnostic tools or therapeutic devices, we provide reliable 
                            solutions to meet all your healthcare needs. Shop now and start saving!</p>
                        <a href="appointment.php" class="btn btn-dark py-3 px-5 me-3">Order Now</a>
                        <a href="appointment.php" class="btn btn-light py-3 px-5">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->


    <!-- Pricing Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Pricing Plan</h5>
                        <h1 class="display-5 mb-0">We Offer Fair Prices</h1>
                    </div>
                    <p class="mb-4">We offer fair prices on all our medical equipment, ensuring you get the best 
                        value without compromising on quality. 
                        Shop with confidence, knowing you’re getting the best deal for top-quality medical equipment.</p>
                    <h5 class="text-uppercase text-primary wow fadeInUp" data-wow-delay="0.3s">Call for Order</h5>
                    <h1 class="wow fadeInUp" data-wow-delay="0.6s">+9710562552106</h1>
                </div>
                <div class="col-lg-7">
                    <div class="owl-carousel price-carousel wow zoomIn" data-wow-delay="0.9s">
                        <!--  -->
                            <?php
                            $s ="select * from services";
                            $r =mysqli_query($db, $s);
                            while ($row = mysqli_fetch_assoc($r)) {
                            $id = $row['id'];
                            $sname = $row['sname'];
                            $simage = $row['simage'];
                            $price = $row['price'];
                            ?>

                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class=" rounded-top" src="uploads/service/<?php echo $simage; ?>" alt="" height="300px">
                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                    <h2 class="text-primary m-0">$<?php echo $price; ?></h2>
                                </div>
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                <h4><?php echo $sname; ?></h4>
                                <hr class="text-primary w-50 mx-auto mt-0">
                                <a href="appointment.php" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Buy</a>
                            </div>
                        </div>
                        <?php
                         }
                        ?>
                       <!--  -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing End -->


    <!-- Testimonial Start -->
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
    <!-- Testimonial End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.1s">
                    <div class="section-title bg-light rounded h-100 p-5">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Team</h5>
                        <h1 class="display-6 mb-4">Meet Our Certified & Experienced People</h1>
                        <!-- <a href="appointment.php" class="btn btn-primary py-3 px-5">Order Now</a> -->
                    </div>
                </div>

                <!--  -->
                <?php
                     $s = "select * from team";
                     $r = mysqli_query($db, $s);
                     while ($row = mysqli_fetch_assoc($r)) {
                     $id = $row['id'];
                     $name = $row['name'];
                     $picture = $row['picture'];
                     $designation = $row['designation'];
                     $created_at = $row['created_at'];
                     ?>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item">
                        <div class="position-relative rounded-top" style="z-index: 1;">
                            <img class="img-fluid rounded-top w-100" src="uploads/team/<?php echo $picture; ?>" alt="">
                            <div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                            <h4 class="mb-2"><?php echo $name; ?></h4>
                            <p class="text-primary mb-0"><?php echo $designation; ?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <!--  -->
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Newsletter Start -->
     <?php
         include 'includes/signup.php';
     ?>
    <!-- Newsletter End -->
    



    <?php  include 'includes/footer.php'; ?>

    <span onclick="topFunction()" id="ScrollToTop" title="Go to top" style="display: block;">
            <i aria-label="Go to top" class="fa fa-angle-double-up"></i>
        </span>

        <script type="text/javascript">
            function show_menu_mob() {
                document.getElementById("nav_wrap").className += 'show_mob_menu';
            }

            function hide_menu_mob() {
                document.getElementById("nav_wrap").className = '';
            }

            function on_search() {
                document.getElementById("search_wrap").style.display = "block";
                document.getElementById("kwd").focus();
            }

            function off_search() {
                document.getElementById("search_wrap").style.display = "none";
            }

            var ScrollButton = document.getElementById("ScrollToTop");
            window.onscroll = function() {
                scrollFunction()
            };

            function scrollFunction() {
                if (window.pageYOffset > 20) {
                    ScrollButton.style.display = "block";
                } else {
                    ScrollButton.style.display = "none";
                }
            }

            function topFunction() {
                document.body.scrollIntoView({
                    behavior: "smooth"
                });
            }

            function scrollToi(id) {
                this.event.preventDefault();
                document.getElementById(id).scrollIntoView({
                    behavior: "smooth"
                });


                /*const yOffset = -70; 
                const element = document.getElementById(id);
                const y = element.getBoundingClientRect().top + window.pageYOffset + yOffset;
                
                window.scrollTo({top: y, behavior: 'smooth'});*/
            }

            function scrollToc(to_id) {
                this.event.preventDefault();
                var element = document.getElementById(to_id);
                element.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
                setTimeout(function() {
                    window.location.hash = to_id;
                }, 100);
            }
        </script>

</body>

</html>