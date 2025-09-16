<?php include "header.php"; ?>
<div id="sayfa"> <?php foreach($db->query('SELECT * FROM haberler WHERE id='.$_GET['id']) as $row) { 
 
echo "<h2>".$row['baslik']."</h2>";

 echo $row['detay'];
 
 } ?> 
</div>
<?php include "footer.php"; ?>