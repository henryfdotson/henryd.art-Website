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

<?=template_header('Products')?>

<div class="container">
<div class="row">
<div class="col-md main-content">
    <div class="page-header">
    <h1>Art</h1>
    </div>
    <div class="row products">
            <?php foreach ($recently_added_products as $product): ?>
            <div class="col-sm-4">
                <a href="index.php?page=product&id=<?=$product['id']?>" class="product">
                    <div class="thumbnail fade-in">
                      <img loading="lazy" class="img-fluid rounded" src="<?=$product['img']?>" alt="<?=$product['name']?>" ondragstart="return false" ondrop="return false;" />
                      <div class="caption">
                        <h3><?=$product['name']?></h3>
                        <p class="price art-gallery-price">
                            &dollar;<?=$product['price']?>
                            <?php if ($product['rrp'] > 0): ?>
                            <span class="rrp">&dollar;<?=$product['rrp']?></span>
                            <?php endif; ?>
                        </p>
                      </div>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
    </div>
</div>
</div>
</div>

<?=template_sidebar_closer()?>
<?=template_footer()?>