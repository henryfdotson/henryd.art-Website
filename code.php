<?php
session_start();
// Include functions and connect to the database using PDO MySQL
include 'functions.php';
$pdo = pdo_connect_mysql();

template_header('Code')?>
<div class="main-content fade-in">
<div class="container">
<div class="row">
	<div class="col-4">
					<a href="https://weather.henryd.art" class="art-gallery-link">
						<div class="thumbnail">
					            <!-- This is where the model goes -->
					            <img src="images/codethumbs/weather.png" />
					        <a href="https://weather.henryd.art" class="art-gallery-link">
						        <div class="caption">
						            <h3>Weather</h3>
						            <p class="art-gallery-price"></p>
						    	</div>
					    	
					    </div>
					</a>
	</div>
	<div class="col-4">
					<a href="https://hop.henryd.art" class="art-gallery-link">
						<div class="thumbnail">
					            <!-- This is where the model goes -->
					            <img src="images/codethumbs/hopthumb.png" />
					        <a href="https://hop.henryd.art" class="art-gallery-link">
						        <div class="caption">
						            <h3>Hop</h3>
						            <p class="art-gallery-price"></p>
						    	</div>
					    	
					    </div>
					</a>
	</div>
	<div class="col-4">
					<a href="https://scribble.henryd.art" class="art-gallery-link">
						<div class="thumbnail">
					            <!-- This is where the model goes -->
					            <img src="images/codethumbs/scribblethumb.png" />
					        <a href="https://scribble.henryd.art" class="art-gallery-link">
						        <div class="caption">
						            <h3>Scribble</h3>
						            <p class="art-gallery-price"></p>
						    	</div>
					    	
					    </div>
					</a>
	</div>
</div>
</div>
</div>
<?=template_footer()?>