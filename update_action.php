<?php
session_start();  
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
	$id=$_SESSION['id'];
	$str="update student set name='$name',city='$city',email='$email',mobile='$mobile' where id='$id'";
	$res=mysqli_query($conn,$str) or die(mysqli_error($conn));
	if ($res) {
		?>
		<div class="alert alert-danger">
		information update succssfully!!.
		</div>
		<?php
		session_unset($_SESSION['id']);
	}else{
		echo "error";
	}
}
?>