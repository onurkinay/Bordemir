<?php include "header.php"; ?>

<div id="sayfa">
<h2>Hizmetlerimiz</h2>
 <?php foreach($db->query('SELECT * FROM hizmetlerimiz WHERE id=1') as $row) { 
 
 echo $row['hizmetlerimiz'];
 
 } ?> 
</div>

<?php include "footer.php"; ?>