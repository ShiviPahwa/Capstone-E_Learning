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
                            <li class="nav-item"><a class="nav-link" href="team.php">Our Team</a></li>
                            <li class="nav-item"><a class="nav-link active" href="contact.php">Contact Us</a></li>
                        </ul>
                    </div>    
                </nav>
                
            </header>
            

            <div class="tm-main-content">
                <section class="row tm-margin-b-l">
                    <div class="col-12">
                        <h2 class="tm-blue-text tm-margin-b-p">Contact Us</h2>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-md-0 mb-5 tm-overflow-auto">         
                        <div class="mr-lg-5">
                            <!-- contact form -->
                            <form action="db.php" method="post" class="tm-contact-form">
                                <div class="form-group">
                                    <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name"  required/>
                                </div>
                                <div class="form-group">
                                    <textarea id="contact_message" name="contact_message" class="form-control" rows="8" placeholder="Message" required></textarea>
                                </div>
                                <input type="submit" name="submit" value="Submit" class="tm-btn tm-btn-blue float-right" />
                            </form>                          
                        </div>                                       
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <p class="tm-margin-b-p"></p>
                        <address>
                            <span class="tm-blue-text">Mailing Address</span><br>
                            NIIT University, Neemrana<br>
                            Rajasthan, INDIA<br><br>
                            <div class="tm-blue-text">          
                                Email: <a class="tm-blue-text" href="https://mail.google.com/mail/u/0/#inbox?compose=15fdeaa13cd9b946">www.gmail.com</a
                                ><br>
                                Mobile:<a class="tm-blue-text" >7896**7897</a><br>
                                WhatsApp: <a class="tm-blue-text" >7897**7896</a><br>    
                            </div>                            
                        </address>
                        
                    </div>
                </section>


<img src="img/molly.JPG" width="300px" height="350px">
				




                
          
</body>
</html>