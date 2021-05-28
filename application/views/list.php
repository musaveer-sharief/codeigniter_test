<!DOCTYPE html>
<html>
<head>
	<title>CRUD in CI VIew User</title>
	<link rel="stylesheet" type="css/text" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
	<div class="navbar navbar-dark bg-dark">
		<div class="container">
			<a href="#" class="navbar-brand">CRUD Application</a>
		</div>
	</div>
	
	<div class="container" style="padding-top:10px;">
	<div class="row">
		<div class="col-md-8">
			<div class="row">
				<div class="col-6"><h3>View Users</h3></div>
				<div class="col-6 text-right">
					<a href="<?php echo base_url().'index.php/user/create';?>" class="btn btn-primary">Create</a>
				</div>
			</div>
			<hr>
		</div>
	</div>
	
	
	<div class="row">
			<div class="col-md-8">
			<table class="table table-striped">
				<tr>
					<th width="100">ID</th>
					<th width="100">Name</th>
					<th width="100">Email</th>
					<th width="60">Edit</th>
					<th width="100">Delete</th>
				</tr>
				
				<?php if(!empty($users)){foreach($users as $user){?>
				<tr>
					<td><?php echo $user['user_id'];?></td>
					<td><?php echo $user['name'];?></td>
					<td><?php echo $user['email'];?></td>
					<td><a href="<?php echo base_url().'index.php/user/edit'.$user['user_id']?>" class="btn btn-primary">Edit</a></td>
					<td><a href="<?php echo base_url().'index.php/user/delete'.$user['user_id']?>" class="btn btn-danger">Delete</a></td>
				</tr>
				<?php }} else{?>
				<tr>
					<td colspan="5"> Records Not found...!</td>
				</tr>
				<?php } ?>
			</table>
			</div>
		</div>
	</div>
</body>
</html>