<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'includes/header/Header.php'; ?>
        <link rel="stylesheet" href="assets/css/index.css">
        <title>Train2WorkInIt | Home</title>
        
    </head>
    <body>   
        <?php include 'includes/loader/Loader.php'; ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <div class="content" id="content">
            <!-- Start Navbar  -->            
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
                                        <hr class="activated">
                                    </a>            
                                </li>
                                <li class="nav-item">
                                    <a href="about.php" class="nav-link">About Us<hr class="navhr"></a>
                                </li>
                                <li class="nav-item">
                                    <a href="courses.php" class="nav-link">Courses<hr class="navhr"></a>
                                </li>
                                <li class="nav-item">
                                    <a href="instructors.php" class="nav-link">Our Instructors<hr class="navhr"></a>
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


            <!-- Start Carousel -->
            <div class="carousel">
                                       
                <div class="banner">
                    
                    <marquee
                        behavior='scroll'
                        scrollamount='10'
                        width='100%'
                        direction='left'
                        height='50px'
                        width='60%'
                    >
                        Train2WorkinIT Academy! Applications are now open! Work smart and not hard! The IT 
                        training academy for everyone! Get the training you need to land your dream job in 
                        IT! Train from Zero to Hero!  Get ready for the AI revolution!.
                    </marquee>                
                    <h1><span>Train2WorkinIT</span> Academy</h1>
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSf_uRWRmE2ouNnGALVZCQxBfDQAL7C3RM0EIsfywAMRAIwyow/viewform?usp=sf_link">
                        <button>Register Now</button> 
                    </a>
                </div>                
            </div> 
            <!-- End Carousel -->

            
            <div class="others">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="abt-left">
                                <h2>Who we are?</h2>
                                <p>
                                    Train2WorkinIT Academy, your gateway to top-notch IT training! As a premier destination for hands-on IT courses, we specialize in in-demand fields of the industry. Our dedicated team of seasoned instructors is driven by a deep passion for IT education, and we're steadfast in our mission to equip our students with the expertise and capabilities required to thrive in high-paying IT roles in the modern digital era.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="abt-right">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwx1a1eN7lSzL8nAOHX0VBhTaEK0UPChgQtQ&usqp=CAU" alt="abt-right-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>      
            <?php include 'includes/footer/Footer.php'; ?>             
        </div>
            
        
    </body>
</html>  