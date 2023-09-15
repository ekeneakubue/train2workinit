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
            <?php include 'includes/navbar/Navbar.php'; ?>
            
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
        </div>
        
    
        <?php include 'includes/footer/Footer.php'; ?>
    </body>
</html>  