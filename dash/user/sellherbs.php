<?php 
include'header.php'; 

?>
<?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("db_registration",$con);

?>
   

<head> <link href="css/sell.css" rel="stylesheet"type="text/css">
</head>


 
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
                    <h2>Sell Any Item</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active"> Sell </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->
               <div class="container1">
               <div class="left">
               <div class="left-left">
               <div class="button">
                   <h2 class="h2">
                       SELL ANY FRUITS OR HERBS </h2>
               <button class="btnfrt"><a href="sellfruits.php"><span>Fruits</span></a></button><br>
               <button class="btnhrb"><a href="sellherbs.php"><span>Herbs</span></a></button>
               </div>
              </div>
               </div>
               <div class="right">
                  
                   <div class="right-right">
                       <h2 class="h3">HERBS</h2>
                       <?php
          if(isset($_POST['btnsave'])){
            $name=$_POST['name'];
            $desc=$_POST['desc'];
            $fea=$_POST['fea'];
            $cost=$_POST['cost'];
            $ins="insert into tbl_herbs(name,describtion,feature,cost) values('".$name."','".$desc."','".$fea."','".$cost."')";
            //echo $ins;
            if(mysql_query($ins,$con))
            {
              ?>
              <script> alert("DONE"); </script>
              <?php
              }
              else
              {
              ?>
              <script> alert("something went wrong"); </script>
              <?php
              }
             }
          ?>

                       <form method="POST">
              <div class="form-group">
                <input type="text" name="name" class="form-name" placeholder="Herb Name">
              </div>
              <div class="form-group">
                <textarea name="desc"  cols="30" rows="7" class="form-desc" placeholder="Herb Description"></textarea>
              </div>
              <div class="form-group">
              <textarea name="fea"  cols="30" rows="7" class="form-fea" placeholder="Diseases"></textarea>
              </div>
              <div class="form-group">
                <input type="text" name="cost" cols="5"rows="2"class="form-cost" placeholder="Cost">
              </div>
              <div class="form-group">
                <input type="submit" value="SELL" class="form-add" name="btnsave">
              </div>
            </form>
</div>
                   
                   

               </div>
               </div>

      <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-01.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-02.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-03.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-04.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-06.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-07.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-08.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-09.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Instagram Feed  -->

<?php
include'footer.php';
?>