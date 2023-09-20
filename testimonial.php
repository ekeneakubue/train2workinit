<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'includes/header/Header.php'; ?>
        <title>Train2WorkInIt</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                        <a href="contacts.php" class="nav-link">Contact Us<hr class="navhr"></a>
                    </li>
                    <li class="nav-item">
                        <a href="testimonial.php" class="nav-link">Testimonials<hr class="activated"></a>
                    </li>      
                    <li class="nav-item">
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSf_uRWRmE2ouNnGALVZCQxBfDQAL7C3RM0EIsfywAMRAIwyow/viewform?usp=sf_link" class="nav-link" target="_blank"><div class="btn btn-danger">Register Now</div></a>
                    </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
            <main>
                <div class="container">
                    <div class="testimonial">
                        <div class="row">
                            <h2 class='justify-content-center'>Testimonials</h2>
                            <h5>
                                Don't just take our word for it - hear from our satisfied learners. Read their 
                                success stories and testimonials, showcasing their career advancements, newfound 
                                confidence, and the impact our training has had on their professional lives.
                            </h5>
                            <div class="col-md-4">
                                <div class="testify">
                                    <i class="bi bi-yelp text-danger"></i>
                                    <h4>Damian</h4>
                                    <q>
                                        I was working a dead-end job before I took Train2WorkinIT Academy's Cyber Security 
                                        training course. I had always been interested in technology, but I didn't know where 
                                        to start. The course gave me the skills and knowledge I needed to land a job as a Cyber 
                                        Security Analyst. I'm now making more money than I ever thought possible, and I'm doing
                                        work that I love. I'm so grateful to Train2WorkinIT Academy for helping me start my 
                                        new career
                                    </q>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="testify">
                                    <i class="bi bi-yelp text-danger"></i>
                                    <h4>Ngozi</h4>
                                    <q>
                                        I was a stay-at-home mom for several years with no background in IT when a friend 
                                        referred me to Train2WorkinIT Academy. I enrolled in Train2WorkinIT Academy's online 
                                        IT training course, which allowed me to accommodate my family's schedule. Learning new 
                                        skills at my own pace, I received excellent support from my instructor whenever I 
                                        needed it. Upon completing the course, I secured a position as an SOC Analyst. 
                                        I now work from home, supporting my family while doing something I love.
                                    </q>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="testify">
                                    <i class="bi bi-yelp text-danger"></i>
                                    <h4>Ade</h4>
                                    <q>
                                    I was a recent college graduate when I took Train2WorkinIT Academy's IT training course. I had a degree in computer science, but I didn't have any real-world experience. The course gave me the hands-on training that I needed to be successful in the job market. I was able to learn about the latest technologies and trends, and I was able to practice my skills in a real-world environment. After I finished the course, I was able to land a job as a Cyber Security Analyst at a large company. I'm now able to use my skills to help keep the company's asset safe from cyber criminals
                                    </q>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="testify">
                                    <i class="bi bi-yelp text-danger"></i>
                                    <h4>Pascal</h4>
                                    <q>
                                    Train2WorkinIT Academy gave me the confidence and knowledge to break into the IT industry. Their real-world projects and industry insights prepared me for the challenges of the tech world. I'm now working for a top IT company and loving every minute of it
                                    </q>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="testify">
                                    <i class="bi bi-yelp text-danger"></i>
                                    <h4>David</h4>
                                    <q>
                                    Train2WorkinIT Academy's training was hands down the stepping stone to my IT career. Their practical approach and industry-focused training set me up for success. I'm now working in cybersecurity and excited about what the future holds
                                    </q>
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