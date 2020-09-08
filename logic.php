<?php
require_once('connection.php');
if(isset($_POST['btn_submit']))
{
	$getid = $_POST['hid_id'];
	if(!empty($getid) && $getid > 0){
		$query = "update student set name='".$_POST['txt_name']."' where id='".$getid."'";	
	}
	else{
		$query = "insert into student set name='".$_POST['txt_name']."'";	
	
	}
	$result = mysqli_query($conn,$query);
	header('location:index.php');
}
?>