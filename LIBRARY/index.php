<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LIBRARY</title>

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
                <h1 class="tm-site-name">LIBRARY</h1>
                <p class="tm-site-description">Your Online BOOK ZONE </p>
                
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
                            <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="team.php">Our Team</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                        </ul>
                    </div>
                </nav>
                
            </header>
            
            <div class="tm-main-content">
                <section class="tm-margin-b-l">
                    <header>
                        <h2 class="tm-main-title">Welcome to our bookstore</h2>    
                    </header>
                    
                    <p>This Library contains various types of books you can download any book for free just by clicking on the image corresponding to the following book. And in addition to that aur website/Library will also contain class notes of the particaular subjects of a particular school or college.</p>
                   

                    <header>
                        <h2 class="tm-main-title">Books</h2>    
                    </header>
                    <div class="tm-gallery">
                        <div class="row">
                            
                            <?php 
                              $conn=mysqli_connect("localhost","root","","library");
                              $qry=mysqli_query($conn, "select * from books");
                              while($data=mysqli_fetch_array($qry))
                              {
                            ?>
                            <figure class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                                <a href="preview.php?book_name=<?php echo $data['name']; ?> ">
                                    <div class="tm-gallery-item-overlay">
                                        <img src="Books\<?php echo $data['image'] ?>" alt="Image" class="img-fluid tm-img-center">
                                    </div>
                                    
                                    <p class="tm-figcaption"><?php echo $data["name"];?></p>
                                </a>
                            </figure>
                            
                            <?php } ?>
                        </div>   
                    </div>
                    <header>
                        <h2 class="tm-main-title">Notes</h2>    
                    </header>
                    
                    <div class="tm-gallery">
                        <div class="row">
                            
                            <?php 
                              $conn=mysqli_connect("localhost","root","","library");
                              $qry1=mysqli_query($conn, "select * from notes");
                              while($data1=mysqli_fetch_array($qry1))
                              {
                            ?>
                            <figure class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                                <a href="preview.php?sub_name=<?php echo $data1['name']; ?> ">
                                    <div class="tm-gallery-item-overlay">
                                        <img src="Notes\<?php echo $data1['image'] ?>" alt="Image" class="img-fluid tm-img-center">
                                    </div>
                                    
                                    <p class="tm-figcaption"><?php echo $data1["name"];?></p>
                                </a>
                            </figure>
                            <?php } ?>
                        </div>   
                    </div>
                </section>

                <section class="media tm-highlight tm-highlight-w-icon">

                    <div class="tm-highlight-icon">
                        <i class="fa tm-fa-6x fa-meetup"></i>    
                    </div>                    

                    <div class="media-body">
                        <header>
                            <h2>Need Help?</h2>
                        </header>
                        <p class="tm-margin-b">If you need any help regarding our website, you can talk to us on facebook, or you can contact us in the <a href="contact.php">Contact Us</a> section of our website.</p>
                        <a href="https://www.facebook.com/" class="tm-white-bordered-btn">Live Chat</a>
                    </div>                    
                </section>
            </div>    
        </div>
        
        <!-- load JS files -->
        <script src="js/jquery-1.11.3.min.js"></script>         <!-- jQuery (https://jquery.com/download/) -->
        <script src="js/popper.min.js"></script>                <!-- Popper (https://popper.js.org/) -->
        <script src="js/bootstrap.min.js"></script>             <!-- Bootstrap (https://getbootstrap.com/) -->
                    

</body>
</html>