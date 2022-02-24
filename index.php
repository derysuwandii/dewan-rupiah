<?php
include 'lib.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="icon" href="dk.png">
	<title>Dewan Rupiah</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-dark bg-success fixed-top">
	  <a class="navbar-brand" href="index.php" style="color: #fff;">
	    Dewan Komputer
	  </a>
	</nav>

	<div class="container mb-3">
		<h2 align="center" style="margin: 60px 10px 10px 10px;">Format Rupiah dengan PHP dan Javascript</h2><hr>
		<div class="row">
			<div class="col-sm-6">
				<div class="card mb-4">
				  <h5 class="card-header bg-success text-white" align="center">Pada PHP</h5>
				  <div class="card-body">
				    <p class="card-text">
				    	<?php  
							$angka = 1000000;
							echo "Teks Asli :<br/>";
							echo $angka;
							echo "<br/><br/>";

							echo "Tanpa Angka Dibelakang koma :<br/>";
							echo "Rp. " . number_format($angka, 0, ".", ".");
							echo "<br/><br/>";

							echo "Dengan 1 angka dibelakang koma :<br/>";
							echo "Rp. " . number_format($angka, 1, ",", ".");
							echo "<br/><br/>";

							echo "Dengan separator koma :<br/>";
							echo "Rp. " . number_format($angka, 2, ".", ",");
							echo "<br/><br/>";
						?>
					</p>
				  </div>
				</div>			
			</div>
			<div class="col-sm-6">
				<div class="card mb-4">
				  <h5 class="card-header bg-success text-white" align="center">Dibuat Librari</h5>
				  <div class="card-body">
				    <?php  
						$angka = 2000000;
						echo "Teks Asli :<br/>";
						echo $angka;
						echo "<br/><br/>";

						echo "Tanpa Angka Dibelakang koma :<br/>";
						echo rupiah1($angka);
						echo "<br/><br/>";

						echo "Dengan 1 angka dibelakang koma :<br/>";
						echo rupiah2($angka);
						echo "<br/><br/>";

						echo "Dengan separator koma :<br/>";
						echo rupiah3($angka);
						echo "<br/><br/>";
					?>
				  </div>
				</div>
			</div>

			<div class="col-sm-6">
				<div class="card mb-4">
				  <h5 class="card-header bg-success text-white" align="center">Dengan Javascript Event keyup</h5>
				  <div class="card-body">
				  	<h4 align="center">Tanpa Keydown</h4>
				  	<div class="form-group">
				  		<label>Tanpa Rupiah</label>
				  		<input type="text" id="rupiah1" name="rupiah1" class="form-control">
				  	</div>

				  	<div class="form-group">
				  		<label>Dengan Rupiah</label>
				  		<input type="text" id="rupiah2" name="rupiah2" class="form-control">
				  	</div>

				  	<h4 align="center">Dengan Keydown</h4>
				  	<div class="form-group">
				  		<label>Tanpa Rupiah</label>
				  		<input type="text" id="rupiah3" name="rupiah3" class="form-control">
				  	</div>

				  	<div class="form-group">
				  		<label>Dengan Rupiah</label>
				  		<input type="text" id="rupiah4" name="rupiah4" class="form-control">
				  	</div>
				  </div>
				</div>
			</div>

			<div class="col-sm-6">
				<div class="card mb-4">
				  <h5 class="card-header bg-success text-white" align="center">Dengan Masking</h5>
				  <div class="card-body">
				  	<div class="form-group">
				  		<label>Masking 1</label>
				  		<input type="text" id="masking1" name="masking1" class="form-control">
				  	</div>
				  	<div class="form-group">
				  		<label>Masking 2</label>
				  		<input type="text" id="masking2" name="masking2" class="form-control">
				  	</div>
				  	<div class="form-group">
				  		<label>Masking 3</label>
				  		<input type="text" id="masking3" name="masking3" class="form-control">
				  	</div>
				  </div>
				</div>
			</div>
		</div>
		<hr>	
	</div>

	<div class="navbar bg-dark fixed-bottom">
		<div style="color: #fff;">© <?php echo date('Y'); ?> Copyright:
		    <a href="https://dewankomputer.com/"> Dewan Komputer</a>
		</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.mask.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>