<?php
session_start();
// Include functions and connect to the database using PDO MySQL
include 'functions.php';
$pdo = pdo_connect_mysql();

template_header('Place Order')?>
<div class="container">
<div class="row">
<div class="col-md main-content">
        <div class="row">
            <div class="col">
                <h1>Congrats, your order has been placed!</h1>
                <p>Thank you for supporting the arts, I'll contact you by email with your order details. -henryd</p>
            </div>
        </div>
</div>
</div>
</div>
<?=template_footer()?>