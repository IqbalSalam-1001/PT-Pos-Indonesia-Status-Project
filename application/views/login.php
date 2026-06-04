<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Log in</title>



	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="<?= base_url();?>source/plugins/fontawesome-free/css/all.min.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="<?= base_url();?>source/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url();?>source/dist/css/adminlte.min.css">


</head>

<body class="hold-transition login-page">
	<div class="login-box">
		<!-- /.login-logo -->
		<div class="card card-outline card-primary">
			<div class="card-header text-center">
				<img src="<?= base_url();?>source/img/logo pos.png" alt="" width="100">
			</div>
			<div class="card-body">
				<p class="login-box-msg">Log In Enterprice </p>

				<?= $this->session->flashdata('message'); ?>
				<form class = "user" method="post" action="<?= base_url('auth');?>">
					
						<div class="form-group">
							<label for="InputUsername">Username</label>
							<input type="username" class="form-control"  placeholder="Enter username" name="name" id="name" value="<?= set_value('name'); ?>">
							<?php echo form_error('name','<small class="text-danger pl-1">', '</small>'); ?>
						</div>

						<div class="form-group">
							<label for="InputPassword1">Password</label>
							<input type="password" class="form-control" id="password" placeholder="Password" name="password">
							<?php echo form_error('password','<small class="text-danger pl-1">', '</small>'); ?>
						</div>
						
						<div class="form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Check me out</label>
						</div>
					
					<!-- /.card-body -->

					<div class="card-footer">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>


				<!-- /.social-auth-links -->

				<!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> -->
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->
	</div>
	<!-- /.login-box -->

	<!-- jQuery -->
	<script src="plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="dist/js/adminlte.min.js"></script>
</body>

</html>
