<?php
error_reporting(0);
$yol = "";
 include "config.php"; ?>
<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
<title><?php echo $siteadi; ?></title>
<meta name="description" content="<?php echo $aciklama; ?>"/>
<meta name="keywords" content="<?php echo $keywords; ?>"/>
   
    <link href="css/style.css" rel="stylesheet">
<style type="text/css">
  
    @import "css/reset.css";
  div {margin:0 auto;}
</style>

 <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="js/slider.js"></script>
    	<link rel="stylesheet" href="css/lightbox.css">
	 	<script src="js/lightbox.js"></script>

  </head>
  <body style="background:url(img/fon.jpg); background-repeat:repeat-y;" class="genel">

  <div class="genelbody">
    
<div class="ust" style="">

<div id="logo"><a href="index.php"><img src="<?php echo $logo; ?>" /></a></div>

<div id="search">
<form id="searchbox_006105014630834703805:cos1tar8mwy" action="arama.php"> 
  <input value="006105014630834703805:cos1tar8mwy" name="cx" type="hidden"/> 
  <input value="FORID:11" name="cof" type="hidden"/> 
  <input id="q"  name="q" size="70" type="text" placeholder="Ara..." /> 
  <input value="FORID:11" name="cof" type="hidden"/>


</form> 
</div>
</div>

<div id="menu">
<ul>
<li class="ilk"><a href="index.php" <?php if($_SERVER['SCRIPT_NAME'] == $yol.'/index.php') { echo 'class="active"'; } ?>>Anasayfa</a></li>
<li><a href="kurumsal.php" <?php if($_SERVER['SCRIPT_NAME'] == $yol.'/kurumsal.php') { echo 'class="active"'; } ?>>Kurumsal</a></li>
<li><a href="#" <?php if($_SERVER['SCRIPT_NAME'] == $yol.'/urunler.php') { echo 'class="active"'; } ?>>Ürünler</a>
 <ul>
 <?php foreach($db->query('SELECT * FROM urunler') as $row) { ?> 
                        <li><a href="urunler.php?id=<?php echo $row['id']; ?>"><?php echo $row['baslik']; ?></a></li>
                 <?php } ?>
                    </ul>
</li>
<li><a href="teknik.php" <?php if($_SERVER['SCRIPT_NAME'] == $yol.'/teknik.php') { echo 'class="active"'; } ?>>Teknik</a></li>
<li><a href="fotogaleri.php" <?php if($_SERVER['SCRIPT_NAME'] == $yol.'/fotogaleri.php') { echo 'class="active"'; } ?>>Foto Galeri</a></li>
<li class="son"><a href="iletisim.php" <?php if($_SERVER['SCRIPT_NAME'] == $yol.'/iletisim.php') { echo 'class="active"'; } ?>>İletişim</a></li>
</ul>
</div>
