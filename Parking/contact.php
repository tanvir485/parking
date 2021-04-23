

<!DOCTYPE html>
<body lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/ee3c098242.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    
    <title>Contact</title>
    <!-- Bootstrap stylesheet  -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- External Fontawesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Our Own stylesheet  -->
    <link rel="stylesheet" href="css/all.css">
  </head>
<body data-spy="scroll" data-target="#navId" style="background-color:;">
    <div class="navabout">
    <?php include 'navbar.php';?>

        </div>
  

      <div class="container" style="height:800px;">
        
            <div class="row">

                <div class="col-lg-8 col-lg-offset-2">
               
                    

                    <h2 class="lead" style="margin:138px 0px 48px 2px; font-size:50px;">CONTACT US</h2>


                    <form action="contact.php" id="contact-form" method="post" role="form">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">Firstname *</label>
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Lastname *</label>
                                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">Email *</label>
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">Phone *</label>
                                        <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_message">Message *</label>
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" name="ok" class="btn btn-success btn-send" value="Send message">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                   
                                </div>
                            </div>
                        </div>

                    </form>
           

                </div>

            </div> 

        </div> 

    
        
  <?php

$fname="";
$lname="";
$email="";
$phone="";
$message="";


$db = mysqli_connect('localhost','root','','vehicle management');

if(isset($_POST['ok'])){

$fname = mysqli_real_escape_string($db,$_POST['name']);
$lname= mysqli_real_escape_string($db,$_POST['surname']);
$email= mysqli_real_escape_string($db,$_POST['email']);
$phone= mysqli_real_escape_string($db,$_POST['phone']);
$message= mysqli_real_escape_string($db,$_POST['message']);

if(empty($name)){ echo "username is required";}

$f ="INSERT INTO contact (firstname,lastname, email,phone,message ) VALUES ('$fname','$lname','$email','$phone','$message')";
mysqli_query($db,$f);
}


?>


            

        </body>
        </html>
        