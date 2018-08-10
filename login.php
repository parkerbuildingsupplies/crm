<?php
	$pageTitle = 'Login';
 	include 'header.php';
?>

		<main class="container-fluid">
      <div class="bg-white shadow-sm p-4">

				<h4>Login</h4>
				<hr class="mb-4">

				<form action="login.php" method="POST" >
					<?php include('inc/loginerrors.php'); ?>

					<div class="form-group">
						<label>Username</label>
						<input type="text" class="form-control mb-2" name="username" placeholder="Username">
					</div>

					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control mb-2" name="password" placeholder="Password">
					</div>

					<div class="text-right">
						<button type="submit" class="btn btn-pbs pbs-dropdwn-100" name="login_user">Login</button>
					</div>
				</form>

			</div>
		</main>

<?php include 'footer.php'; ?>
