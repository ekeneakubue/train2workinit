<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'includes/header/Header.php'; ?>
        <link rel="stylesheet" href="assets/css/courses.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Our Courses</title>

        
    </head>
    <body>   
        <?php include 'includes/loader/Loader.php'; ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                        <a href="courses.php" class="nav-link" href="#">Courses<hr class="activated"></a>
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
            </nav>
            <!-- End Navbar -->
   
            <main>            
                <div class="container">
                    <h3>Information/Cyber Security and Penetration Testing</h3>
                    <p>This training package will help you launch a career in the following positions:</p>
                    <div class="pl_row">
                        <div class="pl_div">
                            <img src="https://images.pexels.com/photos/4709286/pexels-photo-4709286.jpeg?auto=compress&cs=tinysrgb&w=400"
                            class="card-img-top" alt="course 1 image">
                            <div class="card_content card-body">
                            <h2 class="card-title">Information Security Analyst Training</h2>
                            <p class="card-text">This course will teach you the skills and knowledge you need 
                                to become an information security analyst. You will learn about the different
                                 aspects of information security, including risk assessment, vulnerability management,
                                  and incident response.</p>
                            </div>
                            <button>More Details</button>
                            </div>

                        <div class="pl_div">
                            <img src="https://images.pexels.com/photos/3755755/pexels-photo-3755755.jpeg?auto=compress&cs=tinysrgb&w=400"
                            class="card-img-top" alt="...">
                            <div class="card_content card-body">
                                <h2 class="card-title">Cyber Security Analyst Training</h2>
                                <p class="card-text">This course will teach you the skills and knowledge you need to become a cyber security analyst. You will learn about the different threats and vulnerabilities that organizations face, and how to protect organizations from cyber-attacks.</p>
                            </div>
                            <button>More Details</button>
                        </div>

                        <div class="pl_div">
                            <img src="https://images.pexels.com/photos/4260325/pexels-photo-4260325.jpeg?auto=compress&cs=tinysrgb&w=400"
                            class="card-img-top" alt="...">
                            <div class="card_content card-body">
                            <h2 class="card-title">Penetration Testing Training</h2>
                            <p class="card-text">This course will teach you how to perform penetration testing. You will learn about the different types of penetration tests, how to identify vulnerabilities, and how to exploit vulnerabilities.</p>
                            </div>
                            <button>More Details</button>
                        </div>

                        <div class="pl_div">
                            <img src="https://images.pexels.com/photos/3755755/pexels-photo-3755755.jpeg?auto=compress&cs=tinysrgb&w=400"
                            class="card-img-top" alt="...">
                            <div class="card_content card-body">
                                <h2 class="card-title">SOC Analyst</h2>
                                <p class="card-text">This course will prepare you for a rewarding career as a SOC (Security Operations Center) Analyst. You will gain in-depth knowledge of threat detection, incident response, and network security monitoring. Learn to safeguard organizations from cyber threats and respond effectively to security incidents.</p>
                            </div>
                            <button>More Details</button>
                        </div>
                    </div>

                    

                    <h3>Programming languages for Adults, Children and Families</h3>
                        <p>This training package will help you launch a career in software engineer, web developer, or mobile app developer.</p>
                    <div class="pl_row">
                        <div class="pl_div">
                            <img src="https://images.pexels.com/photos/11035474/pexels-photo-11035474.jpeg?auto=compress&cs=tinysrgb&w=400"
                            class="card-img-top" alt="course 1 image">
                            <div class="card_content card-body">
                                <h2 class="card-title">Python</h2>
                                <p class="card-text">This training package will teach you the fundamentals of Python programming, including variables, data types, functions, and loops. You will learn how to use Python to create scripts, automate tasks, and develop applications.</p>
                            </div>
                            <button>More Details</button>
                        </div>

                    <div class="pl_div">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzUdJuzymzlVCGXDTCV1FO0-TTpgAWErX4og&usqp=CAU"
                    class="card-img-top" alt="course 1 image">
                    <div class="card_content card-body">
                    <h2 class="card-title">HTML5</h2>
                    <p class="card-text">This training package will teach you the basics of HTML5, the markup language used to create web pages. You will learn how to structure your web pages, add content, and format your text.</p>
                    </div>
                    <button>More Details</button>
                    </div>

                    <div class="pl_div">
                    <img src="https://rukminim2.flixcart.com/image/850/1000/ksnjp8w0/laptop-skin-decal/t/h/9/css-logo-laptop-trackpad-stickers-woopme-15-6-original-imag66dsgjmrq5pp.jpeg"
                    class="card-img-top" alt="...">
                    <div class="card_content card-body">
                    <h2 class="card-title">CSS</h2>
                    <p class="card-text">This training package will teach you the basics of CSS, the style sheet language used to control the appearance of web pages. You will learn how to use CSS to change the font, color, and layout of your web pages.</p>
                    </div>
                    <button>More Details</button>
                    </div>

                    <div class="pl_div">
                    <img src="https://itchief.ru/assets/images/covers/javascript-statements.png"
                    class="card-img-top" alt="...">
                    <div class="card_content card-body">
                    <h2 class="card-title">JavaScript</h2>
                    <p class="card-text">This training package will teach you the basics of JavaScript, the programming language used to add interactivity to web pages. You will learn how to use JavaScript to create animations, validate forms, and send and receive data from a server.</p>
                    </div>
                    <button>More Details</button>
                    </div>
                    </div>

                    <h3>Microsoft Office Applications for everyone.</h3>
                    <p>This training package will help you gain hands-on experience with the essential tools to be more productive and efficient in your work and studies</p>
                    <div class="pl_row">
                    <div class="ml_div">
                    <img src="https://images.pexels.com/photos/4709286/pexels-photo-4709286.jpeg?auto=compress&cs=tinysrgb&w=400"
                    class="card-img-top" alt="course 1 image">
                    <div class="card_content card-body">
                    <h2 class="card-title">Microsoft Word (Beginner, Intermediate, Advanced)</h2>
                    <p class="card-text">This course will provide you with the knowledge and expertise to proficiently use Microsoft Word. You'll learn to create and format documents, making you a skilled document creator and editor.</p>
                    </div>
                    <button>More Details</button>
                    </div>

                    <div class="ml_div">
                    <img src="https://images.pexels.com/photos/3755755/pexels-photo-3755755.jpeg?auto=compress&cs=tinysrgb&w=400"
                    class="card-img-top" alt="...">
                    <div class="card_content card-body">
                    <h2 class="card-title">Microsoft Excel (Beginner, Intermediate, Advanced)</h2>
                    <p class="card-text">In this course, you'll gain proficiency in Microsoft Excel, empowering you to work with data, create spreadsheets, including formulas, charts, graphs and perform complex calculations. You'll become adept at handling numerical information and analysis.</p>
                    </div>
                    <button>More Details</button>
                    </div>

                    <div class="ml_div">
                    <img src="https://images.pexels.com/photos/4260325/pexels-photo-4260325.jpeg?auto=compress&cs=tinysrgb&w=400"
                    class="card-img-top" alt="...">
                    <div class="card_content card-body">
                    <h2 class="card-title">Microsoft PowerPoint (Beginner, Intermediate, Advanced)</h2>
                    <p class="card-text">This course will teach you how to use Microsoft PowerPoint to create and deliver engaging presentations, including slides, images, and multimedia to effectively convey your ideas and messages.</p>
                    </div>
                    <button>More Details</button>
                    </div>
                    </div>
                </div>
            </main>
            <?php include 'includes/footer/Footer.php'; ?> 
        </div>             
    </body>
</html>  