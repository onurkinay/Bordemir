<?php include "header.php"; ?>
<div id="con">
<div id="consol">

<h1>İletişim Bilgileri</h1>
<p class="baslik">Bordemir Çelik Çekme Boru Sanayi Ticaret Limited Şirketi</p>

<?php foreach($db->query('SELECT * FROM iletisim') as $row) { ?>
<p class="baslik"><?php echo  $row['ad']; ?></p>
<p><?php echo  $row['adres']; ?></p>

<p>Tel </p>
<div id="tel">
<?php $telefon = explode("---",$row['tel']);

foreach($telefon AS $tel){

?>
<p class="telefon"><?php echo $tel; ?>  </p>
<?php

}


 ?>


</div>

<p>Fax </p>
<div id="tel">
<?php $fax = explode("---",$row['fax']);

foreach($fax AS $fax1){

?>
<p class="telefon"><?php echo $fax1; ?>  </p>
<?php

}


 ?>
</div>

<div style="height:113px;"></div>
<?php
}
 ?>

<p class="mail">satis@bor-demir.com.tr</p>
<p class="mail">muhasebe@bor-demir.com.tr</p>
<p class="mail">info@bor-demir.com.tr</p>
</div>


<div id="consag">
<h1>Konumumuz</h1>



<?php foreach($db->query('SELECT * FROM iletisim') as $row) { 

$adres = str_replace( ' ', '+', $row['adres']); 
?>

<div class="kutu"><iframe
  width="440"
  height="217"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyArN6gf_Bo157-tArEEreFmR72mfzIjFQs
    &q=<?php echo $adres; ?>" >
</iframe></div>
<?php } ?>
</div>
</div>
<?php include "footer.php"; ?>