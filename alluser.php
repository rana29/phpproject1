



                <h1 class="text-primary"> <i class="fa fa-user-plus" aria-hidden="true">  </i>All User</h1>
				 
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
					<li><a href="dash.php?page=alluser">Dashbord</a></li>&nbsp &nbsp
					<li class="breadcrumb-item active" aria-current="page"><i class="fa fa-user" aria-hidden="true"></i>All User</li>
				</ol>


       <table class="table table-bordered table-hover table-striped bg-succes" id="rana">
				
					<thead>
					
					
					
						<tr>
							<th>Id</th>
							
							<th>Name</th>
							
							<th>Email</th>
							<th>User Name</th>
							<th>photo</th>
							
							
							
						</tr>
						
						</thead>
					
					
					
					
					
					
					
					
					
					<tbody>
					
					<?php
					$con=mysqli_connect("localhost","root","","project");
					
					$sh="SELECT * FROM user";
					
					
					
					$ds=mysqli_query($con,$sh);
					
					#print_r($ds);
					
					while($row=mysqli_fetch_assoc($ds)){
						
						#print_r($row);
						
						?>
						
						<tr>
							
							<td><?php echo $row['id'];?></td>
							<td><?php echo ucwords( $row['name']);?></td>
							<td><?php echo $row['email'];?></td>
							<td><?php echo $row['username'];?></td>
						
							
							
							<td> <img src="<?php echo $row['photo']; ?>" width="100px" ></td>
							
							
						</tr>
						
						</tbody>
						
						<?php
						
					}
					?>
					
				
					
					
					
						
					
					
					
					
					</tbody>
					
					
					
					
				
				</table>