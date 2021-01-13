

<?php 
$con=mysqli_connect("localhost","root","","project");
#if($con){echo "yes";}

if(isset($_POST['submit'])){
	#print_r($_POST);
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$cpass=$_POST['cpass'];
	$image=$_FILES['image']['name'];
	
	#echo "<pre>";
	#print_r($_FILES);
	#echo $name;
	
	$ex=explode('.',$image);
	#print_r($ex);
	
	$end=end($ex);
	
	$dat=date("y-m-d-H-I-S");
	
	$iname="image/"."masud".$dat.".".$end;
	#echo $iname;
	
	
	
	$error=array();
	
	if(empty($name)){
		
		$error['name']="This field is required";
		}
		
		if(empty($email)){
		
		$error['email']="This field is required";
		}
		
		if(empty($user)){
		
		$error['user']="This field is required";
		}
		
		if(empty($pass)){
		
		$error['pass']="This field is required";
		}
		if(empty($cpass)){
		
		$error['cpass']="This field is required";
		}
		
		if(count($error)==0){
			
			$em="SELECT * FROM user WHERE email='$email' ";
			$emc=mysqli_query($con,$em);
			
			#print_r($emc);
			if(mysqli_num_rows($emc)==0){
				
				
				$u="SELECT * FROM user WHERE username='$user'";
				
				$uc=mysqli_query($con,$u);
				
				print_r($uc);
				
				if(mysqli_num_rows($uc)==0){
					
					if($pass==$cpass){
						
						move_uploaded_file($_FILES['image']['tmp_name'],$iname);
						
						$in="insert into user (name,email,username,password,photo)
	                    values('$name','$email','$user','$pass','$image')";
					
					$inc=mysqli_query($con,$in);
					
					if($inc){
						
						$su="You have successfully registered";
					}

					
					}
					
					//pass check
					else{
						$pa="Password does not match";
					}
				}
				
				//user check
				else{
					$use="This user name is already used";
				}
				
			}
			
			//email check
			
			else{
				$ec="This email is already in use";
			}
		}
		
		
}

?>





<!DOCTYPE HTML>
<html>

<head>

	<title>form</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/form.css">

</head>

<body><br>
	
	<div class="container">
		<h2 class="text-primary text-center">User Registation Form</h2><br>
			<div class="row">
			 <div class="col-sm-12">
			 
		
			  <form method="post" action="" enctype="multipart/form-data">
			  
			  
			  
			  
			
			   <div class="form-inline">
			      <label class="control-label col-sm-1">Name</label>
			      <input class="form-control" type="text" placeholder="Enter your Name" name="name">
				  <label class="text-danger"><?php if(isset($error['name'])){echo $error['name'];} ?></label>
			   </div><br>
			
				<div class="form-inline">
			      <label class="control-label col-sm-1">Email</label>
			      <input class="form-control" type="text" placeholder="Enter your email" name="email">
				   <label class="text-danger" ><?php if(isset($error['email'])){echo $error['email'];} ?></label>
				   <label class="text-danger" ><?php if(isset($ec)){echo $ec;} ?></label>
			   </div><br>
			   
			   <div class="form-inline">
			      <label class="control-label col-sm-1">User Nmae</label>
			      <input class="form-control" type="text" placeholder="Enter your username" name="user">
				   <label class="text-danger" ><?php if(isset($error['user'])){echo $error['user'];} ?></label>
				   <label class="text-danger" ><?php if(isset($use)){echo $use;} ?></label>
			   </div><br>
			   
			   <div class="form-inline">
			      <label class="control-label col-sm-1">Password</label>
			      <input class="form-control" type="text" placeholder="Enter your password" name="pass">
				   <label  class="text-danger"><?php if(isset($error['pass'])){echo $error['pass'];} ?></label>
			   </div><br>
			   
			   <div class="form-inline">
			      <label class="control-label col-sm-1">Confarm Password</label>
			      <input class="form-control" type="text" placeholder="Enter your confarm password" name="cpass">
				   <label class="text-danger" ><?php if(isset($error['cpass'])){echo $error['cpass'];} ?></label>
				   <label class="text-danger" ><?php if(isset($pa)){echo $pa;} ?></label>
			   </div><br>
			   
			   <div class="form-inline">
			      <label class="control-label col-sm-1">photo</label>
			      <input  type="file" name="image">
				  
			   </div><br>
			   
			   
			
			    <input class="btn btn-primary" type="submit"  name="submit" value="Registation">
				<h3 class="text-primary text-italic"><?php if(isset($su)){echo $su; unset($su);}?></h3>
			
	   
	       </form>
	      </div>
	    </div>
		<p>If you have already register than <a href="login.php">Login</a></p>
	   </div>
	</div>
	
</body>
</html>