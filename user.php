 <h1 class="text-primary"> <i class="fa fa-user-plus" aria-hidden="true"></i>User profile <small>My profile</small></h1>
				 
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
				<a href="dash.php?page=dashbord">	<li class="breadcrumb-item active" aria-current="page"><i class="fa fa-dashboard" aria-hidden="true"></i>Dashboard</li> &nbsp
					
					<a href="dash.php?page=user"><i class="fa fa-user" aria-hidden="true"></i>Profile</a>
				</ol>
				</nav>
				
				
				
				
				
				
				<?php
				session_start();
				
					$con=mysqli_connect("localhost","root","","project");
					
					
					
					$userr=$_SESSION['user'];

					
					$in="SELECT * FROM user WHERE username='$userr'";
					
					$qu=mysqli_query($con,$in);
					
					#print_r($qu);
					$row=mysqli_fetch_assoc($qu);
					#print_r($row);
					
					
					
				
				
				?>
				
				
				
				
				
				<div class="row">
				
					<div class="col-sm-6">
						<table class="table table-bordered table-hover table-striped">
						
							<tr>
							
								<th>ID</th>
								<td><?php echo $row['id'];?></td>
							</tr>
							
							<tr>
							
								<th>Name</th>
								<td><?php echo $row['name'];?></td>
							</tr>
							<tr>
							
								<th>User Name</th>
								<td><?php echo $row['email'];?></td>
							</tr>
							
							<tr>
							
								<th>Email</th>
								<td><?php echo $row['username'];?></td>
							</tr>
							<tr>
							
								<th>Signup Date</th>
								<td><?php echo $row['date'];?></td>
							</tr>
							
							
							
							
							
							
							
						</table>
						
						
						<input type="submit" value="Edit Profile" name="profile" class=" bg-success pull-right">
					
					</div>
					
					<div class="col-sm-3">
					
					
							<form ethod="post" enctype="multipart/form-data">
							
								<img src="<?php echo $row['photo'];?>" class="img-thumbnail">
								
								<input type="file"  name="image" class="btn">
								
								<input type="submit" value="Upload" name="image" class="btn btn-primary">
							</form>
					
					
					</div>
					
					
					
				</div>