<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'includes/header/Header.php'; ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Our Courses</title>

        <style>
            
.container > h2 {
font-size: 40px;
text-align: start;
font-weight: bold;
color: #164176;
font-family: 'Titillium Web', sans-serif;
}

.container > h3{
text-align: center;
font-weight: bold;
font-family: 'Space Grotesk', sans-serif;
color: #761d16;
padding: 6px 6px;
}

.pl_div{
width: 22rem;
height: 26em;
margin: 6px;
background-color: white;
border-radius: 20px;
}
.pl_div > img {
justify-items: center;
width: 14rem;
height: 12rem;
padding: 6px;
border-radius: 20px;
}
.pl_row{
display: flex;
justify-content: space-around;
padding-bottom: 2em;
}
.pl_div > button {
padding: 0.3em 3em;
border: 1px solid #d43327;
border-radius: 15px;
transition: 1s;
transition: ease-out 1s;
}
.pl_div > button:hover {
padding: 0.3em 3em;
background-color: #d43327;
color: white;
}
.ml_div{
width: 22rem;
height: 26em;
margin: 6px;
background-color: white;
border-radius: 20px;
}
.ml_div > img {
justify-items: center;
width: 16rem;
height: 14rem;
padding: 6px 0em;
border-radius: 18px;
}
.ml_div > button {
padding: 0.3em 3em;
border: 1px solid #d43327;
border-radius: 15px;
transition: 1s;
transition: ease-out 1s;
}
.ml_div > button:hover {
padding: 0.3em 3em;
background-color: #d43327;
color: white;
}
.ml_row{
display: flex;
justify-content: space-around;
}


.card_content{
border-radius: 40px;
z-index: 100;
}
.card_content > h2{
font-size: 1.5em;
font-weight:bold;
}
.card_content p{
text-align: justify;
}

@media screen and (max-width: 768px) {
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
color: #1a4e8d;
padding: 20px 0;
}
.pl_div{
width: 36rem;
height: 32rem;
margin: 8px;
background-color: white;
}
.pl_div > img {
justify-items: center;
width: 30rem;
height: 20rem;
}
.pl_row{
display: flex;
flex-direction: column;
}

.ml_div{
width: 36rem;
height: 32rem;
margin: 8px;
background-color: white;
}
.ml_div > img {
justify-items: center;
width: 30rem;
height: 20rem;
}
.ml_div > button {
padding-bottom: 0rem;
border: 1px solid blue;
}
.ml_row{
display: flex;
flex-direction: column;
}
.card_content > h2{
font-size: 1.5em;
font-weight:bold;
}
}
@media screen and (max-width: 414px) {
.container{
padding: 0;
margin: 0;
}
.ms_div > button {
border-radius: 10px;
}
.container > h2 {
font-size: 25px;
font-weight: bold;
font-family: 'Titillium Web', sans-serif;
}

.container > h3{
font-size: 20px;
text-align: start;
font-weight: bold;
color: #1a4e8d;
padding: 5px 0 0 0;
}
.pl_div{
width:25rem;
height: 28rem;
margin: 6px;
background-color: white;
}
.pl_div > img {
justify-items: center;
width: 22rem;
height: 14rem;
}
.pl_row{
display: flex;
flex-direction: column;
}

.ml_div{
width: 25rem;
height: 28rem;
margin: 6px;
background-color: white;
}
.ml_div > img {
justify-items: center;
width: 22rem;
height: 14rem;
}
.ml_div > button {
padding-bottom: 0rem;
border: 1px solid #d43327;
}
.ml_row{
display: flex;
flex-direction: column;
}
.card_content > h2{
font-size: 1em;
font-weight:bold;
}
}

