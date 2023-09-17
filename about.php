<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'includes/header/Header.php'; ?>
        <title>Train2WorkInIt</title>
        <link rel="stylesheet" href="assets/css/about.css">
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
                        <a href="about.php" class="nav-link" href="#">About Us<hr class="activated"></a>
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
            
            <main>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 about_div_1">
                            <h2>Welcome to <span>Train2WorkInIT</span> Academy.</h2>

                            <article><span>Train2WorkInIT</span> Academy offers technical training delivered by Meta-certified, Microsoft-certified and seasoned instructors. Our training programs cater to individuals, whether they are newcomers to the field or advanced practitioners in Cyber Security,Data Analytics, Web Development and Microsoft office. We emphasize practical, hands-on experience to complement your academic foundation, ensuring you benefit from a well-rounded education.</article>

                            <h4>Our featured Training includes</h4>
                            <ul>
                                <li><i class="bi bi-caret-right-square-fill"></i>  Cyber Security</li>
                                <ul>
                                    <li>Cyber Resilience Training</li>
                                    <li>Cyber Security Incident Responder</li>
                                    <li>Cyber Security GRC Training</li>
                                </ul>
                                <li><i class="bi bi-caret-right-square-fill"></i>  Programming Languages for Children and Adults</li>
                                <ul>
                                    <li>Python</li>
                                    <li>HTML5</li>
                                    <li>CSS</li>
                                    <li>JavaScript</li>
                                    <li>Git/Github</li>
                                </ul>
                                <li><i class="bi bi-caret-right-square-fill"></i>  Microsoft Office </li>
                                <ul>
                                    <li>Microsoft Word</li>
                                    <li>Excel Cell References</li>
                                    <li>Powerpoint made easy</li>
                                </ul>
                            </ul>
                            
                        </div>

                        <div class="col-md-6">
                            <div class="about_img_div">
                                <img src="https://images.pexels.com/photos/7495610/pexels-photo-7495610.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" alt="about us image">
                            </div>

                            <div class="about_content_div">
                                <h2>Why choose <span>Train2WorkInIT</span> Academy? </h2>
                                <article>
                                    <ul>
                                        <li>We employ a range of inventive learning methods that are certain to captivate the learner entirely.</li><hr>
                                        <li>Attendees collaborate at a time and location that suits them, fostering improved teamwork and motivation.</li><hr>
                                        <li>We provide you with materials that suites your learning demands</li><hr>
                                        <li>At <span>Train2WorkInIT</span>, we deliver our commitments, we are reliable and consitent.</li><hr>
                                    </ul>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="icon_div">
                        <a href=""><p class="icon_A"><i class="bi bi-linkedin"></i></p></a>
                        <a href=""><p class='icon_B'><i class="bi bi-twitter"></i></p></a>
                        <a href=""><p class='icon_C'><i class="bi bi-whatsapp"></i></p></a>
                        <a href=""><p class='icon_D'><i class="bi bi-facebook"></i></p></a>
                    </div>
                </div>
            </main>
            <?php include 'includes/footer/Footer.php'; ?>
        </div>       
    </body>
</html>