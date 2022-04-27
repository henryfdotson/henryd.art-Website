<?php
session_start();
// Include functions and connect to the database using PDO MySQL
include 'functions.php';
$pdo = pdo_connect_mysql();

template_header('Photography')?>
<div class="container">
<div class="row">
<div class="col-md main-content">
		<div class="row">
			<div class="col fade-in">
            	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img class="d-block w-100" src="/images/photography/parkinggarage.png" alt="Parking Garage">
				    </div>
				    <div class="carousel-item ">
				      <img class="d-block w-100" src="/images/photography/hydrant.png" alt="Hydrant">
				    </div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
        	</div>
        </div>
</div>
</div>
</div>
<?=template_footer()?>