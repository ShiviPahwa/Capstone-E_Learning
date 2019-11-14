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
     <title>E- Learning: Student Change Profile</title>

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
              <a class="navbar-brand" href="stindex.php"><marquee height="50px"> E- Learning</marquee></a>              
              <!-- IMG BASED LOGO  -->
               <!-- <a class="navbar-brand" href="stindex.php"><img src="img/logo.png" alt="logo"></a>  -->            
                     
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                <li><a href="stindex.php">Home</a></li>
                <li><a href="regcourse.php">Course Registration</a></li>
                <li><a href="My courses.php">My courses</a></li>
                <li><a href="LIBRARY/index.php">Library</a></li>
                <li><a href="gallery.php">Gallery</a></li>                
                <li class="active"><a href="Change profile.php">Change profile</a></li>              
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
	
	<style type="text/css">
		.table
		{
			height: 600px;
			width: 500px;
			margin-left: 450px;
			margin-top: 100px
		}
		.button
		{
			border-style: solid;
			border-color: navy;
			border-width: thick;
			height: 65px;
			width: 150px;
			margin-left: 10px;
			text-align: center;
			background: #111;
			float: right;
			padding-top: 25px;
			margin-top: 0px;
		}	
		.button1
		{
			margin-right: 20px;
		}
		body
		{
background-image: url(img/slider/tutchange.jpg);
			 background-size:cover;
			margin: 0px;
		}
	</style>
</head>
<body>
<font>
<div class="table">
<table align="center" width="1000" height="400">
<?php 
$conn=mysqli_connect("localhost","root","","e learning");
if(!isset($_SESSION["id"]))
{
header("location:Login.php");
}
else
{

	
	$sid1=$_SESSION["id"];
}
if (isset($_POST["Edit"])) {
	 $uname=$_POST["name"];
	 $pass=$_POST["pass"];
	 $gender=$_POST["gender"];
	 $email=$_POST["email"];
	 $address=$_POST["address"];
	 $dob=$_POST["dob"];
	 mysqli_query($conn,"update stu set Name='$uname', Password='$pass', Gender='$gender', Email='$email', DOB='$dob', Address='$address' where ID='$sid'");
	mysqli_query($conn,"update login set Username='$uname', Password='$pass' where ID='$sid1'");
}


?>
 <form method="post">
<tr>
		<td>Name</td>
		<td><input type="text" name="name" value="<?php echo $data["Name"]?>" ></td>
</tr>

<tr>
		<td>Password</td>
		<td><input type="text" name="pass" value="<?php echo $data["Password"]?>" ></td>
</tr>

<tr>	
		<td>Gender</td>
		<td><input type="text" name="gender" value="<?php echo $data["Gender"]?>"></td>
</tr>

<tr>		
		<td>Email</td>
		<td><input type="text" name="email" value="<?php echo $data["Email"]?>"></td>
</tr>

<tr>
		<td>Address</td>		
		<td><input type="text" name="address" value="<?php echo $data["Address"]?>"></td>
</tr>

<tr>		
		<td>DOB</td>
		<td><input type="text" name="dob" value="<?php echo $data["DOB"]?>"></td>
</tr>
<tr>		
		<td>Image</td>
		<td><img src="img/<?php echo $data["Image"]?>" height="100" width="100"><br><a href="studentpic.php?pid=<?php echo $data["ID"]?>"><font>Update pic</font></a></td>
</tr>

<tr>
	<td colspan="2"><input type="submit" name="Edit" value="Edit"> <input type="reset" name="reset" value="Reset"></td>
</tr>

</table>
</div>
</form>
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
                  <li><a data-toggle="tooltip" data-placement="top" title="Facebook" class="soc_tooltip" href="https://www.fb.com"><i class="fa fa-facebook"></i></a></li>
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