<?php
include 'header.php';
include 'connection.php';
?>	
<div class="container">
	<div class="row">
	<div class="col-lg-7 mt-3">
		<a href="add.php" class="btn btn-primary btn-lg">add <span>+</span></a>
		</div>
			<div class="col-lg-8 mt-3 text-center ml-0">
				<h1 class="text-info">student information</h1>
		<table class="table table-bordered">
			<tr>
				<th>Sr.No</th>
				<th>name</th>
				<th>city</th>
				<th>email</th>
				<th>mobile</th>
				<th>action</th>
				<th>action</th>
			</tr>
			<?php  
			$str="select * from student";
			$res=mysqli_query($conn,$str) or die(mysql_error($conn));
				if ($res->num_rows>0):
					while ($ans=mysqli_fetch_array($res)):
			?>
			<tr>
				<td><?php echo $ans['id'];?></td>
				<td><?php echo $ans['name'];?></td>
				<td><?php echo $ans['city'];?></td>
				<td><?php echo $ans['email'];?></td>
				<td><?php echo $ans['mobile'];?></td>
				<td><a href="update.php?id=<?php echo $ans['id'];?>" class="btn btn-info">update</a></td>
				<td><a href="delete.php?id=<?php echo $ans['id'];?>" class="btn btn-danger">delete</a></td>
			</tr>
			<?php
			endwhile;  
		endif;
			?>
		</table>
		<div class="msg"></div>
		</div>
	</div>
</div>
<?php
include 'footer.php';
?>	