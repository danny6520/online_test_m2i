<?php session_start(); 
if(isset($_SESSION['login_admin_user_email']))
{
  include('db_connect/online_test_json_angular_db_connect.php');
?>
<html lang="en">
  
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Online Exam</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="#" rel="icon">
  <link href="#" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Vesperr - v4.9.1
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>


<body>
        <style>
            #example1 {
        border: 1px solid;
  padding: 20px;
  border-radius: 10px;
  border: 2px solid #eceef1;
  background: white;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
  
}
#example2 {
  border: 1px solid;
  padding: 20px;
  border-radius: 10px;
  border: 2px solid #eceef1;
  background-color: #f4fffe;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
  
}
body {
       /* background-color: #f7f7f7;
       background-image: url('images/blue_bg.jpg'); */
       background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }

            #shadow_box_grey {
            
                border: 1px solid;
                padding: 20px;
                box-shadow: 15px 10px 18px gray;
                background: white;
            }
            /*
            body {
      background-color: #f7f7f7;
      background-image: url('images/blue_bg.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background: linear-gradient(90deg, #C7C5F4, #776BCC);		
    }
    */
            #footer {
                background-color: ghostwhite;
            }

            table {
            
              border-collapse: collapse;
            border: 2px solid #eceef1;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
           
width: 100% ;
}
th, td {

text-align: center;
padding: 8px;
} 

.navbar .getstarted, .navbar .getstarted:focus {
  background: #e64a4a;
    }

tr:nth-child(even) {background-color: #f2f2f2;}


        </style>

<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="#">Online Exam</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
                <?php
              if($_SESSION['login_user_role'] == "Admin" || $_SESSION['login_user_role'] == "SUPER ADMIN")
              {
                ?>
                    <li><a class="nav-link scrollto" href="add_organization.php">Add Organization</a></li>
                    <li><a class="nav-link scrollto" aria-current="page" href="add_user.php">Add User</a></li>
                    <li><a class="nav-link scrollto" aria-current="page" href="add_class.php">Add Class</a></li>
                    <li><a class="nav-link scrollto" aria-current="page" href="add_subject.php">Add Subject</a></li>
                    <li><a class="nav-link scrollto" href="add_question.php">Add Questions</a></li>
                    <li><a class="nav-link scrollto" href="display_questions.php">Modify Questions</a></li>
                    <li><a class="nav-link scrollto active" aria-current="page" href="take_exam.php">Take exam</a></li>
                      

               <?php
              }
            else if($_SESSION['login_user_role'] == "User") {

            
              ?>
               <li><a class="nav-link scrollto active" href="take_exam.php">Take exam</a></li>
                      


                      <?php
            }
            ?>
            <li class="nav-item">
                 
            <li><a class="getstarted scrollto" href="logout_process.php">Logout</a></li>
            
               </li>
               </ul>
              </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->



        <div class="container">
        <br /><br /><br /><br />
<h6>Logged in as: <b><font color="maroon"><?php echo $_SESSION['login_admin_user_email']; ?></font></b></h6>
<h6>Role: <b><font color="green"><?php echo $_SESSION['login_user_role']; ?></font></b></h6>
<hr>
<!--            
<div id="shadow_box_grey">
            <div style="overflow-x:auto;">
<table border='1' cellspacing='10' cellpadding='20p'>
<tr><th>Class</th><th>Subject</th><th>Take Exam</th></tr>
<tr><td>Class 1</td><td>Subject 1</td><td><a href="start_test.php"><button class="btn btn-info">Take Exam</button></a></tr>
<tr><td>Class 2</td><td>Subject 2</td><td><a href="start_test.php"><button class="btn btn-info">Take Exam</button></a></tr>
<tr><td>Class 3</td><td>Subject 3</td><td><a href="start_test.php"><button class="btn btn-info">Take Exam</button></a></tr>
        </table>
            </div>
        </div>
          -->
          <h2><u>Take Exam</u></h2>
<div id="example1" style="background-image: url('images/design2.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed;">
<form action="fetch_exam_data.php" method="POST">
<label>Organization Name:</label><br />
<select name="organization_id" class="form-control">
<?php 
//$sql ="SELECT * FROM org_info WHERE org_updated_by='$_SESSION[login_admin_user_email]' AND org_status='A'";   
$sql = "SELECT * FROM org_info WHERE org_status = 'A' AND pk_org_id IN (SELECT user_org_id FROM user_info WHERE user_email = '$_SESSION[login_admin_user_email]' AND user_status = 'A') OR (org_updated_by = '$_SESSION[login_admin_user_email]' AND org_status = 'A')";
//echo $sql;                           
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row=$result->fetch_assoc())
	{
	$org_id=$row['pk_org_id'];
	$org_name=$row['org_name'];
	?>
	<option value="<?php echo $org_id; ?>"><?php echo $org_name; ?></option>
  
	<?php
  echo $conn->error;
	}
}
else
{
echo "0 results";
}

