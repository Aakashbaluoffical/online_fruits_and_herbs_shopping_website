<?php ob_start(); include 'header.php'?>

<?php
session_start();
    $con=mysqli_connect("localhost","root","","db_registration");
   // echo "<script>alert('".$_SESSION['sid']."');</script>";
    if($_GET['hid']){

        if($_SESSION['sid']==""){
            header("Location:../../index.php");
        }else{
            $chead_id="";
            $cdetail_id="";
            $self="select * from tbl_herbs where herb_id='".$_GET['hid']."'";
            $rowf= mysqli_query($con,$self);
            $dataf=mysqli_fetch_array($rowf); 

            $sel="select * from tb_cart_head where user_id='".$_SESSION['sid']."' and cart_head_date=CURDATE() and cart_head_status='active'";
            $row=mysqli_query($con,$sel);
            $num=mysqli_num_rows($row);
            if($num > 0){
                $data=mysqli_fetch_array($row);
                $chead_id=$data['cart_head_id'];
            }else{
                $ins="insert into tb_cart_head(user_id,cart_head_date,cart_head_status,cart_head_total) values('".$_SESSION['sid']."',CURDATE(),'active','0')";
                mysqli_query($con,$ins);
                $sel="select * from tb_cart_head where user_id='".$_SESSION['sid']."' and cart_head_date=CURDATE() and cart_head_status='active' order by desc limit 1";
                $row=mysqli_query($con,$sel);
                $num=mysqli_num_rows($row);
                if($num > 0){
                    $data=mysqli_fetch_array($row);
                    $chead_id=$data['cart_head_id'];
                }
            }

            $sel2="select * from tbl_cart_details where cart_head_id='".$chead_id."' and product_id='".$_GET['hid']."' and product_type='herbs'";
            $row2=mysqli_query($con,$sel2);
            $num2=mysqli_num_rows($row2);
            if($num2 > 0){
                $data2=mysqli_fetch_array($row2);
                $cdetail_id=$data2['cart_detail_id'];
            }else{
                $ins="insert into tbl_cart_details(cart_head_id,product_id,product_type,product_qty,product_unit_pice,image) values('".$chead_id."','".$_GET['hid']."','herbs','1','".$dataf['cost']."','".$dataf['image']."')";
                mysqli_query($con,$ins);
            }
            header("Location:cart.php?chead_id=".$chead_id);
        }
    }
	
?>



	 <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Herbs </h1>
                        <p>Buy some</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                           
                        </div>
                    </div>
                </div>
            </div>
	
            <div class="row special-list">
               <?php
			   $sel="select * from tbl_herbs ";
			   $row= mysqli_query($con,$sel);
			   while($data=mysqli_fetch_array($row))
			   {
			   
			   ?>

               

                <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div>
                            <img src="../admin/products/<?php echo $data['image'];?>" style="min-width:250px;min-height:300px; max-width:250px;max-height:300px>" >
                            <div class="mask-icon">
                                <ul>
                                  
                                </ul>
                                <a class="cart" href="herbs.php?hid=<?php echo $data['herb_id']; ?>" >Add to Cart<i name="cartid"></i></a>
                             
                            </div>
                        </div>
                        <div class="why-text">
			            <h4><?php echo $data['name']; ?></h4>
                            <h5>&#8377;&nbsp<?php echo $data['cost']; ?></h5>
                           
                        </div>
                    </div>
                </div>
				<?php
			   }
				?>

               
            </div>
        </div>
    </div>
    <!-- End Products  -->
	 <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Business Time</h3>
							<ul class="list-time">
								<li>Monday - Friday: 08.00am to 05.00pm</li> <li>Saturday: 10.00am to 08.00pm</li> <li>Sunday: <span>Closed</span></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Newsletter</h3>
							<form class="newsletter-box">
								<div class="form-group">
									<input class="" type="email" name="Email" placeholder="Email Address*" />
									<i class="fa fa-envelope"></i>
								</div>
								<button class="btn hvr-hover" type="submit">Submit</button>
							</form>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Social Media</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							<ul>
                                <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                            </ul>
						</div>
					</div>
				</div>
				<hr>
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>About Fruits & Herbs</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> 
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p> 							
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Customer Service</a></li>
                                <li><a href="#">Our Sitemap</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Delivery Information</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Address: Michael I. Days 3756 <br>Preston Street Wichita,<br> KS 67213 </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+1-888705770">+1-888 705 770</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">contactinfo@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2020 <a href="#">ThewayShop</a> Design By :
            <a href="https://html.design/">php design</a></p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>