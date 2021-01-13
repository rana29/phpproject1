<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/wel.css">

    <title>welcome</title>
  </head>
  <body>
  
	<div class="container"><br><br>
		
			<a href="login.php" class="btn btn-success">Login Admin</a>
			<h2 class="text-primary text-center">Welcome to School Management system</h2><br><br>
			
			
			<form method="post">
			
				<table class="table table-bordered table-dark text-center table-striped table-hover ">
					<tr>
					
						<td colspan="2"><h3>Student Information</h3></td>
					</tr>
					
					<tr>
					
						<td>Choose class</td>
						<td>
							<select name="class">
								<option value="1st">1st</option>
								<option value="2nd">2nd</option>
								<option value="3rd">3rd</option>
								<option value="4th">4th</option>
								<option value="5th">5th</option>
								
								
							</select>
						</td>
					</tr>
					
					<tr>
					
						<td>Roll Number</td>
						<td><input type="text" placeholder="Enter your roll" name="roll"  class="input-success"></td>
					</tr>
					
					<tr>
					
						
						<td colspan="2">
						
						<input type="submit"  value="Show Info" name="info" class="btn-primary">
						
						</td>
					</tr>
				</table>
			
			
			</form>
	
    
    <div><br><br>


    	<?php 

    	$con=mysqli_connect("localhost","root","","project");

    		if (isset($_POST['info'])) {
    			#print_r($_POST);

    			$roll=$_POST['roll'];
    			$class=$_POST['class'];

    			$qur="SELECT * FROM studentinfo WHERE roll='$roll'";

    			$res=mysqli_query($con,$qur);

    			print_r($res);

    			if (mysqli_num_rows($res)==1) {

    				$row=mysqli_fetch_assoc($res);

    				print_r($row);
    				echo "yes";

    				?>

						<div class="row">
		
		     <div class="col-sm-6">
			<table class="table table-hover table-striped table-dark bg-success table-bordered">
			
			<tr>
				<td>Name</td>
				<td><?php echo $row['name']; ?></td>
			</tr>

			<tr>
				<td>city</td>
				<td><?php echo $row['city']; ?></td>
			</tr>

			<tr>
				<td>Class</td>
				<td><?php echo $row['class']; ?></td>
			</tr>


			<tr>
				<td>Contact</td>
				<td><?php echo $row['contact']; ?></td>
			</tr>
		</table>

		</div>
	</div>

    				<?php

    
				}
				else{

					echo "no";
				}
	}
	?>


  </body>
</html>