?>
</select>
<br />

<label>Class Name:</label><br />
<select name="class_id" class="form-control">
<?php 
//$sql2 ="SELECT * FROM class_info WHERE fk_org_id IN (SELECT user_org_id FROM user_info WHERE user_email = '$_SESSION[login_admin_user_email]' AND user_status='A')";       
$sql2 = "SELECT * FROM class_info WHERE fk_org_id IN (SELECT user_org_id FROM user_info WHERE user_email = '$_SESSION[login_admin_user_email]' AND user_status='A') OR fk_org_id IN (SELECT pk_org_id from org_info WHERE org_updated_by='$_SESSION[login_admin_user_email]' AND org_status='A')";
//echo $sql2;                           
$result = $conn->query($sql2);
if ($result->num_rows > 0) {
	while($row=$result->fetch_assoc())
	{
	$class_id=$row['pk_class_id'];
	$class_name=$row['class_name'];
	?>
	<option value="<?php echo $class_id; ?>"><?php echo $class_name; ?></option>
  
	<?php
	}
}
else
{
echo "0 results";
}

?>
</select>
<br />

<label>Subject Name:</label><br />
<select name="subject_id" class="form-control">
<?php 
$sql3 ="SELECT * FROM subject_info WHERE subject_status='A' AND fk_org_id IN (SELECT user_org_id FROM user_info WHERE user_email = '$_SESSION[login_admin_user_email]' AND user_status='A') OR fk_org_id IN (SELECT pk_org_id from org_info WHERE org_updated_by='$_SESSION[login_admin_user_email]' AND org_status='A')";     
echo $sql3;                           
$result = $conn->query($sql3);
if ($result->num_rows > 0) {
	while($row=$result->fetch_assoc())
	{
	$subject_id=$row['pk_subject_id'];
	$subject_name=$row['subject_name'];
	?>
	<option value="<?php echo $subject_id; ?>"><?php echo $subject_name; ?></option>
  
	<?php
	}
}
else
{
echo "0 results";
}

?>
</select>
<br />
<button type="submit" class="btn btn-primary" name="submit">Take Exam</button> <br /><br />
</form>
</div>



<!-- ======= Services Section ======= 
<section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>User Guide</h2>
          <p>Below is the quick guide for users</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

        </div>

      </div>
    </section>--><!-- End Services Section -->
 
     <!-- ======= About Us Section ======= -->
     <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
            <p>
              Cloud Masters Program makes you proficient in designing, planning, and scaling cloud implementation.  , AWS Architectural Principles, Migrating Applications on Cloud and DevOps.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Cloud Computing</li>
              <li><i class="ri-check-double-line"></i> Cloud deployment and service models</li>
              <li><i class="ri-check-double-line"></i>AWS Regions, Availability Zones, and Edge Locations</li>
              <li><i class="ri-check-double-line"></i>AWS Services</li>
              <li><i class="ri-check-double-line"></i>Ways to access AWS Services: AWS CLI, AWS SDK, AWS Management Console</li>
              <li><i class="ri-check-double-line"></i>Hands-On</li>
             </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <p>
              With internet-based computing, exchange of information has been facilitated with universal access of the computing resources also allowing enterprises to store and process huge data in data centers provided by third-party.
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

 
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>-->
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  
        <br /><br />
        <div class="fixed-bottom" id="footer">
            <center>Efreelearn | All rights reserved</center>
            </div>

        </div>
       
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>
<?php 
}
else {
    echo "<h1>Redirecting...Please Wait..!</h1>";
    echo "<script> alert('Please Login..!')</script>";
    echo "<script> location.href='index.html'</script>";
}
?>