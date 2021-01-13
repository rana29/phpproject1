



						<?php
						
						$con=mysqli_connect("localhost","root","","project");
						
						$id= $_GET['id'];
						#echo $id;
						
						$sel="SELECT * FROM studentinfo WHERE id='$id'";
						
						$res=mysqli_query($con,$sel);
						
						#print_r($res);
						$row=mysqli_fetch_assoc($res);
						
						#print_r($row);
						
						
						if(isset($_POST['submit'])){
						
						
						$name=$_POST['name'];
						$class=$_POST['class'];
						$roll=$_POST['roll'];
						$city=$_POST['city'];
						$contact=$_POST['contact'];
						$image=$_FILES['image']['name'];
						
						$up="UPDATE `studentinfo` SET `name`='$name',`roll`='$roll',`class`='$class',
						
						`city`='$city',`contact`='$contact' WHERE id='$id'";
						
						$res=mysqli_query($con,$up);
						
						if($res){
							header("location:dash.php?page=allstudent");
							
							echo "yes";
						}
						}				
											
						?>






                <h1 class="text-primary"> <i class="fa fa-user-plus" aria-hidden="true">  </i>Update Student</h1>
				 
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
					<li><a href="dash.php?page=dashbord"><i class= "fa fa-dashboard">&nbspDashbord</i></a></li>&nbsp &nbsp
					
					<li><a href="dash.php?page=allstudent"><i class= "fa fa-user">&nbsp</i>All Students &nbsp </a></li>
					
					<li class="breadcrumb-item active" aria-current="page"><i class="fa fa-user" aria-hidden="true"></i>Update Student</li>
				</ol>



<div class="row">

	<div class="col-sm-6 bg-info">
	
		<form method="post" enctype="multipart/form-data">
		
			<div class="form-group">
			
				<label>Student Name</label>
				
				<input type="text" name="name" placeholder="name" class="form-control" value="<?php echo $row['name'];?>">
				
			
			</div>
			
			<div class="form-group">
			
			
				<label>Class</label>
				
				
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
				
				<input type="text" name="roll" placeholder="roll" class="form-control" value="<?php echo $row['roll'];?>">
			
			</div>
			
			
			<div class="form-group">
			
				<label>City</label>
				
				<input type="text" name="city" placeholder="city" class="form-control" value="<?php echo $row['city'];?>">
			
			</div>
			
			<div class="form-group">
			
				<label>Contact</label>
				
		<input type="text" name="contact" placeholder="contact" class="form-control" value="<?php echo $row['contact'];?>">
			
			</div>
			
			
			<div class="form-group">
			
				<label>Student Picture</label>
				
				<input type="file" name="image">
			
			</div>
			
			<div class="form-group">
			
				
				<input type="submit" value="Update Student" name="submit" class="btn btn-danger pull-right" >
			
			</div>
			
			
			
			
		
		</form>
		<h3 class="text-danger"><?php if(isset($su)){echo $su;}?></h3>
	</div>

</div>