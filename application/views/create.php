<!DOCTYPE html>
<html>
<head>
	<title>CRUD in CI Create User</title>
	<link rel="stylesheet" type="css/text" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
	<div class="navbar navbar-dark bg-dark">
		<div class="container">
			<a href="#" class="navbar-brand">CRUD Application</a>
		</div>
	</div>
	<form method="post" name="createUser" action="<?php echo base_url().'index.php/user/create';?>">
	<div class="container">
	<h3>Create User</h3>
	<hr>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" value="<?php echo set_value("name"); ?>" class="form-control"/>
					<span class="text-danger"><?php echo form_error('name');?></span>
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="text" name="email" value="<?php echo set_value("email"); ?>" class="form-control"/>
					<span class="text-danger"><?php echo form_error('email');?></span>
				</div>
				<div class="form-group">
					<button class="btn btn-primary">Create</button>
					<a href="" class="btn-secondary btn">Cancel</a>
				</div>
			</div>
		</div>
	</div>
	</form>
</body>
</html>