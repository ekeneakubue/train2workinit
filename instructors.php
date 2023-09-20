<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'includes/header/Header.php'; ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Train2WorkInIt</title>
        <style>
          .cont{
            margin-top:3rem;
            border-radius:3rem;
          }

          .img1{
            height: 250px;
            width: 250px;
          }

          .card{
            margin: auto;
          }

          .card-text{                            
            word-wrap: break-word;
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
                        <a href="instructors.php" class="nav-link">Our Instructors<hr class="activated"></a>
                    </li>
                    <li class="nav-item">
                        <a href="contacts.php" class="nav-link">Contact Us<hr class="navhr"></a>
                    </li>
                    <li class="nav-item">
                        <a href="testimonial.php" class="nav-link">Testimonials<hr class="navhr"></a>
                    </li>      
                    <li class="nav-item">
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSf_uRWRmE2ouNnGALVZCQxBfDQAL7C3RM0EIsfywAMRAIwyow/viewform?usp=sf_link" class="nav-link" target="_blank"><div class="btn btn-danger">Register Now</div></a>
                    </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->

            <main>
                <div class="instructors ">
                    <div class="container cont  ">
                      <h1 class="pb-3">OUR INSTRUCTORS</h1>
                        <div class="card mb-3" style="max-width: 740px;">
                            <div class="row no-gutters ">
                                <div class="col-md-4">
                                  <img  class="img1" src="assets/images/studio.jpg" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h4 class="card-title text-danger">OUR TEAM</h4>
                                        <p class="card-text">
                                            Our instructors are experienced professionals who have worked in the IT industry for 
                                            many years. They are passionate about teaching IT, and they are committed to helping 
                                            their students succeed.
                                        </p>                                      
                                    </div>                                  
                                </div>
                            </div>          
                        </div>
                    </div>
                </div>                  
            </main>
            <?php include 'includes/footer/Footer.php'; ?>       
        </div>        
    </body>
</html>  