<?php include "header.php"; ?>
<div id="sayfa">
<h2>Hakkımızda</h2>
 <?php foreach($db->query('SELECT * FROM hakkimizda WHERE id=1') as $row) { 
 
 echo $row['hakkimizda'];
 
 } ?> 
</div>
<?php include "footer.php"; ?>