<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'includes/header/Header.php'; ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Train2WorkInIt</title>
        <style>
            .contacts{
                
                }
            .cont{
                margin-top:1rem;
            }
            .img{
                height:350px ;
                width: 60rem;
                background-size:cover;
                margin-top:3rem;
                
            }
            @media (max-width: 767px) {
                .img {
                    width: 20rem; 
                    max-width: none; 
                }
            }

        
            .red-button {
                background-color: red;
                color: white; 
                padding: 10px 20px; 
                border: none; 
                border-radius: 5px; 
                cursor: pointer; 
            }

        

            .getintouch{
                padding-bottom: 1rem; 
            }

            .no-numbers {
                list-style-type: none; /* Remove numbers from the ordered list */
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
                            <a href="#" class="nav-link"><div class="btn btn-danger">Register Now</div></a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
            
            <main>
                <div class="container-fluid ">                       
                    <img  class="img" src="assets/images/ct.png" alt="...">
                    <div class="row mt-5">
                        <div class="col-md-6 cont ">                    
                            <h2>Contact Info</h2>
                            <div class="container">
                                <ul class="no-numbers">
                                    <li><i class="fa-regular fa-envelope" style="color:#ce4233;"></i> train2workinit@anadco.com</li>
                                    <li><i class="fa-solid fa-location-crosshairs" style="color: #ce4233;"></i> 10 Marsden StreetL6 1EP</li>
                                    <li><i class="fa-solid fa-phone" style="color: #ce4233;"></i> 447830890406</li>
                                </ul>
                            </div>                    
                        </div>    
                        <div class="col-md-6 cont ">                    
                            <h2 class="getintouch">Get in Touch</h2>
                            <button class="btn btn-danger">Contact Us</button>
                        </div>      
                    </div>                   
                </div> 
            </main>   
            <?php include 'includes/footer/Footer.php'; ?>
        </div>  
        
    </body>
</html>  