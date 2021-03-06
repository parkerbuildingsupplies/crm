<?php
	$pageTitle = 'New User';
 	include 'header.php';
?>

		<main class="container-fluid">
			<div class="bg-white shadow-sm p-4 rounded">

				<h4>Create new user</h4>
				<hr class="mb-4">

				<form action="new-user.php" method="POST">
					<?php include('inc/loginerrors.php'); ?>

					<div class="form-group">
						<label>Username</label>
						<input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $username; ?>">
					</div>

					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $email; ?>">
					</div>

					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control" placeholder="Password" name="password">
					</div>

					<div class="form-group">
						<label>Verify Password</label>
						<input type="password" class="form-control" placeholder="Verify Password" name="password_verify">
					</div>

					<div class="text-right">
						<button type="submit" class="btn btn-pbs pbs-dropdwn-100" name="reg_user">Create new</button>
					</div>
				</form>

			</div>
		</main>

<?php include 'footer.php'; ?>
