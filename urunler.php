<?php include "header.php"; $id = $_GET['id']; ?>
 <?php foreach($db->query('SELECT * FROM urunler WHERE id='.$id) as $row) { ?> 
<div id="urunler">

<?php
echo "<h2>".$row['baslik']."</h2>";
echo $row['detay'];

 } ?>
</div>

<?php include "footer.php"; ?>