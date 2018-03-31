<?php 
	session_start();
	if (isset($_SESSION['email']))
	header('location: products.php');
	error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
	    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="mobiles, watchs shopping, handsets, smartwatches">
        <meta name="Author" content="Vishal Kumar">
        <title>Welcome | BookMyKart</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
	
    </head>
    <body style="padding-top: 50px;">
       <?php
        include 'includes/header.php';
        ?>
            <div class="container-fluid">
                <div class="row" style="margin-top: 80px;">
				   <div class="container text-justify">
                     <div class="col-lg-10">
                        <h3 style="letter-spacing: 3px;">LIVE SUPPORT</h3>
                        <h4 style="color: grey;">24 Hours | 7 days a weeks | 365 days a year Live Technical Support</h4>
				      </div>
                      <div class="col-lg-2">
					     <div class="content-img">
                            <center><img src="img/contact_us2.png" alt="contact"></center>
						 </div>
                      </div>
                   </div>
                    <div class="row">
                       <div class="container">
					      <div class="col-lg-8" style= "margin-bottom: 10px;">
                            <h3 style="letter-spacing: 3px;">CONTACT US</h3>
                            <form role="form" action="contact_script.php" method="POST">
                            <div class="form-group">
                              <label for="name">Name</label>
                              <input type="name" class="form-control" name="name" required = "true">
                            </div>
                            <div class="form-group">
                               <label for="email">Email</label>
                               <input type="email" class="form-control" name="email" required = "true">
							   <?php echo $_GET['m1'];?>
                            </div>
                            <div class="form-group">
                              <label for="message">Message</label>
                              <textarea class="form-control" row="5" name="message" required = "true"></textarea>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button><br><br>
                            </form>
                           </div>
                           <div class="col-lg-4">
                              <h3 style="letter-spacing: 3px;">
                                  CONTACT INFORMATION
                              </h3>
                              <p style="font-weight: 700">Birla Institute of Technology,Mesra<br>Ranchi,Jharkhand<br>India<br><br>Phone: (0651)2255909<br><br>Email: bookmykart@gmail.com</p>
                           </div>
                       </div>
                    </div>
                </div>
			</div>
			
         <?php
        include 'includes/footer.php';
        ?>
		<?php include 'modal.php' ?>
    </body>
</html>
