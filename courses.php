<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'includes/header/Header.php'; ?>
        
        <title>Our Courses</title>

        <style>
            
            .container{
                padding: 4rem;
            }
            .container > h2 {
                font-size: 60px;
                font-weight: bold;
                font-family: 'Titillium Web', sans-serif;
            }

            .container > h3{
                text-align: start;
                font-weight: bold;
                padding: 20px 0;
            }
            .row {
                padding-bottom:2rem;
            }
            .card > img {
                justify-items: center;
                width: 20rem;
                height: 16rem;
            }
            .card_content{
                border-radius: 40px;
                z-index: 100;
            }
            .ms_div > button {
                border-radius: 10px;
            }

            @media screen and (max-width: 765px) {
               .card > img {
                    justify-items: center;
                    width: 16rem;
                    height: 14rem;
                } 
                .ms_div > button {
                    border-radius: 10px;
                    /* width: 4rem; */
                }
                .container > h2 {
                    font-size: 30px;
                    font-weight: bold;
                    font-family: 'Titillium Web', sans-serif;
                }

                .container > h3{
                    text-align: start;
                    font-weight: bold;
                    padding: 20px 0;
                }
            }

            @media screen and (max-width: 365px) {
                .card > img {
                    justify-items: center;
                    width: 16rem;
                    height: 14rem;
                }
                .ms_div > button {
                    border-radius: 10px;
                }
                .container > h2 {
                    font-size: 30px;
                    font-weight: bold;
                    font-family: 'Titillium Web', sans-serif;
                }

                .container > h3{
                    text-align: start;
                    font-weight: bold;
                    padding: 20px 0;
                }
            }
            @media screen and (max-width: 280px) {
                .card > img {
                    justify-items: center;
                    width: 10rem;
                    height: 14rem;
                }
                .ms_div > button {
                    border-radius: 10px;
                }
                .container > h2 {
                    font-size: 30px;
                    font-weight: bold;
                    font-family: 'Titillium Web', sans-serif;
                }

                .container > h3{
                    text-align: start;
                    font-weight: bold;
                    padding: 20px 0;
                }
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
                        <a href="#" class="nav-link"><div class="btn btn-danger">Apply Now</div></a>
                    </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
   
            <main>
                <div class="container">
                    <h2>Our courses</h2>
                    
                    <h3>Information/Cyber Security and Penetration Testing</h3>
                    <div class="row">
                        
                        <div class="ms_div col-md-4 card" style="width: 20rem;">
                            
                            <img src="https://images.pexels.com/photos/4709286/pexels-photo-4709286.jpeg?auto=compress&cs=tinysrgb&w=400" class="card-img-top" alt="course 1 image">
                            <div class="card_content card-body">
                                <h2 class="card-title">Card title</h2>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                
                            </div>
                            <button>More Details</button>
                        </div>

                         <div class="ms_div col-md-4 card" style="width: 20rem;">
                            <img src="https://images.pexels.com/photos/3755755/pexels-photo-3755755.jpeg?auto=compress&cs=tinysrgb&w=400" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h2 class="card-title">Card title</h2>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                
                            </div>
                            <button>More Details</button>
                        </div>

                        <div class="ms_div col-md-4 card" style="width: 20rem;">
                            <img src="https://images.pexels.com/photos/4260325/pexels-photo-4260325.jpeg?auto=compress&cs=tinysrgb&w=400" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h2 class="card-title">Card title</h2>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                
                            </div>
                            <button>More Details</button>
                        </div>                        
                    </div>

                    <h3>Programming languages for Adults, Children and Family</h3>

                    <div class="row">
                        
                        <div class="ms_div col-md-4 card" style="width: 20rem;">
                            
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzUdJuzymzlVCGXDTCV1FO0-TTpgAWErX4og&usqp=CAU" class="card-img-top" alt="course 1 image">
                            <div class="card-body">
                                <h2 class="card-title">HTML5 in Depth</h2>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                
                            </div>
                            <button>More Details</button>
                        </div>

                         <div class="ms_div col-md-4 card" style="width: 20rem;">
                            <img src="https://rukminim2.flixcart.com/image/850/1000/ksnjp8w0/laptop-skin-decal/t/h/9/css-logo-laptop-trackpad-stickers-woopme-15-6-original-imag66dsgjmrq5pp.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h2 class="card-title">Styling with CSS</h2>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                
                            </div>
                            <button>More Details</button>
                        </div>

                        <div class="ms_div col-md-4 card" style="width: 20rem;">
                            <img src="https://itchief.ru/assets/images/covers/javascript-statements.png"  class="card-img-top" alt="...">
                            <div class="card-body">
                                <h2 class="card-title">Programming with JavaScript</h2>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                
                            </div>
                            <button>More Details</button>
                        </div>                        
                    </div>

                    <h3>Microsoft Office Applications</h3>
                    <div class="row">
                        
                        <div class="ms_div col-md-4 card" style="width: 20rem;">
                            
                            <img src="https://images.pexels.com/photos/4709286/pexels-photo-4709286.jpeg?auto=compress&cs=tinysrgb&w=400" class="card-img-top" alt="course 1 image">
                            <div class="card-body">
                                <h2 class="card-title">Microsoft Word</h2>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                
                            </div>
                            <button>More Details</button>
                        </div>

                         <div class="ms_div col-md-4 card" style="width: 20rem;">
                            <img src="https://images.pexels.com/photos/3755755/pexels-photo-3755755.jpeg?auto=compress&cs=tinysrgb&w=400" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h2 class="card-title">Excel Cell References</h2>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                
                            </div>
                            <button>More Details</button>
                        </div>

                        <div class="ms_div col-md-4 card" style="width: 20rem;">
                            <img src="https://images.pexels.com/photos/4260325/pexels-photo-4260325.jpeg?auto=compress&cs=tinysrgb&w=400" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h2 class="card-title">Presentation Made easy with Powerpoint</h2>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                
                            </div>
                            <button>More Details</button>
                        </div>                    
                    </div>

                    
                </div>
            </main>
            
        </div>
        
    
        <?php include 'includes/footer/Footer.php'; ?>

        

        <script>
            
        </script>
    </body>
</html>  