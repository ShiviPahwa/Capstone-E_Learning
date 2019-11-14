<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>E- Learning: Course Single</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="img/logo.png"/>

    <!-- CSS
    ================================================== -->       
    <!-- Bootstrap css file-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="css/superslides.css">
    <!-- Slick slider css file -->
    <link href="css/slick.css" rel="stylesheet"> 
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>  
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="css/animate.css"> 
    <!-- preloader -->
    <link rel="stylesheet" href="css/queryLoader.css" type="text/css" />
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="css/jquery.tosrus.all.css" />    
    <!-- Default Theme css file -->
    <link id="switcher" href="css/themes/default-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="style.css" rel="stylesheet">
   
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>   
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body> 

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
      <!-- BEGIN MENU -->
      <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">  <div class="container">
            <div class="navbar-header">
              <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- LOGO -->
              <!-- TEXT BASED LOGO -->
              <a class="navbar-brand" href="index.php"><marquee height="50px" >E- Learning</marquee></a>              
              <!-- IMG BASED LOGO  -->
               <!-- <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="logo"></a>  -->               
            </div>
             <div id="navbar" class="navbar-collapse collapse">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                <li><a href="stindex.php">Home</a></li>
                <li><a href="regcourse.php">Course Registration</a></li>
                <li class="active"><a href="My courses.php">My courses</a></li>
                <li><a href="LIBRARY/index.php">Library</a></li>
                <li><a href="gallery.php">Gallery</a></li>                
                <li><a href="Change profile.php">Change profile</a></li>              
                <li><a href="contact.php">Contact</a></li>
                <li><a href="logout.php">Logout</a></li>
              </ul>           
            </div><!--/.nav-collapse -->
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->    
    </header>
    <!--=========== END HEADER SECTION ================--> 

    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="imgBanner">
      <h2>Course Details</h2>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->

    
    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="courseArchive">
      <div class="container">
        <div class="row">
          
          <!-- start course content -->
          <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="courseArchive_content">              
             
        	<?php
        		if(!isset($_SESSION["id"]))
                {
                header("location:Login.php");
                }
                $conn=mysqli_connect("localhost", "root", "", "e learning");
                $skl=$_GET["course_name"];
                $qry=mysqli_query($conn, "select * from tut where Skilll='$skl'");
                while($data=mysqli_fetch_array($qry))
                {
        	?>
             <div class="singlecourse_ferimg_area">
               <div class="singlecourse_ferimg">
                 <img src="img/<?php echo $data['Image']; ?>" alt="img">
               </div>  
                <div class="singlecourse_bottom">
                  <h2><?php echo $data["Skilll"]; ?></h2>
                  <span class="singlecourse_author">
                    <?php echo $data["Name"]; ?>
                  </span>
                </div>
             </div>
             <?php } ?>
             <div class="single_course_content">
               <table class="table table-striped course_table">
                <thead>
                  <tr>          
                    <th>Pdf Title</th>
                    <th>Download</th>
                  </tr>
                </thead>
                <tbody>
                	<?php 
                		$q=mysqli_query($conn, "select * from pdfs where skill_name='$skl'");
                		while($d=mysqli_fetch_array($q))
                		{
                	?>

                  <tr>          
                    <td><?php echo $d["pdf_name"]; ?></td>
                    <td><a href="pdfs\<?php echo $d['pdf_name']; ?>" download>download</a></td>
                  </tr>
                  <?php } ?>
                  </tbody>
              </table>

                   <table class="table table-striped course_table">
                <thead>
                  <tr>          
                    <th>Video Title</th>
                    <th>Download</th>
                  </tr>
                </thead>
                <tbody> 
                  <?php 
                		$q1=mysqli_query($conn, "select * from videos where skill_name='$skl'");
                		while($d1=mysqli_fetch_array($q1))
                		{
                	?>

                  <tr>          
                    <td><a href="course-single.php?course_name=<?php echo $skl; ?>&name=<?php echo $d1['video_name']; ?>"><?php echo $d1["video_name"]; ?></a></td>
                    <td><a href="videos\<?php echo $d1['video_name']; ?>" download>download</a></td>
                  </tr>
                  <?php 
                  }
                  ?>

                </tbody>
              </table>
              <?php 
                  if (isset($_GET["name"])) {
                  $vname=$_GET["name"];

                  ?>
                  <video width="320" height="240" controls>
                    <source src="videos/<?php echo $vname; ?>" type="video/mp4">
                    Your browser does not support the video tag.
                  </video>
                  <?php } ?>
             </div>
             <section id="courseArchive">
      <div class="container">
        <div class="row">
          <!-- start course content -->
          <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="courseArchive_content">
              <div class="row">
               <?php 
                
                $logid=$_SESSION["id"];
                $qry=mysqli_query($conn,"select * from courses");
                while($d2=mysqli_fetch_array($qry))
                {
               ?>
                <!-- start single course -->
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="single_course wow fadeInUp">
                    <div class="singCourse_imgarea">
                      <img src="img/<?php echo $d2['Image']; ?>" />
                      <div class="mask">                         
                        <a href="course-single.php?course_name=<?php echo $d2['course_name']; ?>" class="course_more">View Course</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title"><a href="course-single.php"><?php echo $d2["course_name"]; ?></a></h3>
                    </div>
                    <div class="singCourse_author">
                      <p>
                      <?php 
                        $skl=$d2["course_name"];
                        $q=mysqli_query($conn,"select * from tut where Skilll='$skl'");
                        $data=mysqli_fetch_array($q);
                        echo $data["Name"];
                      ?>
                      </p>
                    </div>
                  </div>
                </div>
                <!-- End single course -->
                <?php 
                }
                ?>
              </div>
              <!-- start previous & next button -->
              <div class="single_blog_prevnext">
                <a href="#" class="prev_post wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;"><i class="fa fa-angle-left"></i>Previous</a>
                <a href="#" class="next_post wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">Next<i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
          <!-- End course content -->

         
        </div>
      </div>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
            </div>
          </div>
          <!-- End course content -->

          
        </div>
      </div>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
    
    <!--=========== BEGIN FOOTER SECTION ================-->
    <footer id="footer">
      <!-- Start footer top area -->
      <div class="footer_top">
        <div class="container">
          <div class="row">
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3>About Us</h3>
                <p>This is a portal where we make students and teachers intereact for formal as well as informal teaching expireinces where one can find all types of resources the tutors and admins upload, specimen books etc. Very easy UI and highly secured.</p>
              </div>
            </div>
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3>Community</h3>
                <ul class="footer_widget_nav">
                  <li><a href="#">Our Tutors</a></li>
                  <li><a href="#">Our Students</a></li>
                  <li><a href="#">Our Team</a></li>
                  <li><a href="#">Forum</a></li>
                  <li><a href="#">News &amp; Media</a></li>
                </ul>
              </div>
            </div>
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3>Social Links</h3>
                <ul class="footer_social">
                  <li><a data-toggle="tooltip" data-placement="top" title="Facebook" class="soc_tooltip" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Twitter" class="soc_tooltip"  href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Google+" class="soc_tooltip"  href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Linkedin" class="soc_tooltip"  href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Youtube" class="soc_tooltip"  href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End footer top area -->
    </footer>
    <!--=========== END FOOTER SECTION ================--> 

  

    <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Preloader js file -->
    <script src="js/queryloader2.min.js" type="text/javascript"></script>
    <!-- For smooth animatin  -->
    <script src="js/wow.min.js"></script>  
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="js/slick.min.js"></script>
    <!-- superslides slider -->
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.animate-enhanced.min.js"></script>
    <script src="js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>   
    <!-- for circle counter -->
    <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
    <!-- Gallery slider -->
    <script type="text/javascript" language="javascript" src="js/jquery.tosrus.min.all.js"></script>   
   
    <!-- Custom js-->
    <script src="js/custom.js"></script>
  

  </body>
</html>