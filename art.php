<?php
session_start();
// Include functions and connect to the database using PDO MySQL
include 'functions.php';
$pdo = pdo_connect_mysql();

// Get the 4 most recently added products
$stmt = $pdo->prepare('SELECT * FROM products  ORDER BY id DESC');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?=template_header('Art')?>

<div class="col-9">
        <div class="products">
            <?php foreach ($recently_added_products as $product): ?>
            <div class="art-gallery-item-container">
                <a href="index.php?page=product&id=<?=$product['id']?>" class="product">
                    <img class="art-gallery-thumb" src="<?=$product['img']?>" alt="<?=$product['name']?> ondragstart="return false;" ondrop="return false;" />
                    <p class="art-gallery-title"><?=$product['name']?></p>
                    <p class="price art-gallery-price">
                        &dollar;<?=$product['price']?>
                        <?php if ($product['rrp'] > 0): ?>
                        <span class="rrp">&dollar;<?=$product['rrp']?></span>
                        <?php endif; ?>
                    </p>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
</div>

<?=template_footer()?>