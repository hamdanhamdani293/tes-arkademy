<?php
require "libno6.php";
$datab = query("SELECT * from candidates");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>QuickCount </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style2.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- jumbotron -->
	<div class="jumbotron text-center">
		
		<h1>QuickCount</h1>
		
	</div>
	<!-- akhir jumbotron -->

	<!-- data tabel -->
	<section class="data">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<table class="table">
					<?php foreach($datab as $row) :?>
					<tr>
						<td><?php echo $row["id"];?></td>
						<td><?php echo $row[1]; ?></td>
						<td><?php echo $row[2]; ?></td>
						<td><input type="submit" name="kirim" value="Tombol Tambah" /></td>
						<!-- <button ><a href="form.php">Tombol Tambah</a></button></td> -->
					</tr>					
					<?php endforeach; ?>
				</table>

				<?php
        if (isset($_POST['kirim'])) {            
						$tambah = query("SELECT earned_vote from candidates");
						$tambah += 1;
            
        $conn = mysqli_connect("localhost","root","","db_quickcount");
        
        mysqli_query($conn," INSERT INTO candidates(earned_vote) VALUES($tambah) ");

        echo "<a href='6.php' >Lihat Data</a>";
      
    }

    ?>


			</div>
		</div>
	</div>
	</section>
	
	<!-- akhir data tabel -->
	
	<!-- footer -->
	<footer>
		<div class="container text-center">
			<div class="row">
				<div class="col-sm-12">
					<p>&copy; built with Hamdan Hamdani</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- akhir footer -->
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>