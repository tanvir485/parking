<?php 
    $connection=mysqli_connect("localhost","root","","vehicle management");

    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Smart Parking</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
     <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <script src="https://kit.fontawesome.com/ee3c098242.js" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
    

 
</head> 
<style>
    
.parallax {
    /* The image used */
    background-image: url("pexels.jpg");
    height: 100%;

    /* Set a specific height */
    min-height: 700px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
    }
    #footer{
    background: #1a1a1a;
    padding-top: 67px;
    padding-left: 200px;
    padding-right: 200px;
}

.copyRightContainer{
    overflow: hidden;
    color: #999;
    border-top: 1px solid #333;
}
.copyRightContainer .containerfooter{
    overflow: hidden;
}
.copyrightText{
    width: 375px;
    float: left;
    padding: 15px;
}
.copyrightmenu{
    width: 570px;
    float: right;

}
.copyrightmenu ul{
    list-style: none;
    float: right;
    overflow: hidden;
}
.copyrightmenu ul li{
    float: left;
}
.copyrightmenu ul li a{
    color: #999;
    display: block;
    padding: 15px;
    text-decoration: none;
}

.fboxWrapper{
    overflow: hidden;
    margin-bottom: 60px;

}
.fbox{
    overflow: hidden;
    width: 250px;
    float: left;
    margin-right: 30px;
}
.fbox:last-child{
    margin-right: 0px;

}
.fbox h3{
    color: white;
    margin-bottom: 20px;
    color: #999;
}
.fbox p{
    line-height: 25px;
    font-size: 16px;
    margin-bottom: 15px;
}
p #contact{
    display: block;
    margin-bottom:20px;
    font-size: 16px;
}
.fbox p i{
    color: #fb5200;
    margin-right: 6px;

} 
.fbox h3{
    margin-right: 40px;
}
.fbox p{
    color: #999;
}

.ficons i{
    color: #999;
    margin: 12px;
}

.fbox ul li{
    overflow: hidden;
    margin: 15px;
    
}
.fbox ul li a{
    color:#999;
    text-decoration: none;
    display: block;
    padding: 7px 0px;
    border-bottom: 1px dashed #999;

}
.parallax1 {
    /* The image used */
    background-image: url("pexels-photo-280310 .jpeg");
    height: 100%;

    /* Set a specific height */
    min-height: 600px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
    } 
    
    .navbar-fixed-top.scrolled {
       background-color: ghostwhite;
      transition: background-color 200ms linear;
    }

</style>
<body data-spy="scroll" data-target=".navbar" data-offset="50" onload="myFunction()"> 
   
   
 
       
    
     
     
    <div class="parallax foo">
       <?php include 'navbar.php';?>
    
        <div class="hero-text" style="font-size:50px text-align: center; position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);color: white;">
           
            <h1 class="animated rubberBand" >Smart Parking System</h1>
            <p>Park your car easily and nearest area to use this.</p>
            
            <?php if(isset($_SESSION['username'])==true) { ?>
            <a class="btn btn-success" style="text-align: center" href="parkingarea.php">Book Now</a>
            
            
            <?php } else{  ?>
            <a class="btn btn-success" style="text-align: center" href="loginall.php">Login To Book A Vehicle</a> 
            <?php } ?>
            
          </div>
    </div>                 
    
    <div>
       <br><br>
        <div id="bus_route" class="container">
          <div class="page-header">
            <h1 style="text-align: center">Parking Area</h1>      
          </div> 
          <div class="row">
              <div class="col-md-6 foo">
                <p><b>The </b></p>
                <img src="pexels-photo-136739.jpeg" class="img-responsive" >  
              </div>
              <div class="col-md-6">
                  <br>
                   <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d932412.1267521078!2d88.9639724042315!3d24.093234513307983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x39fbefd0a55ea957%3A0x2f9cac3357d62617!2sRajshahi+University+of+Engineering+%26+Technology%2C+6204%2C%2C+Rajshahi+-+Dhaka+Hwy%2C+Rajshahi!3m2!1d24.363568299999997!2d88.6283773!4m5!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!3m2!1d23.810332!2d90.4125181!5e0!3m2!1sen!2sbd!4v1522267261303" width="500" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                   <p>The Bus Route</p>
              </div>
          </div>       
        </div>
        
        <br>
        <div class="page-header">
            <h1 style="text-align: center">Driver</h1>      
        </div>
        <div class="parallax1"></div>
        <div id="driver" class="container">
          
          <div class="row">
              <div class="col-md-12">
                  <p style="font-size: 20px;">The driver of ruet are very punctual and they provides great service. Every one of them is professional and great at their jobs</p>
                  
              </div>
          </div>
               
        </div>
        
        
        <div id="bus" class="container">
          <div class="page-header">
            <h1 style="text-align: center">Bus </h1>      
          </div> 
          <div class="row">
              <div class="col-md-6">
                
                <img src="pexels-photo-385998.jpeg" class="img-responsive" >  
              </div>
              <div class="col-md-6 foo1">
                  <p style="font-size:20px;"><b>In Ruet we have around ten buses and each one of it is well maintained. These buses goes in different direction of the city and can also be hired.</b></p>
              </div>
              
          </div>       
        </div>
        
        
          
          <p></p>      
                
        </div>  
        
        <footer id="footer">
                <div class="fboxWrapper">
                    <div class="fbox">
                        <h3>ABOUT US</h3>
                        <p>Travel Anywhere</p>
                        <div class="ficons">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
        
                    </div>
    
                    <div class="fbox">
                        <h3>CONTACT US</h3>
                        <p class="contact"><i class="fa fa-home"></i>Shukrabaad,Dhanmondi,Dhaka</p>
                        <p class="contact"><i class="fa fa-phone"></i>+88015 16746 243</p>
                        <p class="contact"><i class="fa fa-envelope" aria-hidden="true"></i>asikuzzaman50@gmail.com</p>
    
                    </div>
    
                    <div class="fbox">
                        <h3>USEFULL LINKS</h3>
                        <ul class="uf">
                            <li><a href="#"><i class="fas fa-greater-than" aria-hidden="true"></i> Home</a></li>
                            <li><a href="abou.php"><i class="fas fa-greater-than" aria-hidden="true"></i> About Us</a></li>
                            <li><a href="servic.php"><i class="fas fa-greater-than" aria-hidden="true"></i> Services</a></li>
                            <li><a href="contac.php"><i class="fas fa-greater-than" aria-hidden="true"></i> Contact </a></li>
                            
                        </ul>
                    </div>
    
                </div>
    
    
    
                <div class="copyRightContainer">
                    <div class="containerfooter">
                      <div class="copyrightText"> &copy;Copyright 2020 bdtour.info All rights reserved </div>
                      <div class="copyrightmenu">
                          <ul>
                              <li><a href="contact.html">FAQS</a></li>
                              <li><a href="contact.html">Privacy</a></li>
                              <li><a href="contact.html">Policy</a></li>
                              <li><a href="service.html">Support</a></li>
                          </ul>
                      </div>
                    </div>
                
                </div>
            </footer>
        
        
        
        
    
    
    
<script>
    $(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-fixed-top");
    $a= $(".parallax");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $a.height());
  });
}); 
    
    </script>    
  
  
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  
  
  <script>
        window.sr = ScrollReveal();
        sr.reveal('.foo', { duration: 800 });
        sr.reveal('.foo1', { duration: 800,origin: 'top'});
    </script>
    
</body>
</html>