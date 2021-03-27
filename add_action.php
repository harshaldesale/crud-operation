<?php  
include 'connection.php';
// print_r($_POST);
if(empty($_POST['name'])) {
	?>
	<div class="alert alert-danger">
		Enter name.
	</div>
	<?php
}else if (ctype_digit($_POST['name'])) {
	?>
	<div class="alert alert-danger">
		Enter valid alphabets.
	</div>
	<?php
}else if(empty($_POST['city'])) {
	?>
	<div class="alert alert-danger">
		Enter city.
	</div>
	<?php
}else if (ctype_digit($_POST['city'])) {
	?>
	<div class="alert alert-danger">
		Enter valid alphabets.
	</div>
	<?php
}else if(empty($_POST['email'])) {
	?>
	<div class="alert alert-danger">
		Enter email.
	</div>
	<?php
}else if(empty($_POST['mobile'])) {
	?>
	<div class="alert alert-danger">
		Enter mobile.
	</div>
	<?php
}else if (ctype_alpha($_POST['mobile'])) {
	?>
	<div class="alert alert-danger">
		Enter valid mobile no.
	</div>
	<?php
}else if ((strlen($_POST['mobile'])<10)||(strlen($_POST['mobile'])>10)) {
	?>
	<div class="alert alert-danger">
		Enter valid mobile no.
	</div>
	<?php
}
else{
	$name=$_POST['name'];
	$city=$_POST['city'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$query="select * from student where email='$email'";
	$re=mysqli_query($conn,$query) or die(mysqli_error($conn));
	if ($re->num_rows>0) {
		?>
		<div class="alert alert-danger">
		Given email already register.
	</div>
		<?php
	}else{
	$q="select * from student where mobile='$mobile'";
	$rec=mysqli_query($conn,$q) or die(mysqli_error($conn));
	if ($rec->num_rows>0) {
		?>
		<div class="alert alert-danger">
		Given mobile no already register.
	</div>
		<?php
	}else{
	$str="insert into student (name,city,email,mobile) values ('$name','$city','$email','$mobile')";
	$res=mysqli_query($conn,$str) or die(mysqli_error($conn));
	if ($res) {
		?>
		<div class="alert alert-danger">
		information succssfully added!!.
		</div>
		<?php

	}else{
		echo "error";
	}
}
}
}
?>