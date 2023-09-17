<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'includes/header/Header2.php'; ?>
        <title>Train2WorkInIt</title>
        
    </head>
    <body>   
        <?php include 'includes/loader/Loader.php'; ?>
        
        <div class="content" id="content">
            <!-- Start Navbar  -->
            <nav class="navbar navbar-expand-lg navbar-fixed-top">
                <a class="navbar-brand " href="index.php"><img src='assets/images/nav-logo.png' alt='Logo' ></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="mo-icon"><i class="bi bi-list"></i></div>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link" href="#">
                            Home
                            <hr class="activated">
                        </a>            
                    </li>
                    <li class="nav-item">
                        <a href="about.php" class="nav-link" href="#">About Us<hr class="navhr"></a>
                    </li>
                    <li class="nav-item">
                        <a href="courses.php" class="nav-link" href="#">Courses<hr class="navhr"></a>
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
                        <a href="#" class="nav-link"><div class="btn btn-danger">Register Now</div></a>
                    </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->

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
                        IT! Train from Zero to Hero!
                    </marquee>                
                    <h1>Train to Work in IT Academy</h1>
                    <button>Register Now</button> 
                </div>
                <!-- <div>Register Now</button> -->
            </div> 
            <div class="others">
                hello
            </div>      
            <?php include 'includes/footer/Footer.php'; ?>             
        </div>
            
        
    </body>
</html>  