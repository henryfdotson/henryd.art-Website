<?php
// Get the 4 most recently added products
$stmt = $pdo->prepare('SELECT * FROM products ORDER BY date_added DESC LIMIT 4');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?=template_header('Home')?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<div class="container">
<div class="row">
<div class="col-md main-content">
		<div class="row">
			<div class="jumbotron">
				<div class="container">
					<div class="row">
						<div class="col-3">
							<img src="/images/bio-pics/henryd1.png" class="img-fluid rounded" />
						</div>
						<div class="col">
							<div class="typewriter">
							  <h2>Hi, I'm henryd!</h2>
							</div>
							<h3><a href="/biography.php" style="color: orange !important;">Henry F. Dotson</a> is an artist, designer and web developer working in <a href="/products.php">2D</a> and <a href="/3dart.php">3D</a> mediums.</h3>
						</div>
					</div>
				</div>
			</div>
        </div>
</div>
</div>
</div>
<?=template_footer()?>