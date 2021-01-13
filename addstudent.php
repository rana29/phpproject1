
<?php 

$con=mysqli_connect("localhost","root","","project");
#if($con){echo "yes";}

if(isset($_POST['submit'])){
	#print_r($_POST);
	
	$name=$_POST['name'];
	$class=$_POST['class'];
	$roll=$_POST['roll'];
	$city=$_POST['city'];
	$contact=$_POST['contact'];
	$image=$_FILES['image']['name'];


	
	#echo "<pre>";
	#print_r($_FILES);
	#print_r($_POST);
	#echo $name;
	
	$ex=explode('.',$image);

	#print_r($ex);

	$end=end($ex);


	
	$dat=date("y-m-d-H-I-S");


	
	$iname='simage/'."masud".$dat.".".$end;


	#echo $iname;

	
	
	
	
	$error=array();
	
	if(empty($name)){
		
		$error['name']="This field is required";
		}
		
		if(empty($class)){
		
		$error['class']="This field is required";}
		
		
		if(empty($roll)){
		
		$error['roll']="This field is required";
		}
		
		if(empty($city)){
		
		$error['city']="This field is required";
		}
		if(empty($contact)){
		
		$error['contact']="This field is required";
		}
		
		if(empty($image)){
		
		$error['image']="This field is required";
		}



		
		
		if(count($error)==0){

			
			
			
			$in="INSERT INTO studentinfo(name,class,roll,city,contact,photo)
			VALUES('$name','$class','$roll','$city','$contact','$iname')";
			
			
		$ch=mysqli_query($con,$in);
		
		if($ch){
			
			
			$su="Student has been addded successfully";
			
			move_uploaded_file($_FILES['image']['tmp_name'],$iname);
			
			
		}
		
		
		}
			
			
		
}





?>






                <h1 class="text-primary"> <i class="fa fa-user-plus" aria-hidden="true">  </i>Add New Student</h1>
				 
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
					<li><a href="dash.php?page=dashbord">Dashbord</a></li>&nbsp &nbsp
					<li class="breadcrumb-item active" aria-current="page"><i class="fa fa-user" aria-hidden="true"></i>Add student</li>
				</ol>



<div class="row">

	<div class="col-sm-6 bg-info">
	
		<form method="post" enctype="multipart/form-data">


		
			<div class="form-group">
			
				<label>Student Name</label>
				<label class="text-danger pull-right bold"><?php if(isset($error['name'])){ echo $error['name'];}?></label>
				<input type="text" name="name" placeholder="name" class="form-control">
				
			
			</div>
			
			<div class="form-group">
			
			
				<label>Class</label>
				<label class="text-danger pull-right bold"><?php if(isset($error['class'])){ echo $error['class'];}?></label>
				
					<select class="form-control" name="class">
						
						<option>Select</option>
						<option value="1st">Class1</option>
						<option value="2nd">Class2</option>
						<option value="3rd">Class3</option>
						<option value="4th">Class4</option>
						<option value="5th">Class5</option>
				
					</select>
			
			</div>
			
			
			<div class="form-group">
			
				<label class="">Student Roll</label>
				<label class="text-danger pull-right bold"><?php if(isset($error['roll'])){ echo $error['roll'];}?></label>
				<input type="text" name="roll" placeholder="roll" class="form-control">
			
			</div>
			
			
			<div class="form-group">
			
				<label>City</label>
				<label class="text-danger pull-right bold"><?php if(isset($error['city'])){ echo $error['city'];}?></label>
				<input type="text" name="city" placeholder="city" class="form-control">
			
			</div>
			
			<div class="form-group">
			
				<label>Contact</label>
				<label class="text-danger pull-right bold"><?php if(isset($error['contact'])){ echo $error['contact'];}?></label>
				<input type="text" name="contact" placeholder="contact" class="form-control">
			
			</div>
			
			
			<div class="form-group">
			
				<label>Student Picture</label>
				<label class="text-danger pull-right bold"><?php if(isset($error['image'])){ echo $error['image'];}?></label>
				<input type="file" name="image">
			
			</div>
			
			<div class="form-group">
			
				
				<input type="submit" value="Add Student" name="submit" class="btn btn-danger pull-right">
			
			</div>
			
			
			
			
		
		</form>
		<h3 class="text-danger"><?php if(isset($su)){echo $su;}?></h3>
	</div>

</div>