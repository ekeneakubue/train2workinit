<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'includes/header/Header.php'; ?>
        <link rel="stylesheet" href="assets/css/instructors.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@300&display=swap" rel="stylesheet">

        <title>Train2WorkInIt</title>
        <style>
           
        </style>
    </head>
    <body>   
        <?php include 'includes/loader/Loader.php'; ?>
        
        <div class="content" id="content">
            <!-- Start Navbar -->
            <div class="mynavbar navbar-fixed-top">
                <nav class="navbar navbar-expand-lg">                
                    <div class="container-fluid">
                        <a id="logo_img" class="navbar-brand " href="index.php"><img src='assets/images/nav-logo.png' alt='Logo' ></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <div class="mo-icon"><i class="bi bi-list"></i></div>
                        </button>
                        <div class="bar_nav collapse navbar-collapse justify-content-end" id="navbarNav">
                            <ul class="navbar-nav">                        
                                <li class="nav-item">
                                    <a href="index.php" class="nav-link" href="#">
                                        Home
                                        <hr class="navhr">
                                    </a>            
                                </li>
                                <li class="nav-item">
                                    <a href="about.php" class="nav-link">About Us<hr class="navhr"></a>
                                </li>
                                <li class="nav-item">
                                    <a href="courses.php" class="nav-link">Courses<hr class="navhr"></a>
                                </li>
                                <li class="nav-item">
                                    <a href="instructors.php" class="nav-link">Our Instructors<hr class="activated"></a>
                                </li>
                                <li class="nav-item">
                                    <a href="contacts.php" class="nav-link">Contact Us<hr class="navhr"></a>
                                </li>
                                <li class="nav-item">
                                    <a href="testimonial.php" class="nav-link">Testimonials<hr class="navhr"></a>
                                </li>      
                                <li class="nav-item">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSf_uRWRmE2ouNnGALVZCQxBfDQAL7C3RM0EIsfywAMRAIwyow/viewform?usp=sf_link" class="nav-link" target="_blank"><div class="reg_btn">Register Now</div></a>
                                </li>
                            </ul>                    
                        </div> 
                    </div>               
                </nav>
                <div class="top-nav">
                    <div class='container-fluid'>
                        <div class="row">
                            <div class="col-md-12">
                                <div>+44(0)7383382111 &nbsp;|&nbsp; contact@train2workinit.com</div>                         
                            </div>
                        </div>                  
                    </div>
                </div>
            </div>  
            <!-- End Navbar -->
                 
            
            <div id="contact_banner">
                <h1>Our Instructors</h1>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p>
                                Our Instructors are experienced professionals who have worked in the IT industry
                                for many years. They're passionate about teaching IT, 
                                and they're committed to helping their students succeed.
                            </p>
                        </div>
                    </div>
                </div>                
            </div>                 
            
            
            
            
            <?php include 'includes/footer/Footer.php'; ?>       
        </div>        
    </body>
</html>  