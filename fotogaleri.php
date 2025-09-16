<?php include "header.php"; ?>

<div id="galeri">
<div class="image-row">
					<div class="image-set">
<?php foreach($db->query('SELECT * FROM galeri') as $row) { ?>
<a class="example-image-link" href="<?php echo $row['resim']; ?>" data-lightbox="example-set"><img width="141" height="141" class="example-image" src="<?php echo $row['thumb']; ?>" alt="image-1"/></a>
<?php } ?>
</div></div>
<div class="height"></div>
</div>


<?php include "footer.php"; ?>