
<?php
session_start();
$con=mysqli_connect("localhost","root","","project");
#if($con){echo "yes";}

if(isset($_POST['login'])){
	#print_r($_POST);
	$user=$_POST['user'];
	$pass=$_POST['password'];
	
	$us="select *from user where username='$user'";
	$usr=mysqli_query($con,$us);
	//print_r($usr);
	if(mysqli_num_rows($usr)>0){
		
	$lp="select *from user where password='$pass'";	
	$lpr=mysqli_query($con,$lp);
	#print_r($lpr);
	
	if(mysqli_num_rows($lpr)>0){
		
		
		$user=$_SESSION['user'];
		
		header("location:dash.php");
	}
	else{$pr="Password does not match";}
	
		
	}
	else{ $lm="Username does not match";}
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/login.css">

    <title>login</title>
  </head>
  <body>
  
	<div class="container"><br><br>
		
		
			
			<h2 class="text-danger text-center">Welcome to School Management system</h2><br>
			<h2 class="text-danger text-center">Admin Login</h2><br><br>
		
		
		<div class="row">
			<div class="col-md-3 ">	
			
			 <form method="post" action="login.php" class="">
			
				
					<input type="text" placeholder="User Name" name="user" class="form-control"><br>
					<label class="text-danger"><?php if(isset($lm)){ echo $lm;}?></label>
					
					<input type="text" placeholder="password" name="password" class="form-control"><br>
					<label class="text-danger"><?php if(isset($pr)){ echo $pr;}?></label>
					
					<input type="submit" value="Login" name="login" class="btn btn-primary">
			</form>
			
			
			</div>
		</div>
    </div>
   
  </body>
</html>