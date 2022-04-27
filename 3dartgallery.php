<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,300" rel="stylesheet" type="text/css">

<?php

while ($row = mysqli_fetch_array($result3d)) {
 ?> 
 <!-- Let's throw in some HTML -->
<div class="art-gallery-item-container">
            <!-- This is where the model goes -->

            <model-viewer bounds="tight" src="<?php echo $row['viewbox']; ?>" ar ar-modes="webxr scene-viewer quick-look" camera-controls environment-image="neutral" poster="poster.png" shadow-intensity="1" auto-rotate></model-viewer>
        <a href="productpage3d.php?ID=<?php echo $row['id'] ?>" class="art-gallery-link">
            <p class="art-gallery-title"><?php echo $row['title'] ?></p>
            <p class="art-gallery-price"><?php //echo $row['price']?></p>
        </a>
</div>
<?php
}
?>