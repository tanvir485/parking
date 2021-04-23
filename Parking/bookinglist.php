<?php
    session_start();
     $connection= mysqli_connect('localhost','root','','vehicle management');

    $select_query="SELECT * FROM `booking` ORDER BY booking_id DESC";
    $result= mysqli_query($connection,$select_query);
    

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking list</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="sweetalert2/sweetalert2.css">
    <script src="sweetalert2/sweetalert2.min.js"></script>
    <script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
     
<div class="parallax foo">
        
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
                  <li><a href="login.php">Parking Area</a></li>
    
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
                  <li><a href="ownerpage.php">Home</a></li>
                  <li><a href="bookinglist.php">Booking List</a></li>
                  <li><a href="contact.php">Contact</a></li>
                  <li><a href="mybill.php?id=<?php echo $_SESSION['username']; ?>">My Account</a></li>
                 
                  
              
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
      
      
    
    
    
    





  <br><br>
   <div class="container">
        <div class="row">
           <div class="col-md-12">
             <div class="page-header">
                <h1 style="text-align: center;">Booking List</h1>
                 
              </div> 
              <table id="myTable" class="table table-bordered animated bounce">
                <thead>
                    
                    <th>Booking Id</th>
                    <th>Name</th>
                    <th>Type</th>
                    
                    <th>Delete</th>
                    <th>Release</th>
                    <th>Confirm Trip</th>
                    <th>Checked</th>
                    <th>Finished</th>
                    <th>Bill</th>
                    <th>Confirm Payment</th>
                    <th>Paid</th>
                    
                </thead>
                
                <tbody>
                    <?php while($row=mysqli_fetch_assoc($result)){ ?>
                    <tr>
                       
                        <td><?php echo $row['booking_id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['type']; ?></td>
                       
                        
                        <td><a class="btn btn-danger" href="deletebooking.php?id=<?php echo $row['booking_id']; ?>">Delete</a></td>
                        
                        <?php if($row['confirmation']==0 or $row['finished']==1)  { ?>
                        <td><a class="btn btn-default disabled" href="releasebooking.php?id=<?php echo $row['booking_id']; ?>">Release Vehicle</a></td>
                        <?php } else{ ?>
                        <td><a class="btn btn-default" href="releasebooking.php?id=<?php echo $row['booking_id']; ?>">Release Vehicle</a></td>
                        <?php } ?>
                        
                        <?php if($row['confirmation']=='0'){ ?>
                        <td><a class="btn btn-success" href="confirmbooking.php?id=<?php echo $row['booking_id']; ?>">Confirm</a></td>
                        <?php } else { ?>
                        <td><a class="btn btn-success disabled" href="confirmbooking.php?id=<?php echo $row['booking_id']; ?>">Confirm</a></td>
                        <?php } ?>
                        
                        <?php if($row['confirmation']=='0'){ ?>
                        <td>No</td>
                        <?php } else { ?>
                        <td>Yes</td>
                        <?php }  ?>
                        
                        <?php if($row['finished']=='0'){ ?>
                        <td>No</td>
                        <?php } else { ?>
                        <td>Yes</td>
                        <?php }  ?>
                        
                        
                        
                        <?php if($row['finished']=='1' and $row['paid']==0 ){  ?>
                        <td><a class="btn btn-primary" href="parkingareainfo.php ?id=<?php echo $row['booking_id']; ?>">Bill</a></td> 
                         <?php } else if($row['paid']==1 ) { ?>
                          <td><a class="btn btn-primary disabled" href="parkingareainfo.php?id=<?php echo $row['booking_id']; ?>">Bill</a></td> 
                          <?php }  ?>
                          
                         
                          <td><a href="confirmpayment.php?id=<?php echo $row['booking_id']; ?>">Confirm</a></td>
                          
                          <?php if($row['paid']=='0'){ ?>
                        <td>No</td>
                        <?php } else { ?>
                        <td>Yes</td>
                        <?php }  ?>
                          
                          
                          
                        
                    </tr>
                    

                    <?php }   ?>
                </tbody>
            </table>
            </div>
        </div>
        
        
   </div>  
</body>

<script>
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>
</html>