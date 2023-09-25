<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'includes/header/Header.php'; ?>
        <link rel="stylesheet" href="assets/css/contact.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@500&display=swap" rel="stylesheet">
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@1,300&display=swap" rel="stylesheet">
        <title>Train2WorkInIt</title>
        <style>
            .navbar{
                opacity: 0.8;
            }
        </style>
    </head>
    <body>   
        <?php include 'includes/loader/Loader.php'; ?>
        
        <div class="content" id="content">
            <!-- Start Navbar -->
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="index.php"><img src='assets/images/nav-logo.png' alt='Logo' ></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link" href="#">Home<hr class="navhr"></a>
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
                            <a href="contacts.php" class="nav-link">Contact Us<hr class="activated"></a>
                        </li>
                        <li class="nav-item">
                            <a href="testimonial.php" class="nav-link">Testimonials<hr class="navhr"></a>
                        </li>      
                        <li class="nav-item">
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSf_uRWRmE2ouNnGALVZCQxBfDQAL7C3RM0EIsfywAMRAIwyow/viewform?usp=sf_link" class="nav-link" target="_blank"><div class="reg_btn">Register Now</div></a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
            
            <section>
                <div id="contact_banner">
                    <h1>CONTACT US</h1>
                    <p>Send us a message or call our team today.</p>
                </div>

                <div id="contact_details" class="row">
                    <div class="col-md-6 cont">                    
                        <h2><span>Train2WorkinIT</span></h2>

                        <div class="contact_items">
                            <ul class="no-numbers">
                                <li><i class="fa-solid fa-location-crosshairs" style="color: var(--g-font);"></i> 10 Marsden Street, L5 1EP. Liverpool, UK</li>
                                <li><i class="fa-solid fa-phone" style="color: var(--g-font);"></i> +44(0)7383382111 ||  <i class="fa-regular fa-envelope" style="color: var(--g-font);"></i> contact@train2workinit.com </li>
                            </ul>
                        </div>                    
                    </div>  

                    <div class="col-md-6 bg-light contact_details">                       
                                                             
                    </div> 
                </div>

                <div class="row">
                    <div id="contact_lower" class="col-md-12">
                        <h1>We're hiring!</h1>
                        <p>We're hiring highly skilled professionals in a variety of fields 
                            who are passionate about teaching and helping others transition 
                            to high-paying jobs in the digital Age.</p>
                    </div>
                   
                </div>
            </section>  
            <?php include 'includes/footer/Footer.php'; ?>
        </div>  
        
    </body>
</html>  