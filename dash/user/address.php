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
                    <h2>PROFILE</h2>
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
                            $yname=$_POST['yname'];
                            $num=$_POST['num'];
                            $email=$_POST['email'];
                            $uname=$_POST['uname'];
                            $pass=$_POST['pass'];
                          
                            
                              $insertQ="insert into tbl_login(username,password,role) values('".$uname."','".$pass."','user')";
                              //mysql_query($insertQ,$con);
                             
                              if(mysql_query($insertQ,$con))
                              {
                                $select1="SELECT login_id FROM tbl_login
                                ORDER BY login_id  DESC
                                LIMIT 1";
                                //echo $select1;
                                $selectrow1=mysql_query($select1,$con);
                                $selectdata1=mysql_fetch_array($selectrow1);
                                $ins="insert into tb_user(name,number,email,login_id) values('".$yname."','".$num."','".$email."','".$selectdata1['login_id']."')";
                                
                                mysql_query($ins,$con);
                              }
                           
                          }
                        ?>
                       







                        <form class="needs-validation"  method="POST">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName"> Your name *</label>
                                    <input type="text" class="form-control"  placeholder="" name="yname" required>
                                    <div class="invalid-feedback"> Valid first name is required. </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Mobile No:*</label>
                                    <input type="number" class="form-control"  placeholder="" name="num" required>
                                    <div class="invalid-feedback"> Valid last name is required. </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="username">Email*</label>
                                <div class="input-group">
                                    <input type="email" class="form-control"  placeholder="" name="email" required>
                                    <div class="invalid-feedback" style="width: 100%;"> Your username is required. </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email">Username *</label>
                                <input type="text" class="form-control"required  placeholder=""name="uname">
                                <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                            </div>
                            <div class="mb-3">
                                <label for="address">Password*</label>
                                <input type="password" class="form-control" placeholder="" required name="pass">
                                <div class="invalid-feedback"> Please enter your shipping address. </div>
                            </div>
                         
							 <a href="ordersummary.php"> <input type="submit" class="ml-auto btn hvr-hover"name="btnsub"value="submit"></a>
                               
							</div>
							</div>
							</div>
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                        <h2>Address</h2>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="odr-box">
                                <div class="title-left">
                                   
                                </div>
                               </div>
                               
                  <table class="table">
                
                    <thead class=" text-primary">
                     <th>
                       Id
                      </th>
                      <th>
                         Name
                      </th>
                      <th>
                      Mobile No:
                      </th>
                      <th>
                      Email Address
                      </th>
                      <th>
                      Username
                      </th>
                      <th>
                      Password
                      </th>
                      <th>
                      Actions
                      </th>
                    </thead>  
                    
					<tbody>
          <?php
          
          $deleteid=$_GET['did'];
          if($deleteid)
          {
         
        
        $delquery="delete from tb_user where id='".$deleteid."'";
        //echo $delquery;
        mysql_query($delquery,$con);
      
        header("Location:profile.php"); 
          }
          
        $delquery="delete from tbl_login where id='".$deleteid."'";
        //echo $delquery;
        mysql_query($delquery,$con);
      
        header("Location:profile.php"); 
          
           
                 
          
           $selQ1="select * from tb_user";
           $row1=mysql_query($selQ1,$con);
           while($data1=mysql_fetch_array($row1)){
          ?>
        <tr>
        <td height="38"><?php echo $i;?></td>
        <td height="38"><?php echo $data1['name'];?></td>
        <td height="38"><?php echo $data1['number'];?></td>
        <td height="38"><?php echo $data1['email'];?></td>
        
        <td height="38"><?php echo $data1['username'];?></td>
        <td height="38"><?php echo $data1['password'];?></td>
        
        
        
         <td><a href="profile.php?did=<?php echo $data1['user_id'];?>did=<?php echo $data1['login_id']; ?>" >Delete </a> </td>
         <td><a href="profile.php?edi=<?php echo $data1['user_id']; ?>edi=<?php echo $data1['login_id']; ?>">edit</a></td>
         
       </tr>
       <?php
          }
           
          ?> 
             </tbody>
             </table>                       
                            </div>   
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="order-box">
                                <div class="title-left">
                               
                                </div>
                             
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