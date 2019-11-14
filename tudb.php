<!DOCTYPE html>
<html lang="en">
  <head>
 

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>E- Learning: tutor db</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="img/wpf-favicon.png"/>

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
  
  <style type="text/css">
    .table
    {
      margin-top: 100px;
    }
  </style>
  <body>    

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
   <header id="header">
      <!-- BEGIN MENU -->
      <div align="center" class="menu_area">
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
              <a class="navbar-brand" href="Login.php">E- Learning<span></span></a>              
              <!-- IMG BASED LOGO  -->
               <!-- <a class="navbar-brand" href="stindex.html"><img src="img/logo.png" alt="logo"></a>  -->            
                     
            </div>
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->    
    </header>
    <!--=========== END HEADER SECTION ================--> 
    
  

<font>
<?php 
$conn=mysqli_connect("localhost","root","","e learning");
if(isset($_POST["go"]))
{
$User= $_POST["uname"];
$password=$_POST["pass"];
$Gender=$_POST["gender"];
$email=$_POST["email"];
$day=$_POST["day"];
$month= $_POST["month"];
$year=$_POST["year"];
$dob=$day."-".$month."-".$year;
$con=$_POST["con_num"];
$address=$_POST["add"];
$skill=$_POST["skill"];
$ad=$_POST["ad_no"];
$skill_desc=$_POST["skill_desc"];
$filename= $_FILES["fle"]["name"];
$fileTmpname= $_FILES["fle"]["tmp_name"];
move_uploaded_file($fileTmpname, "img/".$filename); 
$filename1= $_FILES["adfle"]["name"];
$fileTmpname1= $_FILES["adfle"]["tmp_name"];
move_uploaded_file($fileTmpname1, "img/".$filename1);  
$cnt=mysqli_query($conn,"insert into tut(Name, Password, Gender, Email, Contact_no, DOB, Address, adhar_card_no, Skilll, Image, Skill_description, Ad_Image) values ('$User', '$password', '$Gender', '$email', '$con', '$dob','$address', '$ad', '$skill','$filename', '$skill_desc', '$filename1' )");
}
?>

<div class="table">
<p align="center">
  <img src="img/<?php echo $filename; ?>" height="150" width="150">
</p>
<table align="center" height="350" width="300">
<tr>
  <td>Adhar Image</td>
  <td><img src="img/<?php echo $filename1; ?>" height="150" width="150"></td>
</tr>

<tr>
<td>Name:</td>
<td><?php echo $User; ?>
</td>
</tr>


<tr>
<td>Gender:</td>
<td><?php echo $Gender; ?>
</td>
</tr>


<tr>
  <td>Email:</td>
  <td><?php echo $email; ?></td>
</tr>


<tr>
<td>Contact Number:</td>
<td><?php echo $con; ?>
</td>
</tr>

<tr>
<td>DOB:</td>
<td><?php echo $dob; ?>
</td>
</tr>


<tr>
<td>Address:</td>
<td><?php echo $address; ?></td>
</tr>


<tr>
<td>Skill:</td>
<td><?php echo $skill; ?>
</td>
</tr>

<tr>
<td>Adhar Card No:</td>
<td><?php echo $ad; ?>
</td>
</tr>

<tr>
<td>Skill Description:</td>
<td><?php echo $skill_desc; ?>
</td>
</tr>

</table>
</div>
   
    <!--=========== BEGIN FOOTER SECTION ================-->
    <footer id="footer">
      <!-- Start footer top area -->
      <div class="footer_top">
        <div class="container">
          <div class="row">
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3>About Us</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
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
                <h3>Others</h3>
                <ul class="footer_widget_nav">
                  <li><a href="#">Link 1</a></li>
                  <li><a href="#">Link 2</a></li>
                  <li><a href="#">Link 3</a></li>
                  <li><a href="#">Link 4</a></li>
                  <li><a href="#">Link 5</a></li>
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

      <!-- Start footer bottom area -->
      <div class="footer_bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="footer_bootomLeft">
                <p> Copyright &copy; All Rights Reserved</p>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="footer_bootomRight">
                <p>Designed by Students of NIIT <a href="http://wpfreeware.com/" rel="nofollow">Wpfreeware.com</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End footer bottom area -->
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