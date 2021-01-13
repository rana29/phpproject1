



                <h1 class="text-primary"> <i class="fa fa-user-plus" aria-hidden="true">  </i>All Students</h1>
				 
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
					<li><a href="dash.php?page=dashbord">Dashbord</a></li>&nbsp &nbsp
					<li class="breadcrumb-item active" aria-current="page"><i class="fa fa-user" aria-hidden="true"></i>All students</li>
				</ol>


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
							<th>Action</th>
						</tr>
						
						</thead>
					
					
					
					
					
					
					
					
					
					<tbody>
					
					<?php

					/*
					$con=mysqli_connect("localhost","root","","project");
					
					$sh="SELECT * FROM studentinfo";
					
					$ds=mysqli_query($con,$sh);
					
					while($row=mysqli_fetch_assoc($ds)){
						
						#print_r($row);
						
						?>
						
						<tr>
							
							<td><?php echo $row['id'];?></td>
							<td><?php echo ucwords( $row['name']);?></td>
							<td><?php echo $row['roll'];?></td>
							<td><?php echo $row['class'];?></td>
							<td><?php echo ucwords($row['city']);?></td>
							<td><?php echo $row['contact'];?></td>
							
							<td> <img src="<?php echo $row['photo'];?>" style=width:100px ></td>
							
							<td>
							<i class="fa fa-pencil"><a class="btn btn-success" href="dash.php?page=update&id=<?php echo $row['id'];?>">Edit</a></i>&nbsp
							
							<i class="fa fa-trash">  <a href="delete.php?id=<?php echo $row['id'];?>" class="btn  btn-success" > Delete  </a></i>
							
							
							</td>
						</tr>
						
						</tbody>*/



						$con=mysqli_connect("localhost","root","","project");



						$sel="SELECT *from studentinfo";

						$que=mysqli_query($con,$sel);

						while ($row=mysqli_fetch_assoc($que)) {
							//print_r($que);
						}

						
						<?php
						
					}
					?>
					
				
					
					
					
						
					
					
					
					
					</tbody>
					
					
					
					
				
				</table>