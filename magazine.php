<?php
session_start();
// Include functions and connect to the database using PDO MySQL
include 'functions.php';

template_header('Magazine')?>
<div class="container">
<div class="row">
	<div class="col-4">
					<a href="/magazine/issue1.php" class="art-gallery-link">
						<div class="thumbnail">
					            <!-- This is where the model goes -->
					            <img src="images/magazinethumbs/issue1.png" />
					        <a href="/magazine/issue1.php" class="art-gallery-link">
						        <div class="caption">
						            <h3>henryd Magazine: Issue 1</h3>
						            <p class="art-gallery-price"></p>
						    	</div>
					    	
					    </div>
					</a>
	</div>
  <div class="col-4">
					<a href="/magazine/issue2.php" class="art-gallery-link">
						<div class="thumbnail">
					            <!-- This is where the model goes -->
					            <img src="images/magazinethumbs/issue2.png" />
					        <a href="/magazine/issue1.php" class="art-gallery-link">
						        <div class="caption">
						            <h3>henryd Magazine: Issue 2</h3>
						            <p class="art-gallery-price"></p>
						    	</div>
					    	
					    </div>
					</a>
	</div>
</div>
</div>
<?=template_footer()?>