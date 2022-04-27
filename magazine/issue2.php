<?php
session_start();
// Include functions and connect to the database using PDO MySQL
include '../functions.php';
$pdo = pdo_connect_mysql();

template_header('Magazine')?>
<div class="container">
<div class="row">
	<div class="col">
		<iframe src="http://flowpaper.com/flipbook/https://henryd.art/images/magazine/henrydmagazine_issue2.pdf" width="70%" height="800" style="border: none; display: block; margin: 0px auto;" allowFullScreen>
		</iframe>
	</div>
</div>
</div>
<?=template_footer()?>