<?php 
include'header.php'; 

?>
<?php
$con=mysql_connect("localhost","root","","db_registration");
mysql_select_db("db_registration",$con)
?>


            </div>
            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    <ul class="cart-list">
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-01.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Delica omtantur </a></h6>
                            <p>1x - <span class="price">$80.00</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-02.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Omnes ocurreret</a></h6>
                            <p>1x - <span class="price">$60.00</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-03.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Agam facilisis</a></h6>
                            <p>1x - <span class="price">$40.00</span></p>
                        </li>
                        <li class="total">
                            <a href="#" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                            <span class="float-right"><strong>Total</strong>: $180.00</span>
                        </li>
                    </ul>
                </li>
            </div>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>ADDRESS</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="shop.php">Shop</a></li>
                        <li class="breadcrumb-item active">Address </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <div class="row new-account-login">
               
               
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="checkout-address">
                        <div class="title-left">
                            <h3>Billing address</h3>
                        </div>
                        <?php
                        if(isset($_POST['btnsub']))
                        {
                            $fname=$_POST['fname'];
                            $lname=$_POST['lname'];
                            $uname=$_POST['uname'];
                            $email=$_POST['email'];
                            $addres=$_POST['addres'];
                            $address=$_POST['address'];
                            $country=$_POST['country'];
                            $state=$_POST['state'];
							 $zip=$_POST['zip'];

                           


                            $ins="insert into tb_placeorder(fname,lname,username,email,address,address2,country,state,zip)values('".$fname."','".$lname."','".$uname."','".$email."','".$addres."','".$address."','".$country."','".$state."','".$zip."')";
                           
                            if(mysql_query($ins,$con))
                            {
                                ?><script>alert("Done")</script>
                                <?php
                            }
                            else
                            {
                               ?> <script>alert("something want wrong")</script>
                               <?php
                            }
                            }
                        
                        ?>
                        <script>
    function getResult(s)
    {
        $.ajax({
            url: "AjaxResult.php",
            data: {sem_id: s},
            success: function (result)
            {
                $("#list").html(result);

            }

        });
    }
</script>








                        <form class="needs-validation"  method="POST">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">First name *</label>
                                    <input type="text" class="form-control"  placeholder="" name="fname" required>
                                    <div class="invalid-feedback"> Valid first name is required. </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Last name *</label>
                                    <input type="text" class="form-control"  placeholder="" name="lname" required>
                                    <div class="invalid-feedback"> Valid last name is required. </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="username">Username *</label>
                                <div class="input-group">
                                    <input type="text" class="form-control"  placeholder="" name="uname" required>
                                    <div class="invalid-feedback" style="width: 100%;"> Your username is required. </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email">Email Address *</label>
                                <input type="email" class="form-control"required  placeholder=""name="email">
                                <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                            </div>
                            <div class="mb-3">
                                <label for="address">Address *</label>
                                <input type="text" class="form-control" placeholder="" required name="addres">
                                <div class="invalid-feedback"> Please enter your shipping address. </div>
                            </div>
                            <div class="mb-3">
                                <label for="address2">Address 2 *</label>
                                <input type="text" class="form-control" placeholder=""required name="address"> </div>
                            <div class="row">
                                <div class="col-md-5 mb-3">
                                    <label for="country">Country *</label>
                                    <select class="wide w-100" name="country" >
									<option value="Choose..." data-display="Select">Choose...</option>
									<option value="United States">United States</option>
                                    <option value="United States">UAE</option>
                                    \<option value="United States">India</option>
                                    <option value="United States">UK</option>
								</select>
                                    <div class="invalid-feedback"> Please select a valid country. </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="state">State *</label>
                                    <select class="wide w-100" name="state">
									<option data-display="Select">Choose...</option>
                                    <option>California</option>
                                    <option>NewYork</option>
                                    <option>Dubai</option>
                                    <option>Sharja</option>
                                    <option>Kerala</option>
                                    <option>Tamilnadu</option>
                                    <option>Karnadaka</option>
                                    <option>Goa</option>
                                    <option>Maharastra</option>
                                    <option>England</option>
                                    <option>Scotland</option>
                                   
								</select>
                                    <div class="invalid-feedback"> Please provide a valid state. </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="zip">Zip *</label>
                                    <input type="text" class="form-control"  placeholder="" name="zip"required>
                                    <div class="invalid-feedback"> Zip code required. </div>
									 
                                </div>
							 <a href="ordersummary.php"> <input type="submit" class="ml-auto btn hvr-hover"name="btnsub"value="continue"></a>
                               
							</div>
							</div>
							</div>
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="order-box">
                             <div class="title-left">
                               <h1>address</h1>
                                 
                             </div>
                            <div> 
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
							
                        
    <!-- End Cart -->

   
<?php
include'footer.php';
?>