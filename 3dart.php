<?php
session_start();
// Include functions and connect to the database using PDO MySQL
include 'functions.php';
$pdo = pdo_connect_mysql();

$db3d = mysqli_connect('REDACTED','REDACTED','REDACTED','REDACTED')
    or die('Error connecting to MySQL server.');

    $query3d = "SELECT * FROM `REDACTED` ORDER BY `title`;";
    mysqli_query($db3d, $query3d) or die('Error querying database.');
    // If there's no error at this point, you've got the data. Fuck yeah!
    $result3d = mysqli_query($db3d, $query3d);

template_header('3D Art')?>
<div class="container">
<div class="row">
<div class="col-md main-content 3dart-content">
		<div class="row">
				<?php
				while ($row = mysqli_fetch_array($result3d)) {
				 ?> 
					 <!-- Let's throw in some HTML -->
					<div class="col-sm-4 products">
						<div class="thumbnail">
					            <!-- This is where the model goes -->
					            <model-viewer bounds="tight" src="<?php echo $row['viewbox']; ?>" ar ar-modes="webxr scene-viewer quick-look" camera-controls environment-image="neutral" poster="poster.png" shadow-intensity="1" auto-rotate></model-viewer>
					        <a href="productpage3d.php?ID=<?php echo $row['id'] ?>" class="art-gallery-link">
					        <div class="caption">
					            <h3><?php echo $row['title'] ?></h3>
					            <p class="art-gallery-price"><?php //echo $row['price']?></p>
					    	</div>
					    	</a>
					    </div>
					</div>
				<?php } ?>
        </div>
</div>
</div>
</div>
<?=template_sidebar_closer()?>
<?=template_footer()?>