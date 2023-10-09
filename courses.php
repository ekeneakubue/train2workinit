<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'includes/header/Header.php'; ?>
        <link rel="stylesheet" href="assets/css/courses.css">
        <!-- <link rel="stylesheet" href="assets/css/courses.css"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:wght@600&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">

        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <title>Our Courses</title>        
        
    </head>
    <body>   
        <?php include 'includes/loader/Loader.php'; ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                                    <a href="courses.php" class="nav-link">Courses<hr class="activated"></a>
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
   
            <div class="container-fluid">
                <div class="row">
                    <div class="col md-12">
                        <div class="main" data-aos="zoom-in" data-aos-duration="3000"><br><br><br><br><br><br>
                            <h3>Information/Cyber Security and Penetration Testing(12 weeks)</h3>
                            <p>This training course will help you launch a career in the following positions:</p>
                        </div>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-md-3">                    
                        <div class="card" data-aos="fade-up" data-aos-duration="3000">
                            <img src="assets/images/courses/security.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Information Security Analyst Training</h5>
                                <p class="card-text">
                                    This course will teach you the skills and knowledge you need to become an information security 
                                    analyst. You will learn about the different aspects of information security, including risk 
                                    assessment, vulnerability management, and incident response.
                                </p>
                                <a href="contacts.php"><div class="enrol-btn">Enroll Now</div></a>
                            </div>                            
                        </div>                        
                    </div>

                    <div class="col-md-3">                    
                        <div class="card" data-aos="fade-up" data-aos-duration="3000">
                            <img src="assets/images/courses/cyber.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Cyber Security Analyst Training</h5>
                                <p class="card-text">
                                    This course will teach you the skills and knowledge you need to become a cyber 
                                    security analyst. You will learn about the different threats and vulnerabilities that organizations 
                                    face, and how to protect organizations from cyber-attacks.
                                </p>
                                <a href="contacts.php"><div class="enrol-btn">Enroll Now</div></a>
                            </div>                            
                        </div>                        
                    </div>

                    <div class="col-md-3">                    
                        <div class="card" data-aos="fade-up" data-aos-duration="3000">
                            <img src="assets/images/courses/penetrate.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Penetration Testing Training</h5>
                                <p class="card-text">
                                    This course will teach you how to perform penetration testing. You will learn about the different types 
                                    of penetration tests, how to identify vulnerabilities, and how to exploit vulnerabilities.
                                </p>
                                <a href="contacts.php"><div class="enrol-btn">Enroll Now</div></a>
                            </div>                            
                        </div>                        
                    </div>

                    <div class="col-md-3">                    
                        <div class="card" data-aos="fade-up" data-aos-duration="3000">
                            <img src="assets/images/courses/warning.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">SOC Analyst</h5>
                                <p class="card-text">
                                    This course will prepare you for a rewarding career as a SOC (Security Operations Center) Analyst. You will gain 
                                    in-depth knowledge of threat detection, incident response, and network security monitoring. Learn to safeguard 
                                    organizations from cyber threats and respond effectively to security incidents.
                                </p>
                                <a href="contacts.php"><div class="enrol-btn">Enroll Now</div></a>
                            </div>                            
                        </div>                        
                    </div>
                </div>


                <div class="row">
                    <div class="col md-12">
                        <div class="main" data-aos="zoom-in" data-aos-duration="3000">
                            <h3>Programming languages for Adults, Children and Families(12 weeks)</h3>
                            <p>
                                The following programming languages will help you launch a career as a software engineer, 
                                web developer, or mobile app developer.
                            </p>
                        </div>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-md-3">                    
                        <div class="card" data-aos="fade-up" data-aos-duration="3000">
                            <img src="assets/images/courses/python.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Python</h5>
                                <p class="card-text">
                                    This training package will teach you the fundamentals of Python programming, including variables, data types, functions, 
                                    and loops. You will learn how to use Python to create scripts, automate tasks, and develop applications.
                                </p>
                                <a href="contacts.php"><div class="enrol-btn">Enroll Now</div></a>
                            </div>                            
                        </div>                        
                    </div>
                    <div class="col-md-3">                    
                        <div class="card" data-aos="fade-up" data-aos-duration="3000">
                            <img src="assets/images/courses/html.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">HTML5</h5>
                                <p class="card-text">
                                    This training package will teach you the basics of HTML5, the markup language used to create web pages. You will learn how 
                                    to structure your web pages, add content, and format your text.
                                </p>
                                <a href="contacts.php"><div class="enrol-btn">Enroll Now</div></a>
                            </div>                            
                        </div>                        
                    </div>
                    <div class="col-md-3">                    
                        <div class="card" data-aos="fade-up" data-aos-duration="3000">
                            <img src="assets/images/courses/css.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">CSS</h5>
                                <p class="card-text">
                                    This training package will teach you the basics of CSS, the style sheet language used to control the appearance of web pages. 
                                    You will learn how to use CSS to change the font, color, and layout of your web pages.
                                </p>
                                <a href="contacts.php"><div class="enrol-btn">Enroll Now</div></a>
                            </div>                            
                        </div>                        
                    </div>
                    <div class="col-md-3">                    
                        <div class="card" data-aos="fade-up" data-aos-duration="3000">
                            <img src="assets/images/courses/javascript.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">JavaScript</h5>
                                <p class="card-text">
                                    This training package will teach you the basics of JavaScript, the programming language used to add interactivity to web pages. 
                                    You will learn how to use JavaScript to create animations, validate forms, and send and receive data from a server.
                                </p>
                                <a href="contacts.php"><div class="enrol-btn">Enroll Now</div></a>
                            </div>                            
                        </div>                        
                    </div>

                </div>


                <div class="row">
                    <div class="col md-12">
                        <div class="main" data-aos="zoom-in" data-aos-duration="3000">
                            <h3>Microsoft Office Applications for everyone(8 weeks)</h3>
                            <p>
                                This training course will enable you to acquire practical, hands-on experience with the Microsoft Office 
                                skills necessary for success in any career or academic field.
                            </p>
                        </div>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-md-4">                    
                        <div class="card" data-aos="fade-up" data-aos-duration="3000">
                            <img src="assets/images/courses/word.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Microsoft Word (Beginner, Intermediate, Advanced)</h5>
                                <p class="card-text">
                                    This course will provide you with the knowledge and expertise to proficiently use Microsoft Word. 
                                    You'll learn to create and format documents, making you a skilled document creator and editor.
                                </p>
                                <a href="contacts.php"><div class="enrol-btn">Enroll Now</div></a>
                            </div>                            
                        </div>                        
                    </div>
                    <div class="col-md-4">                    
                        <div class="card" data-aos="fade-up" data-aos-duration="3000">
                            <img src="assets/images/courses/excel.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Microsoft Excel (Beginner, Intermediate, Advanced)</h5>
                                <p class="card-text">
                                    In this course, you'll gain proficiency in Microsoft Excel, empowering you to work with data, create 
                                    spreadsheets, including formulas, charts, graphs and perform complex calculations. You'll become adept 
                                    at handling numerical information and analysis.
                                </p>
                                <a href="contacts.php"><div class="enrol-btn">Enroll Now</div></a>
                            </div>                            
                        </div>                        
                    </div>
                    <div class="col-md-4">                    
                        <div class="card" data-aos="fade-up" data-aos-duration="3000">
                            <img src="assets/images/courses/powerpoint.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Microsoft PowerPoint (Beginner, Intermediate, Advanced)</h5>
                                <p class="card-text">
                                    This course will teach you how to use Microsoft PowerPoint to create and deliver engaging presentations, 
                                    including slides, images, and multimedia to effectively convey your ideas and messages.
                                </p>
                                <a href="contacts.php"><div class="enrol-btn">Enroll Now</div></a>
                            </div>                            
                        </div>                        
                    </div>
                </div>  
                
                

                <div class="row">
                    <div class="col md-12">
                        <div class="main" data-aos="zoom-in" data-aos-duration="3000">
                            <h3>Software Development Bootcamp</h3>
                            <p>
                                This bootcamp will help you launch a career in web development. 
                            </p>
                        </div>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-md-6">                    
                        <div class="card" data-aos="fade-up" data-aos-duration="3000">
                            <img src="assets/images/courses/bootcamp.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Web Developer Bootcamp (12 weeks)</h5>
                                <p class="card-text">
                                    Gain hands-on experience in building modern, responsive websites and web applications while mastering essential 
                                    technologies such as HTML, CSS, JavaScript, and more. Upon completion of this bootcamp, a spectrum of opportunities 
                                    awaits you.You can launch your career as a front-end web developer, back-end web developer, or a versatile full-stack 
                                    developer. Alternatively, the skills you gain may empower you to kickstart your own web development venture.
                                </p>
                                <a href="contacts.php"><div class="enrol-btn">Enroll Now</div></a>
                            </div>                            
                        </div>                        
                    </div>
                    <div class="col-md-6">                    
                        <div class="card" data-aos="fade-up" data-aos-duration="3000">
                            <img src="assets/images/courses/testing.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Software Testing / Manual & Automation Testing (12 weeks)</h5>
                                <p class="card-text">
                                    Join us today to master Manual and Automation Testing and open a world of quality assurance opportunities.
                                    Elevate your career in quality assurance with our Software Testing and Automation Testing program. Learn the 
                                    latest techniques and tools for ensuring software reliability and efficiency. From manual testing methodologies 
                                    to automated testing frameworks, we'll equip you with the skills needed to excel in the software testing and 
                                    automation testing field.
                                </p>
                                <a href="contacts.php"><div class="enrol-btn">Enroll Now</div></a>
                            </div>                            
                        </div>                        
                    </div>
                </div>


            </div>        
            
            
                <!-- <div class="container">
                    

                        

                        

                       

                    
             

                   
                    

                    

                        

                       

                    <h3></h3>
                    <p></p>
                    <div class="pl_row">
                        <div class="si_div">
                            <img src="https://cdn.pixabay.com/photo/2018/08/12/13/54/code-3600810_1280.png"
                                alt="web developer bootcamp image"
                                class="card-img-top" alt="course 1 image"
                            >
                            <div class="card_content card-body">                                
                                <p class="card-text">This bootcamp will help you launch a career in web development. Gain hands-on experience in building modern, responsive websites and web applications while mastering essential technologies such as HTML, CSS, JavaScript, and more.
                                    Upon completion of this bootcamp, a spectrum of opportunities awaits you. You can launch your career as a front-end web developer, back-end web developer, or a versatile full-stack developer. Alternatively, the skills you gain may empower you to kickstart your own web development venture.
                                </p>
                            </div>                        
                        </div>                        
                    </div>

                    <h3>Software Testing / Manual & Automation Testing (12 weeks)</h3>
                    <p>Join us today to master Manual and Automation Testing and open a world of quality assurance opportunities.</p>
                    <div class="pl_row">
                        <div class="si_div">
                            <img src="https://cdn.pixabay.com/photo/2016/02/13/04/44/label-1197365_1280.png"
                                alt="Software testing image"
                                class="card-img-top" alt="course 1 image"
                            >
                            <div class="card_content card-body">
                                <p class="card-text"></p>
                            </div>                        
                        </div>                        
                    </div>
                </div> -->
           
            <?php include 'includes/footer/Footer.php'; ?> 
        </div>             
    </body>
</html>  

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>AOS.init();</script>