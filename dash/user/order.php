<?php 
include'header.php'; 

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
                    <h2>MY ORDERS</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="all.php">Shop</a></li>
                        <li class="breadcrumb-item active">Orders</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->
<?php
$sel="select * from tb_cart_head h inner join  tbl_cart_details d on h.cart_head_id=d.cart_head_id where h.user_id='".$_session['sid']."'";
 $row=mysqli_query($con,$sel);
 $data=mysqli_fetch_array($row);
?>
   <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Images</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                   <?php
                             $sel="select * from tb_cart_head h inner join  tbl_cart_details d on h.cart_head_id=d.cart_head_id where h.cart_head_status='paid' ";
                            $row=mysqli_query($con,$sel);
                            while($data=mysqli_fetch_array($row))
                            {
                                $amt=$amt+$data['product_unit_pice'];

                          if($data['product_type']=='fruit')
                                {
                            $sel2="select * from tb_cart_head ch inner join  tbl_cart_details cd on ch.cart_head_id=cd.cart_head_id inner join tb_fruits f on cd.image=f.image where f.fruit_id='".$data['product_id']."'";
                            $row2=mysqli_query($con,$sel2);
                           $data2=mysqli_fetch_array($row2);
               
                            ?>

                                <tr>
                                  
                                    <td class="name-pr">
                                    <a href="fruits.php">
                                    <img src="../admin/products/<?php echo $data['image'];?>" style="min-width:100px;min-height:100px; max-width:150px;max-height:250px>" >
								     </a>
                                    </td>
                                    <td class="name-pr">
									<?php echo $data2['fruitname']; ?>
                                    </td>
                                    <td class="price-pr">
                                        <p><?php echo $data2['fruitcost']; ?></p>
                                    </td>
                                    
                                    <td class="total-pr">
                                        <p><?php echo $data2['fruitdes']; ?></p>
                                    </td>
                                    
                                     <td class="total-pr">
                                        <p><?php echo $data['delivery_status']; ?></p>
                                    </td>
                                   
                                <!-- Delete -->
                                    
                                </tr>
                                <?php
                             }
                             else
                             {
                                $sel4="select * from tb_cart_head ch inner join  tbl_cart_details cd on ch.cart_head_id=cd.cart_head_id inner join tbl_herbs f on cd.image=f.image where herb_id='".$data['product_id']."'";
                            $row4=mysqli_query($con,$sel4);
                           $data4=mysqli_fetch_array($row4);
                            
                            ?>

                                <tr>
                                  
                                    <td class="name-pr">
                                    <a href="herbs.php">
                                    <img src="../admin/products/<?php echo $data4['image'];?>" style="min-width:100px;min-height:100px; max-width:150px;max-height:250px>" >
								     </a>
                                    </td>
                                    <td class="name-pr">
									<?php echo $data4['name']; ?>
                                    </td>
                                    <td class="price-pr">
                                        <p><?php echo $data4['cost']; ?></p>
                                    </td>
                                    
                                    <td class="total-pr">
                                        <p><?php echo $data4['description']; ?></p>
                                    </td>
                                
                                    
                                     <td class="total-pr">
                                        <p><?php echo $data['delivery_status']; ?></p>
                                    </td>
                                   
                                <!-- Delete -->
                                    
                                </tr>
                                <?php
                            }
                        }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

          
        </div>
    </div>
    <!-- End Cart -->

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