@media screen and (max-width: 375px) {
.container{
padding: 0;
margin: 0;
}
.card > img {
justify-items: center;
width: 16rem;
height: 14rem;
}
.container > h2 {
font-size: 25px;
font-weight: bold;
font-family: 'Titillium Web', sans-serif;
}

.container > h3{
font-size: 20px;
text-align: center;
font-weight: bold;
color: #761d16;
padding: 5px 0 0 0;
}
.pl_div{
width:22em;
height: 26em;
margin: 6px;
background-color: white;
}
.pl_div > img {
justify-items: center;
width: 18em;
height: 14em;
}
.pl_row{
display: flex;
flex-direction: column;
}

.ml_div{
width: 22em;
height: 26em;
margin: 6px;
background-color: white;
}
.ml_div > img {
justify-items: center;
width: 18em;
height: 14em;
}
.ml_div > button{
border: 1px solid #d43327;
border-radius: 15px;
}
.ml_row{
display: flex;
flex-direction: column;
}
.card_content > h2{
font-size: 1em;
font-weight:bold;
}
}
@media screen and (max-width: 280px) {
.container{
padding: 0;
margin: 0;
}
.card > img {
justify-items: center;
width: 10rem;
height: 14rem;
}
button {
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
color: #1a4e8d;
font-size: 20px;
padding: 20px 0;
}
.pl_div{
width:17rem;
height: 24em;
margin: 8px;
background-color: white;
}
.pl_div > img {
justify-items: center;
width: 15rem;
height: 12rem;
}
.pl_div > button {
padding-bottom: 0rem;
}
.pl_row{
display: flex;
flex-direction: column;
}

.ml_div{
width: 17rem;
height: 24em;
margin: 8px;
background-color: white;
}
.ml_div > img {
justify-items: center;
width: 15rem;
height: 12rem;
}
.ml_div > button {
padding-bottom: 0rem;
}
.ml_row{
display: flex;
flex-direction: column;
}
.card_content > h2{
font-size: 1em;
font-weight:bold;
}
} */
            
        </style>
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
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSf_uRWRmE2ouNnGALVZCQxBfDQAL7C3RM0EIsfywAMRAIwyow/viewform?usp=sf_link" class="nav-link" target="_blank"><div class="btn btn-danger">Register Now</div></a>
                    </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
   
            <main>            
                <div class="container">
                    <h2>Our courses</h2>
                    <h3>Information/Cyber Security and Penetration Testing</h3>
                    <div class="pl_row">
                        <div class="ml_div">
                            <img src="https://images.pexels.com/photos/4709286/pexels-photo-4709286.jpeg?auto=compress&cs=tinysrgb&w=400"
                            class="card-img-top" alt="course 1 image">
                        <div class="card_content card-body">
                    <h2 class="card-title">Cyber Resilience Training</h2>
                    <p class="card-text">Some quick example text to build on the card
                    title and make up the bulk of the card's content.</p>
                    </div>
                    <button>More Details</button>
                    </div>

                    <div class="ml_div">
                    <img src="https://images.pexels.com/photos/3755755/pexels-photo-3755755.jpeg?auto=compress&cs=tinysrgb&w=400"
                    class="card-img-top" alt="...">
                    <div class="card_content card-body">
                    <h2 class="card-title">Cyber Security Incidence</h2>
                    <p class="card-text">Some quick example text to build on the card
                    title and make up the bulk of the card's content.</p>
                    </div>
                    <button>More Details</button>
                    </div>

                    <div class="ml_div">
                    <img src="https://images.pexels.com/photos/4260325/pexels-photo-4260325.jpeg?auto=compress&cs=tinysrgb&w=400"
                    class="card-img-top" alt="...">
                    <div class="card_content card-body">
                    <h2 class="card-title">Cyber GRC Training</h2>
                    <p class="card-text">Some quick example text to build on the card
                    title and make up the bulk of the card's content.</p>
                    </div>
                    <button>More Details</button>
                    </div>
                    </div>

                    <h3>Programming languages for Adults, Children and Family</h3>

                    <div class="pl_row">
                    <div class="pl_div">
                    <img src="https://images.pexels.com/photos/11035474/pexels-photo-11035474.jpeg?auto=compress&cs=tinysrgb&w=400"
                    class="card-img-top" alt="course 1 image">
                    <div class="card_content card-body">
                    <h2 class="card-title">Python</h2>
                    <p class="card-text">Some quick example text to build on the card
                    title and make up the bulk of the card's content.</p>
                    </div>
                    <button>More Details</button>
                    </div>

                    <div class="pl_div">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzUdJuzymzlVCGXDTCV1FO0-TTpgAWErX4og&usqp=CAU"
                    class="card-img-top" alt="course 1 image">
                    <div class="card_content card-body">
                    <h2 class="card-title">HTML5</h2>
                    <p class="card-text">Some quick example text to build on the card
                    title and make up the bulk of the card's content.</p>
                    </div>
                    <button>More Details</button>
                    </div>

                    <div class="pl_div">
                    <img src="https://rukminim2.flixcart.com/image/850/1000/ksnjp8w0/laptop-skin-decal/t/h/9/css-logo-laptop-trackpad-stickers-woopme-15-6-original-imag66dsgjmrq5pp.jpeg"
                    class="card-img-top" alt="...">
                    <div class="card_content card-body">
                    <h2 class="card-title">CSS</h2>
                    <p class="card-text">Some quick example text to build on the card
                    title and make up the bulk of the card's content.</p>
                    </div>
                    <button>More Details</button>
                    </div>

                    <div class="pl_div">
                    <img src="https://itchief.ru/assets/images/covers/javascript-statements.png"
                    class="card-img-top" alt="...">
                    <div class="card_content card-body">
                    <h2 class="card-title">JavaScript</h2>
                    <p class="card-text">Some quick example text to build on the card
                    title and make up the bulk of the card's content.</p>
                    </div>
                    <button>More Details</button>
                    </div>
                    </div>

                    <h3>Microsoft Office Applications</h3>
                    <div class="pl_row">
                    <div class="ml_div">
                    <img src="https://images.pexels.com/photos/4709286/pexels-photo-4709286.jpeg?auto=compress&cs=tinysrgb&w=400"
                    class="card-img-top" alt="course 1 image">
                    <div class="card_content card-body">
                    <h2 class="card-title">Microsoft Word</h2>
                    <p class="card-text">Some quick example text to build on the card
                    title and make up the bulk of the card's content.</p>
                    </div>
                    <button>More Details</button>
                    </div>

                    <div class="ml_div">
                    <img src="https://images.pexels.com/photos/3755755/pexels-photo-3755755.jpeg?auto=compress&cs=tinysrgb&w=400"
                    class="card-img-top" alt="...">
                    <div class="card_content card-body">
                    <h2 class="card-title">Excel Cell References</h2>
                    <p class="card-text">Some quick example text to build on the card
                    title and make up the bulk of the card's content.</p>
                    </div>
                    <button>More Details</button>
                    </div>

                    <div class="ml_div">
                    <img src="https://images.pexels.com/photos/4260325/pexels-photo-4260325.jpeg?auto=compress&cs=tinysrgb&w=400"
                    class="card-img-top" alt="...">
                    <div class="card_content card-body">
                    <h2 class="card-title">Microsoft Powerpoint</h2>
                    <p class="card-text">Some quick example text to build on the card
                    title and make up the bulk of the card's content.</p>
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