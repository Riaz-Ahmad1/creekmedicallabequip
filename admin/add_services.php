<?php
include 'session.php'; // session
include 'db.php'; // database connectioin
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Admin</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <style media="screen">
    @media only screen and (min-width: 375px) and (max-width: 575px) {
      .d-none {
        display: flex !important;
      }

      .d-none i {
        display: none;
      }
    }
  </style>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include 'topnavbar.php'; ?>
        <!-- End of Topbar -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h5 mb-0 text-gray-800">New Services</h1>
            <a href="view_services.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-eye fa-sm text-white-50"></i> View Services</a>
          </div>

          <!-- Content Row -->
          <div class="row">
            <div class="col-md-12 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <form class="" method="post" name="theform" enctype='multipart/form-data'>
                    <?php
                    // initializing variables
                    $sname = "";
                    $sdetail = "";
                    $simage    = "";

                    // connect to the database
                    // uncomment below database connection to proceed its working other it will create error
                    // $db = mysqli_connect('localhost', 'root', '', 'scljobportal');

                    // REGISTER USER
                    if (isset($_POST['save_data'])) {
                      // receive all input values from the form
                      $sname = mysqli_real_escape_string($db, $_POST['sname']);
                      $sdetail = mysqli_real_escape_string($db, $_POST['sdetail']);
                      $price = mysqli_real_escape_string($db, $_POST['price']);

                      $simage = $_FILES['simage']['name'];

                      $target_dirr = "../uploads/service/";
                      $target_file = $target_dirr . basename($_FILES["simage"]["name"]);
                      move_uploaded_file($_FILES['simage']['tmp_name'], $target_dirr . $simage);
                      // Finally, send data into table

                      $query = "INSERT INTO services(sname,simage,sdetail,price)VALUES('$sname','$simage','$sdetail','$price')";
                      $result =  mysqli_query($db, $query);
                      if ($result) {
                        echo '
                                             <div class="alert alert-success  alert-dismissible">
                                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                                             <strong> Data Saved Successfully </strong>
                                             </div>
                                             ';
                        header('Refresh:2,url=add_services.php');
                      } else {
                        echo '
                                              <div class="alert alert-danger  alert-dismissible">
                                               <button type="button" class="close" data-dismiss="alert">&times;</button>
                                              <strong> Query Failed </strong>
                                              </div>
                                              ';
                      }
                    }

                    // ...
                    ?>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="inputEmail4" class="formlabel">Title <span class="text-danger"> * </span> </label>
                          <input type="text" name="sname" class="form-control form-control-sm" value="<?php echo $sname; ?>" placeholder="" required>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="inputEmail4" class="formlabel">Image <span class="text-danger"> * </span> </label>
                          <input type="file" name="simage" class="form-control form-control-sm" value="<?php echo $simage; ?>" placeholder="" required>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="inputEmail4" class="formlabel">Price <span class="text-danger"> * </span> </label>
                          <input type="number" name="price" class="form-control form-control-sm" value="<?php echo $price; ?>" placeholder="" required>
                        </div>
                      </div>
                    </div> <!--1st row-->
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="inputEmail4" class="formlabel">Description <span class="text-danger"> * </span> </label>
                           <textarea name="sdetail"  class="form-control form-control-sm" id="" cols="30" rows="6">
                           <?php echo $sdetail; ?>
                           </textarea>
                        </div>
                      </div>
                    </div> <!--1st row-->
                    <hr>
                    <div class="form-group text-right">
                      <input type="submit" name="save_data" class="btn btn-sm btn-primary shadow-sm" value="Save">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- Content Row -->
        </div>

        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->


    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />

</body>

</html>