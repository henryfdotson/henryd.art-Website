<?php
// Check to make sure the id parameter is specified in the URL
if (isset($_GET['id'])) {
    // Prepare statement and execute, prevents SQL injection
    $stmt = $pdo->prepare('SELECT * FROM products WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    // Fetch the product from the database and return the result as an Array
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    // Check if the product exists (array is not empty)
    if (!$product) {
        // Simple error to display if the id for the product doesn't exists (array is empty)
        exit('Product does not exist!');
    }
} else {
    // Simple error to display if the id wasn't specified
    exit('Product does not exist!');
}
?>

<?=template_header('Product')?>
<div class="container">
<div class="row">
<div class="col-md main-content product-content">
        <div class="page-header">
            <h1 class="name"><?=$product['name']?></h1>
        </div>
        <div class="row">
            <div class="col-8">
                <img loading="lazy" class="img-fluid" src="<?=$product['img']?>" ondragstart="return false;" ondrop="return false;" />
            </div>
            <div class="col">
                    <h1><span class="label label-primary">
                        &dollar;<?=$product['price']?>
                        <?php if ($product['rrp'] > 0): ?>
                        <h4 class="rrp">&dollar;<?=$product['rrp']?></h4>
                        <?php endif; ?>
                    </span></h1>
                    <br>
                <form action="index.php?page=cart" method="post">
                    <input type="number" name="quantity" value="1" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
                    <input type="hidden" name="product_id" value="<?=$product['id']?>">
                    <input type="submit" value="Add To Cart" class="add-to-cart">
                </form>
                <div class="description">
                    <?=$product['desc']?>
                </div>
            </div>
        </div>
</div>
</div>
</div>

<?=template_sidebar_closer()?>
<?=template_footer()?>