<?php 
ob_start();
include 'header.php'?>
<?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("db_registration",$con);
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
            <a class="navbar-brand" href="viewtest.php">view test</a>
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
          <h2 class="title">viewtest</h2>
</div>
              
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                    <th>
                        Id
                      </th>
                      <th>
                        Fruit Name
                      </th>
                      <th>
                        Description
                      </th>
                      <th>
                        Feature
                      </th>
                      <th>
                        Cost
                      </th>
                      <th>
                        Image
                      </th>
                      <th>
                        Action
                      </th>
                      <th>
                        <a href="addd.php">Add</a>
                      </th>
                    </thead>
                   <tbody>
           <?php
          
           $deleteid=$_GET['did'];
           if($deleteid)
           {
          
         
         $delquery="delete from tb_fruits where fruit_id='".$deleteid."'";
         //echo $delquery;
         mysql_query($delquery,$con);
         header("Location:viewtest.php");
           }
                  
				   
            $selQ1="select * from tb_fruits";
            $row1=mysql_query($selQ1,$con);
            while($data1=mysql_fetch_array($row1)){
				   ?>
			   <tr>
			   <td height="38"><?php echo $i;?></td>
			   <td height="38"><?php echo $data1['fruitname'];?></td>
			   <td height="38"><?php echo $data1['fruitdes'];?></td>
			   <td height="38"><?php echo $data1['fruitfea'];?></td>
         <td height="38"><?php echo $data1['fruitcost'];?></td>
         <td height="38">
          <img src="../products/<?php echo $data1['image'];?>" width="100" height="100">
        </td>
			    <td><a href="viewtest.php?did=<?php echo $data1['fruit_id']; ?>" >Delete </a> </td>
          <td><a href="fruits.php?edi=<?php echo $data1['fruit_id']; ?>">edit</a></td>
        
        </tr>
				<?php
            }
				   ?>
                  				
				   </tbody>
                
                  </table>
                </div>
              </div>
            </div>
               <!-- End Navbar -->
   
        <div class="row">
          <div class="col-md-12">
            <div class="card"> 
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                    <th>
                        Id
                      </th>
                      <th>
                        Herb Name
                      </th>
                      <th>
                        Description
                      </th>
                      <th>
                        Feature
                      </th>
                      <th>
                        Cost
                      </th>
                      <th>
                        Image
                      </th>
                      <th>
                        Action
                      </th>
                      <th>
                        <a href="addd.php">Add</a>
                      </th>
                    </thead>
					<tbody>
          <?php
          
          $deleteid=$_GET['did'];
          if($deleteid)
          {
         
        
        $delquery="delete from tbl_herbs where herb_id='".$deleteid."'";
        //echo $delquery;
        mysql_query($delquery,$con);
        header("Location:viewtest.php");
          }
                 
          
           $selQ1="select * from tbl_herbs";
           $row1=mysql_query($selQ1,$con);
           while($data1=mysql_fetch_array($row1)){
          ?>
        <tr>
        <td height="38"><?php echo $i;?></td>
        <td height="38"><?php echo $data1['name'];?></td>
        <td height="38"><?php echo $data1['description'];?></td>
        <td height="38"><?php echo $data1['feature'];?></td>
        <td height="38"><?php echo $data1['cost'];?></td>
        <td height="38">
          <img src="../products/<?php echo $data1['image'];?>" width="100" height="100">
        </td>
         <td><a href="viewtest.php?did=<?php echo $data1['herb_id']; ?>" >Delete </a> </td>
         <td><a href="herb.php?edi=<?php echo $data1['herb_id']; ?>">edit</a></td>
         
       </tr>
       <?php
           }
          ?>
					
			
					
					</tbody>
                   
                
                  </table>
                </div>
              </div>
            </div>
			 <!-- End Navbar -->


      
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