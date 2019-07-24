<?php
	if(isset($_POST['Submit'])){
		$line = $_POST['SNP'];
	}

	include 'dbconfig.php';
?>

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
      <a class="btn btn-primary" href="index.php"><i class="fa fa-chevron-left"></i> Back</a>
    </div>
  </nav>

  <!-- Icons Grid -->
  <section class="features-icons">
    <div class="container full-width-div">
      <div class="row">
        <!--<div class="col-lg-12">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-screen-desktop m-auto text-primary"></i>
            </div>
            <h3>Enter SNP ID(s):</h3>
          </div>
        </div>-->
		<div class="col-lg-12" style="overflow-x:auto;">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Query SNP ID</th>
						<th>Matched SNP ID in ASA</th>
						<th>IlmnStrand</th>
						<th>Genotype</th>
						<th>AddressA ID</th>
						<th>AlleleA ProbeSeq</th>
						<th>AddressB ID</th>
						<th>AlleleB ProbeSeq</th>
						<th>GenomeBuild</th>
						<th>Chr</th>
						<th>MapInfo</th>
						<th>Ploidy</th>
						<th>Species</th>
						<th>Source</th>
						<th>Source Version</th>
						<th>Source Strand</th>
						<th>Source Seq</th>
						<th>Top Genomic Seq</th>
						<th>Bead Set ID</th>
						<th>Exp_Clusters</th>
						<th>Intensity_Only</th>
						<th>RefStrand</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$time_start = microtime(true);
						set_time_limit(0);
						include 'query.php';
					?>
				</tbody>
			</table>
			<?php
				//execution time of the script
				// if you get weird results, use number_format((float) $execution_time, 10) 
				
				$message = 'SNP Query Completed!\nTotal Execution Time: '.round($execution_time,2).' Mins';
				echo "<script type='text/javascript'>alert('$message');</script>";
			?>
		</div>
      </div>
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
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
