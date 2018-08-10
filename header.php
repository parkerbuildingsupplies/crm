<?php
  if(!isset($_SESSION)) {
    session_start();
  }

  if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

	include 'inc/loginsystem.php';
  include 'inc/crmsystem.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta author="IT Team">
    <title><?php echo $pageTitle; ?> | CRM</title>
    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link href="./css/main.css" rel="stylesheet">
  </head>
  <body>

    <header class=" bg-white shadow-sm">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-light">
          <a class="navbar-brand" href="./">
            <span class="d-inline-block"><img src="./images/logo.png" class="pbs-logo" alt="Logo"></span>
          </a>
          <span class="navbar-brand mr-auto">CRM</span>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="ml-auto">
              <?php  if (isset($_SESSION['username'])) : ?>
                <span class="pbs-user">Welcome: <strong><?php	echo $_SESSION['username']; ?></strong></span>
    					  <a href="index.php?logout='1'" class="btn btn-pbs pbs-dropdwn-100">Logout</a>
              <?php else : ?>
                <a class="btn btn-pbs pbs-dropdwn-100" href="./login.php" role="button">Login</a>
              <?php endif ?>
            </div>
          </div>
        </nav>
      </div>
    </header>
