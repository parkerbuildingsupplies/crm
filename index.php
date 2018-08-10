<?php
	if(!isset($_SESSION)) {
  	session_start();
  }

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header("location: login.php");
	}

  $pageTitle = 'Home';
  include 'header.php';
?>

    <script src="js/livesearch.js"></script>

    <main class="container-fluid">
      <div class="bg-white shadow-sm p-4 rounded">

        <!-- logged in user information -->
    		<?php if (isset($_SESSION['username'])) : ?>

				<h4>Submit new call</h4>
        <hr class="mb-4">

				<form method="post">
					<?php echo $alert; ?>

          <label>Account name</label>
          <input id="accountTextBox" type="text" name="account" onkeyup="showResult(this.value)" class="form-control" placeholder="Account Name" value="<?php echo $account; ?>">
          <div class="form-group" id="livesearch"></div>

					<div class="form-group">
						<label>Call type</label>
            <select class="form-control" name="type" value="<?php echo $type; ?>">
              <option selected disabled>Please select</option>
              <option value="COLDCALL">Cold Call</option>
              <option value="COLLPAY">Collecting Account Payment</option>
              <option value="CUSPHONE">Customer Phoned</option>
              <option value="OFFCALL">Office Call</option>
              <option value="PHONECAL">Phoned Customer</option>
              <option value="REPCALL">Customer Call</option>
              <option value="SITECALL">Site Visit</option>
            </select>
					</div>

          <div class="form-group">
						<label>Priority level</label>
            <select class="form-control" name="priority" value="<?php echo $priority; ?>">
              <option selected disabled>Please select</option>
              <option value="1">1 - Weak</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9 - Very Strong</option>
            </select>
					</div>

          <div class="form-group">
						<label>Reference</label>
						<input type="text" name="reference" class="form-control" placeholder="Reference" value="<?php echo $reference; ?>">
					</div>

					<div class="form-group">
						<label>Notes</label>
						<textarea name="notes" class="form-control" rows="10" placeholder="Write your notes here"><?php echo $notes; ?></textarea>
					</div>

					<div class="text-right">
						<button type="submit" name="submit" class="btn btn-pbs pbs-dropdwn-100" value="Submit">Submit to K8</button>
					</div>
				</form>

    		<?php endif ?>

      </div>
    </main>

<?php
  include 'footer.php';
?>
