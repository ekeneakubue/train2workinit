<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'includes/header/Header.php'; ?>
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
                <a class="navbar-brand" href="index.php">Train2WorkInIT</a>
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
                        <a href="#" class="nav-link"><div class="btn btn-danger">Apply Now</div></a>
                    </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->

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
                                    <p class="card-text">Our tech team is a highly skilled and dedicated group of professionals who play a crucial role in the success of our organization. They are responsible for developing, implementing, and maintaining the technological infrastructure that supports our operations. In this write-up, we will delve into the various aspects of our tech team, including their roles, skills, and contributions.</p>
                                    
                                </div>
                                </div>
                            </div>
                        </div>
        
                    </div>
                </div>
            </div>          
        </div>
        
    
        <?php include 'includes/footer/Footer.php'; ?>
    </body>
</html>  