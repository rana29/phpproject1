
				 <h1 class="text-primary"> <i class="fa fa-dashboard" aria-hidden="true"></i>Dashboard <small>Statics Overview</small></h1>
				 
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
					<li class="breadcrumb-item active" aria-current="page"><i class="fa fa-dashboard" aria-hidden="true"></i>Dashboard</li>
				</ol>
				</nav>
				
				
				
				<?php 
				
				$con=mysqli_connect("localhost","root","","project");
				$sel="SELECT * FROM `studentinfo`";
				
				$que=mysqli_query($con,$sel);
				
				$res=mysqli_num_rows($que);
				
				
				
				
				?>
				
				
				<?php 
				
				$con=mysqli_connect("localhost","root","","project");
				$sele="SELECT * FROM `user`";
				
				$quee=mysqli_query($con,$sele);
				
				$res=mysqli_num_rows($quee);
				
				
				
				
				?>
				
				
				
				 <div class="main">
					<div class="item">
						<div class="color">
						
							<div class="ic">
								<i class="fa fa-dashboard fa-4x" aria-hidden="true"></i>
							</div>
							
								<div class="p">
									<p><?php echo $res; ?></p>
								</div>
								
							 <div class="su">
							  <p>All Student</p>
							 </div>
							
						</div>
						
						
						<div class="down">
						<p><a href="dash.php?page=allstudent">All Student</a></p> <i class="fa fa-dashboard" aria-hidden="true">Dashboard</i>
						
						</div>
					
					</div>
					
					
					<div class="item">
						<div class="color">
						
							<div class="ic">
								<i class="fa fa-dashboard fa-4x" aria-hidden="true"></i>
							</div>
							
								<div class="p">
									<p><?php echo $res; ?></p>
								</div>
								
							 <div class="su">
							  <p>All user</p>
							 </div>
							
						</div>
						
						
						<div class="down">
						<p><a href="dash.php?page=alluser">All user</a></p> <i class="fa fa-dashboard" aria-hidden="true">Dashboard</i>
						
						</div>
					
					</div>
					
					
					
					
				
				</div>
				
				      <hr>
				
				<div class="">
				
				<h3 class="text-primary">New Students</h3>
				
				</div>
				
				<div class="table-responsive">
				<table class="table table-bordered table-hover table-striped bg-succes" id="rana">
				
					<thead>
					
					
					
						<tr>
							<th>Id</th>
							
							<th>Name</th>
							
							<th>Roll</th>
							<th>Class</th>
							<th>City</th>
							<th>Contact</th>
							<th>photo</th>
						</tr>
						
						</thead>
					
					
					
					
					
					
					
					
					
					<tbody>
					
					<?php
					$con=mysqli_connect("localhost","root","","project");
					
					$sh="SELECT * FROM studentinfo";
					
					$ds=mysqli_query($con,$sh);
					
					while($row=mysqli_fetch_assoc($ds)){
						
						#print_r($row);
						
						?>
						
						<tr>
							
							<td><?php echo $row['id'];?></td>
							<td><?php echo $row['name'];?></td>
							<td><?php echo $row['roll'];?></td>
							<td><?php echo $row['class'];?></td>
							<td><?php echo $row['city'];?></td>
							<td><?php echo $row['contact'];?></td>
							
							<td> <img src="<?php echo $row['photo'];?>" width=100px></td>
						</tr>
						
						
						
						<?php
						
					}
					?>
					
				
					
					
					
						
					
					
					
					
					</tbody>
					
					
					
					
				
				</table>
				</div>
				