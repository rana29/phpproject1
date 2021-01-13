<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/table.css">
	<link rel="stylesheet" href="css/dash.css">
	<script type="text/javascript" src="js/t1.js"></script>
	<script type="text/javascript" src="js/t2.js"></script>
	<script type="text/javascript" src="js/t3.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

    <title>Dashobord</title>
  </head>
  <body>
  
	
		
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      
      <li class="nav-item">
        <a class="nav-link" href="#">SMS</a>
      </li>
      
    </ul>
	
    <form class="form-inline my-2 my-lg-0" method="post">
       
	   
	   
	   <a class="nav-link" href="#"><i class="fa fa-user" aria-hidden="true"></i>Welcome:Masud Rana<span class="sr-only">(current)</span></a>
	   
	   <a class="nav-link" href="form.php"><i class="fa fa-user" aria-hidden="true"></i>Add user<span class="sr-only">(current)</span></a>
	   <a class="nav-link" href="dash.php?page=user"><i class="fa fa-user" aria-hidden="true"></i>Profile <span class="sr-only">(current)</span></a>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="logout">logout</button>
    </form>
  </div>
</nav
    
   
   <?php 
   if(isset($_POST['logout'])){
	   
	   header("location:login.php");
   }
   
   ?>
   
   
   <div class="container">
   
	<div class="row">
	
		<div class="col-sm-3">
			<div class="list-group">
			
			<a href="dash.php?page=dashbord" class="list-group-item list-group-item-action active"><i class="fa fa-dashboard" aria-hidden="true"></i>
			Dashboard
			</a>
			
			<a href="dash.php?page=allstudent" class="list-group-item list-group-item-action"><i class="fa fa-user-plus" aria-hidden="true"></i> All students</a>
			<a href="dash.php?page=addstudent" class="list-group-item list-group-item-action"><i class="fa fa-user-plus" aria-hidden="true"></i> Add Student</a>
			<a href="dash.php?page=alluser" class="list-group-item list-group-item-action"><i class="fa fa-user-plus" aria-hidden="true"></i> All User</a>
			
	</div>
		
		</div>
		
		<div class="col-sm-9">
		
			<div class="content">
			
			
			<?php
			if(isset($_GET['page'])){
				
				$page=$_GET['page'].".php";
			}
			else{
				
				$page="dash.php";
			}
			
			
			
			if(file_exists($page)){
			
			require_once($page);
			
			}
			?>
				
				
				
			</div>
		
		</div>
	
	</div>
   
   </div>
   
   
   
                  
   
  </body>
</html>
