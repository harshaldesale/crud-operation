<?php
include 'connection.php';
include 'header.php';
?>
<?php  
$id=$_GET['id'];
$str="select * from student where id ='$id'";
$res=mysqli_query($conn,$str) or die(mysqli_error($conn));
$ans=mysqli_fetch_array($res);
// print_r($ans);
session_start();
$_SESSION['id']=$id;
?>	
<div class="container mt-5">
	<h1 class="text-secondary">update information.</h1>
	<div class="row">
	<div class="col-lg-5 mt-2">
	<form id="update_form">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" value="<?php echo $ans['name'];?>" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter Name" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">city</label>
    <input type="text" value="<?php echo $ans['city'];?>" class="form-control" name="city" placeholder="Enter City" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">email</label>
    <input type="text" class="form-control" value="<?php echo $ans['email'];?>" name="email" placeholder="Enter Email" id="exampleInputPassword1">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">mobile</label>
    <input type="text" class="form-control" value="<?php echo $ans['mobile'];?>" name="mobile" placeholder="Enter mobile" id="exampleInputPassword1">
  </div>
  <button type="button" class="btn btn-primary btn btn-update">add</button>
</form>
<br>
<div class="update_msg"></div>
	</div>
	</div>
</div>
<?php
include 'footer.php';
?>	