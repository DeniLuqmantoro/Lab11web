<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="<?= base_url('/css/bootstrap.min.css');?>">
	
	<style>
	.main{
		height: 100vh;
	}

	.tambah-box{
		width: 500px;
		height: 450px;
		box-sizing: border-box;
		border-radius: 10px
	}
	</style>
</head>
<body>
	<div id="login-wrapper">
		<div class="main d-flex flex-column justify-content-center align-items-center">
			<div class="tambah-box p-5 shadow mb-3">
				<div>
					<h2 align="center">Sign In</h2>
				</div>
				<hr>
				<?php if(session()->getFlashdata('flash_msg')):?>
					<div class=" alert alert-danger"><?=session()->getFlashdata('flash_msg') ?></div>
				<?php endif;?>
				<form action="" method="post">
					<div class="mb-3">
						<label for="InputForEmail" class="form-label">Email address</label>
						<input type="email" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email') ?>">
					</div>
					<div class="mb-3">
						<label for="InputForPassword" class="form-label">Password</label>
						<input type="password" name="password" class="form-control" id="InputForPassword">
					</div>
					<button type="submit" class="btn btn-primary form-control mt-3">Login</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>