<?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("db_registration",$con);
	session_start();
	ob_start();
?>


 
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Login-Online Fruits & Herbs shopping</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Credit Login / Register Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

<!-- //web font -->
</head>
<body>
<h1>Login / Register</h1>
<div class="main-agileits">
<!--form-stars-here-->
		<div class="form-w3-agile">
			<h2>login</h2>
			     <?php 
	if(isset($_POST['submit']))
	{
		$selA="select * from tbl_login where username='".$_POST['username']."' and password='".$_POST['txtpswd']."'";
		$rowA=mysql_query($selA,$con);
		
		$dataA=mysql_fetch_array($rowA);
	echo $selA;
		
	
		if($dataA['role']=='admin')
		{
			
			header("Location:dash/admin/admin/dashboard.php");
		}
		else if($dataA['role']=='user')
		{
			$selb="select * from tb_user where login_id='".$dataA['login_id']."'";
		$rowb=mysql_query($selb,$con);
		
		$datab=mysql_fetch_array($rowb);
			
			$_SESSION['sid']=$datab['user_id'];
			//echo "<script>alert('".$datab['user_id']."')</script>";
			header("Location:dash/user/index.php");
    }
		else{
			echo "<script>alert('Invalid Username or Password')</script>";
		}
	}      
                            
			
										
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
			
			
			
			
			
			<form method="post">
				<div class="form-sub-w3">
					<input type="text" name="username" placeholder="username " required="" />
				<div class="icon-w3">
					<i class="fa fa-user" aria-hidden="true"></i>
				</div>
				</div>
				<div class="form-sub-w3">
					<input type="password" name="txtpswd" placeholder="Password" required="" />
				<div class="icon-w3">
					<i class="fa fa-unlock-alt" aria-hidden="true"></i>
				</div>
				</div>
				<p class="p-bottom-w3ls">Are you new?<a class="w3_play_icon1" href="#small-dialog1">  Register here</a></p>
				
				<div class="submit-w3l">
					<input type="submit" name="submit"value="Login">
				</div>
			</form>
		</div>
<!--//form-ends-here-->
</div>
<div id="small-dialog1" class="mfp-hide">
					<div class="contact-form1">
										<div class="contact-w3-agileits">
										<h3>Register</h3>
										
											<form  method="POST">
												<div class="form-sub-w3ls">
													<input placeholder="Your Name"  type="text" required=""name="yname">
													<div class="icon-agile">
														<i class="fa fa-user" aria-hidden="true"></i>
													</div>
												</div>
												<div class="form-sub-w3ls">
													<input placeholder="Mobile no"  type="text" required pattern="[789][0-9]{9}"name="num"MAXLENGTH="10">
													<div class="icon-agile">
														<i class="fa fa-user" aria-hidden="true"></i>
													</div>
												</div>
												
												
													<div class="form-sub-w3ls">
													<input placeholder="Email" class="mail" type="email" required="" name="email">
													<div class="icon-agile">
														<i class="fa fa-envelope-o" aria-hidden="true"></i>
													</div>
												</div>
												<div class="form-sub-w3ls">
													<input placeholder="username"  type="text" required=""name="uname">
													<div class="icon-agile">
														<i class="fa fa-user" aria-hidden="true"></i>
													</div>
												</div>
												<div class="form-sub-w3ls">
													<input placeholder="Password"  type="password" required=""name="pass">
													<div class="icon-agile">
														<i class="fa fa-unlock-alt" aria-hidden="true"></i>
													</div>
												</div>
											</div>
											<div class="login-check">
								 			 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><p>I Accept Terms & Conditions</p></label>
											</div>
										<div class="submit-w3l">
											<input type="submit" name="btnsub" value="Register">
										</div>
										</form>
					</div>	
				</div>
			
<!-- copyright -->
	<div class="copyright w3-agile">
		<p> © 2020 Login / Register . All rights reserved | Design by <a href="#" target="_blank">tux</a></p>
	</div>
	<!-- //copyright --> 
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- pop-up-box -->  
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!--//pop-up-box -->
	<script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
	</script>
</body>
</html>