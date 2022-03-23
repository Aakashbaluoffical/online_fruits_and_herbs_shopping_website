<?php ob_start();include'header.php'?>
<?php
	$con=mysql_connect("localhost","root","");
  mysql_select_db("db_registration",$con);
  $editid=$_GET['edi'];
  if($editid)
         {
         $ediquery="select * from tbl_herbs where herb_id='".$editid."'";
           $editrow=mysql_query($ediquery,$con);
           $editdata=mysql_fetch_array($editrow);
              
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
            <a class="navbar-brand" href="#pablo">Add</a>
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
                    <span class="d-lg-none d-md-block">Status</span>
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
      <div class="panel-header">
        <div class="header text-center">
          <h2 class="title">HERBS</h2>
          <p class="category">Handcrafted by our friend <a target="_blank" href="https://github.com/mouse0270">Robert McIntosh</a>. Please checkout the <a href="http://bootstrap-notify.remabledesigns.com/" target="_blank">full documentation.</a></p>
        </div>
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-6">
             <div class="card">
               <div class="card-header">
			   <?php
          if(isset($_POST['btnsave'])){
            $name=$_POST['name'];
            $desc=$_POST['desc'];
            $fea=$_POST['fea'];
            $cost=$_POST['cost'];
            $img=$_FILES['file']['name'];
            $temp=$_FILES['file']['tmp_name'];
            $ext=pathinfo($img,PATHINFO_EXTENSION);
            $ra=rand(10000,10000000);
            $img1=basename($img,$ext);
            $image=$dd.$ra.".".$ext;
            move_uploaded_file($temp,"../products/".$image);
            if($editid==""){
            $ins="insert into tbl_herbs(name,description,feature,cost,image) values('".$name."','".$desc."','".$fea."','".$cost."','".$image."')";
            //echo $ins;
            if(mysql_query($ins,$con))
              {
                ?>
                <script> alert("inserted successfully"); </script>
                <?php
                }
                else
                {
                  ?>
                  <script> alert("not inserted"); </script>
                  <?php        
                    
           
               }
              }else{
               $upt="update tbl_herbs set name='".$name."',description='".$desc."',feature='".$fea."',cost='".$cost."',image='".$image."' where herb_id='".$editid."'";
               if(mysql_query($upt,$con))
                {
                  ?>
                  <script> alert("updated successfully"); 
                  window.location.href="viewtest.php";</script>
                  <?php
                  }
                  else
                  {
                    ?>
                    <script> alert("not updated"); </script>
                    <?php        
                      
             
                 }
               }
            }
              ?>
              

         
			   
                 <form method="POST"  enctype="multipart/form-data">
                 <div class="custom-file">
                                                <input type="file" name="file"class="custom-file-input">
                                                <label class="custom-file-label" for="inputGroupFile02"
                                                    aria-describedby="inputGroupFileAddon02">Choose file</label>
                                                   
                                             

              <div class="form-group">
                <input type="text" name="name" class="form-name" placeholder="Herb Name"required=""value="<?php echo $editdata['name'];?>"ues>
              </div>
              <div class="form-group">
                <textarea name="desc"  cols="30" rows="7" class="form-desc" placeholder="Herb  Description"required=""><?php echo $editdata['description'];?></textarea>
              </div>
              <div class="form-group">
              <textarea name="fea"  class="form-fea" placeholder="Diseases"required=""><?php echo $editdata['feature'];?></textarea>
              </div>
              <div class="form-group">
                <input type="number" name="cost" cols="5"rows="2"class="form-cost" placeholder="Cost"required=""value="<?php echo $editdata['cost'];?>">
              </div>
              <div class="form-group">
                <input type="submit" value="Add" class="form-add" name="btnsave">
              </div>
            </form>
				
        
               </div>
              </div>
            </div>
          
           <div class="col-md-6">
			  <div class="left"><a href="fruits.php">
			   <div>
			    <img class="img" src="../assets/img/orange.jpg" alt="...">
				 
			   </div>
			  </div>
			 </div>
			 
                
          </div>
          
              </div>
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
  <!-- loader -->
  <div id="ftco-loader"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

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