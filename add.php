<?php
include 'header.php';
?>	
<div class="container mt-5">
	<h1>Add information.</h1>
	<div class="row">
	<div class="col-lg-5 mt-2">
	<form id="add_form">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter Name" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">city</label>
    <input type="text" class="form-control" name="city" placeholder="Enter City" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">email</label>
    <input type="text" class="form-control" name="email" placeholder="Enter Email" id="exampleInputPassword1">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">mobile</label>
    <input type="text" class="form-control" name="mobile" placeholder="Enter mobile" id="exampleInputPassword1">
  </div>
  <button type="button" class="btn btn-primary btn btn-add">add</button>
</form>
<br>
<div class="form_msg"></div>
	</div>
	</div>
</div>
<?php
include 'footer.php';
?>	