<?php
session_start();
?>

<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/png" href="img/icon.png">

  <title>Advanx Health - SNP Analysis Tool</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/landing-page.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-light bg-light static-top">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="https://d33wubrfki0l68.cloudfront.net/edbf45308142476c39b28be48f04048e840ee8ae/cfd62/img/logo.png" alt="Advanx Health" height="50px"></a>
      <!--<a class="btn btn-primary" href="#">Sign In</a>-->
    </div>
  </nav>

  <!-- Icons Grid -->
  <section class="features-icons text-center">
    <div class="container">
		<form class="form-horizontal" action="result.php" method="post" name="form">
			  <div class="row">
				<!--<div class="col-lg-12">
				  <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
					<div class="features-icons-icon d-flex">
					  <i class="icon-screen-desktop m-auto text-primary"></i>
					</div>
					<h3>Enter SNP ID(s):</h3>
				  </div>
				</div>-->
				<div class="col-lg-12">
					<h3>Enter SNP ID(s):</h3>
					<textarea name="SNP" rows="18%" cols="100%"></textarea>
				</div>
				<div class="col-lg-12">
					<br>
					<button type="submit" class="btn btn-primary" name="Submit")>Submit</button>
				</div>
			  </div>
		</form>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <p class="text-muted small mb-4 mb-lg-0"><i class='fas fa-user-graduate'></i> Sin Yee (syyap4@graduate.utm.my) | 2019</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <!--<ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-instagram fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>-->
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>