<!DOCTYPE html>
<?php
session_start();
?>
<?php 
	
$conn=mysqli_connect("localhost", "root", "", "e learning");
if(isset($_POST["Login"]))
{

  $uname=$_POST["sname"];
  $_SESSION["name"]=$uname;
  $pass=$_POST["pass"];
  $qry=mysqli_query($conn,"select * from login where BINARY Username='$uname'");
  $data=mysqli_fetch_array($qry);
  if($data["Password"]==$pass)
  {
    $_SESSION["id"]=$data["ID"];
    if($data["Status"]=="Tutor")
      header("location: tuindex.php");

    if($data["Status"]=="Student")
      header("location: stindex.php");

    if($data["Status"]=="Admin")
      header("location: adindex.php");
  }
  else
    echo "Invalid Username or Password";
}
?>
<html lang="en">
  <head>
    <
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>E- Learning: Login</title>

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
              <a class="navbar-brand" href="stindex.html"><marquee height="50px" >E- Learning</marquee></a>              
              <!-- IMG BASED LOGO  -->
               <!-- <a class="navbar-brand" href="stindex.html"><img src="img/logo.png" alt="logo"></a>  -->            
                     
            </div>
            
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->    
    </header>
    <!--=========== END HEADER SECTION ================--> 


  <h1 align="center"><font size="7" face="forte" ><div id="sec">Login</div></font></h1>
  
  <style type="text/css">
  h1
  {
    margin: 0px;
  }
  .table
  {
  height: 200px;
  width: 1400px;
  background: #ccc;
  margin-left: auto;
  margin-right: auto; 
  margin-bottom: 0px;
  margin-top: 0px;
  }
  #sec
  {
   height: 75px;
   width: 1400px;
   background: #51ADBC;
   margin-left: auto;
   margin-right: auto;
   margin-bottom: 0px;
  margin-top: 65px;
   }
  </style>
</head>

<body>
<form method="post">
<div class="table">
<table align="center" height="200">
  <tr>
    <td>Name:</td>
    <td><input type="text" name="sname"></td>
  </tr>
  <tr>
      <td>Password:</td>
    <td><input type="password" name="pass"><font color="Red">
	
</td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" name="Login" value="Login"> <input type="reset" name="Reset" value="Reset"> <a href="fpass.php">Forgot Password?</a></td>
  </tr>
</form>

<form method="post" action="stRegistration.php">
  <tr>  
    <td colspan="2"><input type="submit" name="signup" value="New Student SignUp"></td>
  </tr>
</form>

<form method="post" action="tuRegistration.php">
  <tr>  
    <td colspan="2"><input type="submit" name="signup" value="New Tutor SignUp"></td>
  </tr>
</form>
</table>
</font>
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
                <p>This is a portal where we make students and teachers intereact for formal as well as informal teaching expireinces where one can find all types of resources the tutors and admins upload, specimen books etc. Very easy UI and highly secured.</p>
              </div>
            </div>
            
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3>Social Links</h3>
                <ul class="footer_social">
                  <li><a data-toggle="tooltip" data-placement="top" title="Facebook" class="soc_tooltip" href="https://www.fb.com"><i class="fa fa-facebook"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Twitter" class="soc_tooltip"  href="https://www.Twitter.com"><i class="fa fa-twitter"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Google+" class="soc_tooltip"  href="https://www.gmail.com"><i class="fa fa-google-plus"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Linkedin" class="soc_tooltip"  href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Youtube" class="soc_tooltip"  href="https://www.Youtube.com"><i class="fa fa-youtube"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End footer top area -->

      
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