<?php include "header.php"; ?>

<div id="teknik">
<h2>Teknik Bilgiler</h2>
<?php foreach($db->query('SELECT * FROM teknik') as $row) { ?>
<p><a href="<?php echo $row['pdfyol']; ?>" target="_blank"><?php echo $row['baslik']; ?> <span></span></a></p>
<?php } ?>

</div>
<div id="teknikresim">

<img src="img/tek1.jpg" />
<img src="img/tek2.jpg" />
<img src="img/tek3.jpg" />
<img src="img/tek4.jpg" />
</div>

<?php include "footer.php"; ?>