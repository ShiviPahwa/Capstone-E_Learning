<!DOCTYPE html>
<html lang="en">
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
                            <li class="nav-item"><a class="nav-link active" href="team.php">Our Team</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                        </ul>
                    </div>    
                </nav>
                
            </header>
            
            <div class="tm-main-content">                    
                <section class="row tm-item-preview tm-margin-b-xl">
                    <div class="col-12">
                        <h2 class="tm-blue-text tm-margin-b-p">Our Team</h2>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-md-0 mb-5">         
                        <div class="mr-lg-5">
                            <p class="tm-margin-b-p">This Library provides you various books and Notes from our lectures.We aspire to grow more and more resuorces from highly renowned sources and share with you all the luxury to read free of cost.</p>
                            <p class="tm-margin-b-p"> This is our first attempt to integrate our college teachers' notes with the recommended books for students who want to learn and dig deep.</p>
                            <p>"A man who does not read is no better than a man who cannot read at all :)"</p>                        
                        </div>                                       
                    </div>
                    <div class="col-md-6 col-sm-12 tm-highlight tm-small-pad">
                        <h2 class="tm-margin-b-p">WHY to read?</h2>
                        <p class="tm-margin-b-p">Most of us have been reading since we were very young, but how many of us really think about the “why” behind the words? What makes a novel compelling, or a memoir so riveting? Why do some readers lose themselves in fantasy and sci-fi while others swear by non-fiction instead?

According to Sara Nelson, editor in chief of Publishers Weekly, “Why people read what they read is a great unknown and personal thing.” But while the reasons for reading can’t exactly be dissected, the science behind why readers read - and what happens to our brains when we read - is profoundly interesting.</p>
                  
                    </div>
                </section>

              <!--  <div class="row tm-margin-b-ll">
                    <article class="col-12 col-sm-12 col-md-4 col-lg-4 mb-md-0 mb-5">
                        <div class="text-center tm-margin-b-30"><i class="fa tm-fa-6x fa-linode tm-blue-text"></i></div>
                        <header class="tm-margin-b-30"><h3 class="tm-blue-text tm-h3">NIIT UNIVERSITY</h3></header>
                        <p>A place beyond infinity.</p>
                    </article>-->

                    <article class="col-12 col-sm-12 col-md-4 col-lg-4 mb-md-0 mb-5">
                        <div align="centre"></div>
                        <h3 class="tm-blue-text tm-h3">E-Learning</h3>
                        <p>An Organisation beyond infinity.</p>
                    </article>
                   <!-- <article class="col-12 col-sm-12 col-md-4 col-lg-4 mb-md-0 mb-5">
                        <div class="text-center tm-margin-b-30"><i class="fa tm-fa-6x fa-superpowers tm-blue-text"></i></div>
                        <header class="tm-margin-b-30"><h3 class="tm-blue-text tm-h3">Curabitur aliquam auctor</h3></header>
                        <p>Donec auctor turpis risus, et euismod sem mattis eget. Donec at lorem finibus, fermentum risus vel, facilisis justo.</p>
                    </article>
                </div>-->

                <div class="row tm-hightlight tm-margin-b-ll tm-highlight tm-small-pad">
                    <article class="col-12 col-sm-12 col-md-6 col-lg-6 tm-font-thin mb-md-0 mb-5">
                        <header class="tm-margin-b-30"><h3 class="tm-font-thin">Legality</h3></header>
                        <p> This Library Management System has all-rights reserved© and is under the supervision of its makers</p>
                    </article>
                    <article class="col-12 col-sm-12 col-md-6 col-lg-6 tm-font-thin">
                        <header class="tm-margin-b-30"><h3 class="tm-green-text tm-font-thin">Acknowledgements</h3></header>
                        <p>This developers of this page Ms Mollie Sharma bequeath a special thanks to all the people who suported me and inspired me to move forward with the project.</p>
                    </article>
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