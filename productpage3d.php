<?php
session_start();
// Include functions and connect to the database using PDO MySQL
include 'functions.php';
$pdo = pdo_connect_mysql();

	// Connect to DB
	$db = mysqli_connect('REDACTED','REDACTED','REDACTED','REDACTED')
	or die('Error connecting to MySQL server.');

	$servername = "REDACTED";
	$username = "REDACTED";
	$password = "REDACTED";
	$dbname = "REDACTED";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

template_header('3D Product')?>
<div class="container">
<div class="row">
<div class="col-md main-content">
			<?php	if(isset($_GET['ID'])) {
	            $thisistheid = $_GET['ID'];
	            $sql = "SELECT id, title, price, category, viewbox FROM art_data_3d WHERE id='$thisistheid'";
	            $result = mysqli_query($conn, $sql);
	            if (mysqli_num_rows($result) > 0) {
	              // output data of each row
				while($row = mysqli_fetch_assoc($result)) { ?>
					<div class="page-header">
						<h1 class="name"><?php echo $row['title']; ?></h1>
					</div>
					<!-- Content Info -->
					<div class="col product-3d-container">
					    <model-viewer bounds="tight" src="<?php echo $row['viewbox']; ?>" ar ar-modes="webxr scene-viewer quick-look" camera-controls environment-image="neutral" poster="poster.png" shadow-intensity="1" auto-rotate></model-viewer>
					</div>
					<!-- End Content Info -->
				<?php }
	            }
	            else {
	              echo "0 results";
	            }
          }
          else {
            echo "We're gonna need a page ID yo...";
          } ?>
</div>
</div>
</div>