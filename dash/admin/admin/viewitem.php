<?php include 'header.php'?>

 

                                    <?php
                                    $packed=$_GET['pacid'];

                                    
                                    if($packed)
                                    {
                                    $pquery="update tb_cart_head  set delivery_status='packed' where cart_head_id= '".$packed."'";
                                    mysqli_query($con,$pquery);
                                    }
                                    
                                    $sacked=$_GET['shid'];
                                    if($sacked)
                                    {
                                    $saquery="update tb_cart_head  set delivery_status='Shipped' where cart_head_id= '".$sacked."'";
                                    mysqli_query($con,$saquery);
                                    }
                                    
                                    $dacked=$_GET['deid'];
                                    if($dacked)
                                    {
                                    $dequery="update tb_cart_head  set delivery_status='Delivered' where cart_head_id= '".$dacked."'";
                                    mysqli_query($con,$dequery);
                                    }
                                    
                                    ?>


    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
			
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="feedback.php">SALES</a>
          </div>
		  <div class="header text-center">
          
		  </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons location_world"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
			
          </div>
        </div>
		
      </nav>
    
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
<div class="header text-center">
          <h2 class="title">SALES</h2>
</div>
              
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary"> 
                    <th>
                        Image
                      </th>
                      <th>
                        Product Name
                      </th>
                      <th>
                         Cost
                      </th>
                      <th>
                      Describtion
                      </th>
                      <th>
                      Features
                       
                      </th>
                      <th>
                      Total
                       
                      </th>


                      <th>
                      action
                       
                      </th>
					 
                    </thead>
                   <tbody>
                    
                   <?php
                             $sel="select * from tb_cart_head h inner join  tbl_cart_details d on h.cart_head_id=d.cart_head_id where h.cart_head_status='paid'";
                            $row=mysqli_query($con,$sel);
                            
                            while($data=mysqli_fetch_array($row))
                            {
                                $amt=$amt+$data['product_unit_pice'];

                          if($data['product_type']=='fruit')
                                {
                            $sel2="select * from tb_fruits where fruit_id='".$data['product_id']."'";
                            $row2=mysqli_query($con,$sel2);
                           $data2=mysqli_fetch_array($row2);
               
                            ?>

                                <tr>
                                  
                                    <td class="name-pr">
                                    <a href="fruits.php">
                                    <img src="../../admin/products/<?php echo $data['image'];?>" style="min-width:100px;min-height:100px; max-width:150px;max-height:250px>" >
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
                                        <p><?php echo $data2['fruitfea']; ?></p>
                                    </td>
                                    <td class="total-pr">
                                        <p><?php echo $data['cart_head_total']; ?></p>
                                    </td>
                                     <td class="total-pr">
                                        <p><?php echo $data['delivery_status']; ?></p>
                                    </td>
                                    <td class="total-pr">
                                        <p><a href="viewitem.php?pacid=<?php echo $data['cart_head_id'];?>">Packed</a></p>
                                        <p><a href="viewitem.php?shid=<?php echo $data['cart_head_id'];?>">Shipped</a></p>
                                        <p><a href="viewitem.php?deid=<?php echo $data['cart_head_id'];?>">Delivered</a></p>
                                    </td>
                                    <?php
                                    $packed=$_GET['pacid'];
                                    if($packed)
                                    {
                                   $pquery="update tb_cart_head  set delivery_status='packed' where cart_head_id= '".$data['cart_head_id']."'";
                                    mysqli_query($con,$pquery);
                                    }
                                    
                                    $sacked=$_GET['shid'];
                                    if($sacked)
                                    {
                                  $saquery="update tb_cart_head  set delivery_status='Shipped' where cart_head_id= '".$data['cart_head_id']."'";
                                    mysqli_query($con,$saquery);
                                    }
                                    
                                    $dacked=$_GET['deid'];
                                    if($dacked)
                                    {
                                  $dequery="update tb_cart_head  set delivery_status='Delivered' where cart_head_id= '".$data['cart_head_id']."'";
                                    mysqli_query($con,$dequery);
                                    }
                                    
?>
                                  
                                <!-- Delete -->
                                   
                                </tr>
                                <?php
                             }
                             else
                             {
                            $sel4="select * from tbl_herbs where herb_id='".$data['product_id']."'";
                            $row4=mysqli_query($con,$sel4);
                           $data4=mysqli_fetch_array($row4);
                            
                            ?>

                                <tr>
                                  
                                    <td class="name-pr">
                                    <a href="herbs.php">
                                    <img src="../../admin/products/<?php echo $data4['image'];?>" style="min-width:100px;min-height:100px; max-width:150px;max-height:250px>" >
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
                                        <p><?php echo $data4['feature']; ?></p>
                                    </td>
                                    <td class="total-pr">
                                        <p><?php echo $data['cart_head_total']; ?></p>
                                    </td>
                                     <td class="total-pr">
                                        <p><?php echo $data['delivery_status']; ?></p>
                                    </td>
                                    <td class="total-pr">
                                        <p><a href="viewitem.php?pacid=<?php echo $data['cart_head_id'];?>">Packed</a></p>
                                        <p><a href="viewitem.php?shid=<?php echo $data['cart_head_id'];?>">Shipped</a></p>
                                        <p><a href="viewitem.php?deid=<?php echo $data['cart_head_id'];?>">Delivered</a></p>
                                    </td>
                                <!-- Delete -->
                                  
                                    </td>
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
          
      <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="http://presentation.creative-tim.com">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html>