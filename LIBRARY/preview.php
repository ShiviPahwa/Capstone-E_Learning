<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Library</title>

    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/tooplate-style.css">                                   <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
</head>

    <body>
        
        <div class="container">
            <header class="tm-site-header">
                <h1 class="tm-site-name">Library</h1>
                <p class="tm-site-description">Your Online BOOK ZONE</p>
                
                <nav class="navbar navbar-expand-md tm-main-nav-container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#tmMainNav" aria-controls="tmMainNav" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse tm-main-nav" id="tmMainNav">
                        <ul class="nav nav-fill tm-main-nav-ul">
                            <?php 
                                $conn1=mysqli_connect("localhost","root","","e learning");
                                session_start();
                                $id2=$_SESSION["id"];
                                $qr=mysqli_query($conn1, "select * from login where ID='$id2'");
                                $da=mysqli_fetch_array($qr);
                                if($da["Status"]=="Tutor")
                                {
                            ?>
                            <li class="nav-item"><a class="nav-link" href="../tuindex.php">Tutor Home</a></li>
                            <?php } ?>
                            <?php 
                                if($da["Status"]=="Student")
                                {
                            ?>
                            <li class="nav-item"><a class="nav-link" href="../stindex.php">Student Home</a></li>
                            <?php } ?>
                            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link active" href="#">Catalogs</a></li>
                            <li class="nav-item"><a class="nav-link" href="team.php">Our Team</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                        </ul>
                    </div>    
                </nav>
                
            </header>
            
            <div class="tm-main-content no-pad-b">
                    <?php  
                        $conn=mysqli_connect("localhost","root","","library");
                        if (isset($_GET["book_name"])) {
                            $book_name=$_GET["book_name"];
                            $qry=mysqli_query($conn, "select * from books where name='$book_name' ");
                            $data=mysqli_fetch_array($qry);
                    ?> 
                <section class="row tm-item-preview">
                    <div class="col-md-6 col-sm-12 mb-md-0 mb-5">
                        <img src="Books\<?php echo $data['image']; ?>" alt="Image" class="img-fluid tm-img-center-sm">
                    </div>
                   
                    <div class="col-md-6 col-sm-12">
                        <h2 class="tm-blue-text tm-margin-b-p"><?php echo $data["name"]; ?></h2>
                        
                        <a href="#" class="tm-btn tm-btn-gray tm-margin-r-20 tm-margin-b-s">Preview</a><a href="Books\<?php echo $data['name']; ?>" class="tm-btn tm-btn-blue" download>Download</a>
                        <br>
                        <br>
                        <p>
						</p>
                    </div>
                </section>
                <?php
                        }
                        else if(isset($_GET["sub_name"]))
                        {
                            $sub_name=$_GET["sub_name"];
                            $qry=mysqli_query($conn, "select * from notes where name='$sub_name'");
                            $data=mysqli_fetch_array($qry);
                    ?> 
                <section class="row tm-item-preview">
                    <div class="col-md-6 col-sm-12 mb-md-0 mb-5">
                        <img src="Notes\<?php echo $data['image']; ?>" alt="Image" class="img-fluid tm-img-center-sm">
                    </div>
                   
                    <div class="col-md-6 col-sm-12">
                        <h2 class="tm-blue-text tm-margin-b-p"><?php echo $data["name"]; ?></h2>
                        
                        <a href="#" class="tm-btn tm-btn-gray tm-margin-r-20 tm-margin-b-s">Preview</a><a href="Notes\<?php echo $data['name']; ?>" class="tm-btn tm-btn-blue" download>Download</a>
                    </div>
                </section>
                <?php
                        }
                        ?>

                <div class="tm-gallery no-pad-b">
                    <div class="row">
                        <figure class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item mb-5">
                            <a href="preview.php">
                                <div class="tm-gallery-item-overlay">
                                    <img src="img/image-06.jpg" alt="Image" class="img-fluid tm-img-center">
                                </div>
                                <p class="tm-figcaption no-pad-b">Bridge Pic</p>
                            </a>
                        </figure>
                        <figure class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item mb-5">
                            <a href="preview.php">
                                <div class="tm-gallery-item-overlay">
                                    <img src="img/image-03.jpg" alt="Image" class="img-fluid tm-img-center">
                                </div>
                                <p class="tm-figcaption no-pad-b">Adventure</p>
                            </a>
                        </figure>
                        <figure class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item mb-5">
                            <a href="preview.php">
                                <div class="tm-gallery-item-overlay">
                                    <img src="img/image-08.jpg" alt="Image" class="img-fluid tm-img-center">
                                </div>
                                <p class="tm-figcaption no-pad-b">Mushrooms</p>
                            </a>
                        </figure> 
                        <figure class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item mb-5">
                            <a href="preview.php">
                                <div class="tm-gallery-item-overlay">
                                    <img src="img/image-05.jpg" alt="Image" class="img-fluid tm-img-center">
                                </div>
                                <p class="tm-figcaption no-pad-b">Road Trips</p>
                            </a>
                        </figure>
                    </div>   
                </div>                    
                            
            </div>

             
        </div>
        
        <!-- load JS files -->
        <script src="js/jquery-1.11.3.min.js"></script>         <!-- jQuery (https://jquery.com/download/) -->
        <script src="js/popper.min.js"></script>                <!-- Popper (https://popper.js.org/) -->
        <script src="js/bootstrap.min.js"></script>             <!-- Bootstrap (https://getbootstrap.com/) -->
        <script>     
       
            $(document).ready(function(){
                
                // Update the current year in copyright
                $('.tm-current-year').text(new Date().getFullYear());

            });

        </script>             

</body>
</html>