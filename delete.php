





<?php



$con=mysqli_connect("localhost","root","","project");

$id= $_GET['id'];

#echo base64_encode($_GET['id']);

#echo $id;

$se="DELETE FROM studentinfo WHERE id='$id'";

$res=mysqli_query($con,$se);

if($res){
	
	header("location:dash.php?page=allstudent");
}


?>