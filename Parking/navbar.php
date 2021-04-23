
     
<?php
  
    if(isset($_SESSION['username'])==false) {
        
?>  
  
  <div class="container">
      
         <nav class="navbar navbar-inverse navbar-fixed-top gabanav" style="background-color:#212529;">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
              </button>

            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav gabali">
                <li><a href="index.php">Home</a></li>
                <li><a href="loginall.php">Parking Area</a></li>

                <li><a href="contact.php">Contact</a></li>
               
                
               
                

              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="sign_up.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="loginall.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              </ul>
            </div> 

            </div>   
        </nav>
             
      
       
  </div>
   

       
    <?php } else { ?> 
    <div class="container">
       <nav class="navbar navbar-inverse navbar-fixed-top gabanav">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
              </button>

            </div>
            <div class="collapse navbar-collapse" id="myNavbar" style="background-color:#212529; margin:0px -14px;">
              <ul class="nav navbar-nav gabali">
                <li><a href="index.php">Home</a></li>
                <li><a href="parkingarea.php">Area</a></li>
                <li><a href="contact.php">Contact</a></li>
               
               
                
            
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span> Log Out</a></li>
                <li><a href="#" style="margin:2px 24px 0px -5px;"><span class="glyphicon glyphicon-log-in" ></span> Welcome <?php echo $_SESSION['username']; ?></a></li>
              </ul>
            </div> 

        </div> 
      
    </nav> 
    </div>
    
    
    <?php } ?> 
    
    
    
    
   
    
    