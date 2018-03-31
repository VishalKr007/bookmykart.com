 <footer class="navbar-inverse">
           <div class="container">
               <div class="row">
			   <?php 
			   if (!isset($_SESSION['email'])){
				   ?>
                   <div class="col-xs-6 col-md-4">
                       <h4>Information</h4>
                       <a href="about.php">About Us</a><br>
                       <a href="contact.php">Contact Us</a>
                   </div>
                   <div class="col-xs-6 col-md-4">
                      <h4>My Account</h4>
                      <a href="#myModal" data-toggle="modal">Login</a><br>
                      <a href="signup.php">Sign Up</a>
                   </div>
                   <div class="col-xs-6 col-md-4">
                        <h4>Contact</h4>
                        <p>Birla Institute Of Technology, Mesra, Ranchi</p>
                         <p>+919000900009</p>
                   </div>
				   <?php
					}else{
					 ?>
					 <div class="col-xs-10 col-md-12">
                       <center><p>&copy; 2015 BookMyKart.com</p></center>
                     </div>
				   <!--<div class="col-xs-6 col-md-4">
                        <h4>Contact</h4>
                        <p>Birla Institute Of Technology, Mesra, Ranchi</p>
                         <p>+919000900009</p>
                   </div>-->
				    <?php
					}
					?>
               </div>
           </div>
 </footer>