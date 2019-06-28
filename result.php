<?php
	if(isset($_POST['Submit'])){
		$line = $_POST['SNP'];
	}
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
						
						// For each input SNP
						$separator = "\r\n";
						$line = strtok($line, $separator);
						$i = 1;
						
						while ($line !== false) {
							$f = fopen("data/asa.csv", "r");
							$found = false;

							while($row = fgetcsv($f)) {	//Check row by row
								if(stripos($row[0],$line) !== false){	//Contain SNP in ASA
									$found = true;
									if($row[0] == $line){	// If EXACT MATCH
										echo "<tr>";
										echo "<td>".$i."</td>";
										echo "<td style='color:#00CC00'>".$line."</td>";
										foreach ($row as $value) {
											echo "<td style='color:#00CC00'>".$value."</td>";
										}
										/*for ($x = 0; $x <= 19; $x++) {
											echo "<td style='color:#00CC00'>".$row[$x]."</td>";
										} */
										echo "</tr>";
										$i++;
									}
									
									else{
										echo "<tr>";
										echo "<td>".$i."</td>";
										echo "<td>".$line."</td>";
										foreach ($row as $value) {
											echo "<td>".$value."</td>";
										}
										echo "</tr>";
										$i++;
									}
								}
							}
							
							if(!$found){
								echo "<tr>";
								echo "<td>".$i."</td>";
								echo "<td>".$line."</td>";
								echo "<td style='color:red'>Not Found</td>";
								for ($x = 0; $x <= 19; $x++) {
									echo "<td style='color:red'>-</td>";
								} 
								echo "</tr>";
								$i++;
							}
							fclose($f);
							$line = strtok( $separator );
						}
						
						$time_end = microtime(true);
						//dividing with 60 will give the execution time in minutes otherwise seconds
						$execution_time = ($time_end - $time_start)/60;
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