<?php
session_start();
// Include functions and connect to the database using PDO MySQL
include 'functions.php';
$pdo = pdo_connect_mysql();

template_header('Contact')?>
<div class="container">
<div class="row">
<div class="col-md main-content">
		<div class="row">
			<div class="col fade-in">
            	<h1>henryfdotson@gmail.com</h1>
        	</div>
        </div>
</div>
</div>
</div>
<?=template_footer()?>