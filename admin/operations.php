<?php 
ob_start();

function tirnak_replace ($par)
{
	return str_replace(
		array(
			"\'", "\""
			),
		array(
			"&#39;", "&quot;"
		),
		$par
	);
}

$_POST = array_map("tirnak_replace", $_POST);

include "../config.php";

if($_POST['op55'] == "ayarlar"){


$site = $_POST['site'];
$aciklama = $_POST['aciklama'];
$keywords = $_POST['keywords'];
$mail = $_POST['mail'];
$logo = $_POST['logo'];


$query = $db->exec("UPDATE ayarlar SET siteadi='$site', aciklama='$aciklama', keywords='$keywords', email='$mail', logo='$logo' WHERE id='1'");


if($query){
header("Location: index.php?islem=siteayarlari&op=1"); }
else {
header("Location: index.php?islem=siteayarlari&op=2");

}

}elseif($_POST['op55'] == "teknikekle"){


$gecici_ad=$_FILES["dosya"]["tmp_name"];
$kalici_yol_ad= "../upload/".$_FILES["dosya"]["name"]; 

if (copy($gecici_ad,$kalici_yol_ad)){
   }
else {
 header("Location: index.php?islem=teknik&op=2"); }
   
   
   // Sorgumuzu hazırlıyoruz
$query = $db->prepare('INSERT INTO teknik (baslik, pdfyol) VALUES(?, ?)');
 

$query->execute(array($_POST['baslik'], 'upload/'.$_FILES["dosya"]["name"]));

if($query){
header("Location: index.php?islem=teknik&op=1"); }
else {
header("Location: index.php?islem=teknik&op=2");

}
   }elseif($_GET['islem'] == "tekniksil"){
   
   $id = $_GET['id'];
   foreach($db->query("SELECT * FROM teknik WHERE id=$id") as $row) { 
     unlink($_SERVER['DOCUMENT_ROOT']."/".$row['pdfyol']);
	 }
   $query = $db->exec("DELETE FROM teknik WHERE id = $id");
 
   if($query){
header("Location: index.php?islem=teknik&op=3"); }
else {
header("Location: index.php?islem=teknik&op=4");

}
   
   }elseif($_POST['op55'] == "hakkimizda"){
   
   $hakkimizda = $_POST['hakkimizda'];
   $query = $db->exec("UPDATE hakkimizda SET hakkimizda = '$hakkimizda' WHERE id='1'");
   if($query){
header("Location: index.php?islem=hakkimizda&op=1"); }
else {
header("Location: index.php?islem=hakkimizda&op=2");

}
   }elseif($_POST['op55'] == "sosyal"){
   
   $facebook = $_POST['facebook'];
   $twitter = $_POST['twitter'];
   $instagram = $_POST['instagram'];
   
   $query = $db->exec("UPDATE sosyal SET facebook='$facebook', twitter='$twitter', instagram='$instagram' WHERE id='1'");
   if($query){
header("Location: index.php?islem=sosyal&op=1"); }
else {
header("Location: index.php?islem=sosyal&op=2");

}
   
   }elseif($_POST['op55'] == "slaytekle"){
   
   
   
   $gecici_ad=$_FILES["dosya"]["tmp_name"];
$kalici_yol_ad= $_SERVER['DOCUMENT_ROOT']."/upload/".$_FILES["dosya"]["name"]; 

if (copy($gecici_ad,$kalici_yol_ad)){
   }
else {
 header("Location: index.php?islem=slayt&op=2"); }
   
   
   // Sorgumuzu hazırlıyoruz
$query = $db->prepare('INSERT INTO slider (aciklama, resim) VALUES(?, ?)');
 

$query->execute(array($_POST['aciklama'], 'upload/'.$_FILES["dosya"]["name"]));

if($query){
header("Location: index.php?islem=slayt&op=1"); }
else {
header("Location: index.php?islem=slayt&op=2");

}
   
   }elseif($_GET['islem'] == "slaytsil"){
   
     $id = $_GET['id'];
   foreach($db->query("SELECT * FROM slider WHERE id=$id") as $row) { 
     unlink($_SERVER['DOCUMENT_ROOT']."/".$row['resim']);
	 }
   $query = $db->exec("DELETE FROM slider WHERE id = $id");
 
   if($query){
header("Location: index.php?islem=slayt&op=3"); }
else {
header("Location: index.php?islem=slayt&op=4");

}
   
   
   }elseif($_POST['op55'] == "admin"){
   
     $ka = $_POST['ka'];
   $sifre = md5($_POST['pass']);
 
   
   $query = $db->exec("UPDATE admin SET ka='$ka', sifre='$sifre' WHERE id='1'");
   if($query){
header("Location: index.php?islem=admin&op=1"); }
else {
header("Location: index.php?islem=admin&op=2");
   
   }
   }elseif($_POST['op55'] == "haberekle"){
   
      // Sorgumuzu hazırlıyoruz
$query = $db->prepare('INSERT INTO haberler (baslik, detay) VALUES(?, ?)');
 

$query->execute(array($_POST['baslik'], $_POST['haber']));

if($query){
header("Location: index.php?islem=haberler&op=1"); }
else {
header("Location: index.php?islem=haberler&op=2");

}
   
   
   }elseif($_GET['islem'] == "habersil"){
   
      $id = $_GET['id'];
    $query = $db->exec("DELETE FROM haberler WHERE id = $id");
 
   if($query){
header("Location: index.php?islem=haberler&op=3"); }
else {
header("Location: index.php?islem=haberler&op=4");

}
   
   
   }elseif($_POST['op55'] == "yerekle"){
   
   
   $query = $db->prepare('INSERT INTO iletisim (ad, adres, tel, fax, harita) VALUES(?, ?, ?, ?, ?)');
 

$query->execute(array($_POST['ad'], $_POST['adres'], $_POST['tel'], $_POST['fax'], $_POST['harita']));

if($query){
header("Location: index.php?islem=iletisim&op=1"); }
else {
header("Location: index.php?islem=iletisim&op=2");

}
   
   
   }elseif($_GET['islem'] == "yersil"){
   
   
       $id = $_GET['id'];
    $query = $db->exec("DELETE FROM iletisim WHERE id = $id");
 
   if($query){
header("Location: index.php?islem=iletisim&op=3"); }
else {
header("Location: index.php?islem=iletisim&op=4");

}
   
   }elseif($_POST['op55'] == "resimekle"){
   

   
   
      $gecici_ad=$_FILES["dosya"]["tmp_name"];
$kalici_yol_ad= $_SERVER['DOCUMENT_ROOT']."/upload/".$_FILES["dosya"]["name"]; 

if (copy($gecici_ad,$kalici_yol_ad)){
   }
else {
 header("Location: index.php?islem=galeri&op=2"); }
   
      

include("resimclass.php");


$resizeObj = new resize($kalici_yol_ad);

$resizeObj -> resizeImage(141, 141, 'landscape');

$resizeObj -> saveImage($_SERVER['DOCUMENT_ROOT'].'/upload/t_'.$_FILES["dosya"]["name"], 85);


$query = $db->prepare('INSERT INTO galeri (resim, thumb) VALUES(?, ?)');
 

$query->execute(array('upload/'.$_FILES["dosya"]["name"], 'upload/t_'.$_FILES["dosya"]["name"]));

if($query){
header("Location: index.php?islem=galeri&op=1"); }
else {
header("Location: index.php?islem=galeri&op=2");

}
   
   
   }elseif($_GET['islem']=="resimsil"){
   
     $id = $_GET['id'];
   foreach($db->query("SELECT * FROM galeri WHERE id=$id") as $row) { 
     unlink($_SERVER['DOCUMENT_ROOT']."/".$row['resim']);
	   unlink($_SERVER['DOCUMENT_ROOT']."/".$row['thumb']);
	 }
   $query = $db->exec("DELETE FROM galeri WHERE id = $id");
 
   if($query){
header("Location: index.php?islem=galeri&op=3"); }
else {
header("Location: index.php?islem=galeri&op=4");

}
   
   }elseif($_POST['op55'] == "urunekle"){
   
      // Sorgumuzu hazırlıyoruz
$query = $db->prepare('INSERT INTO urunler (baslik, detay) VALUES(?, ?)');
 

$query->execute(array($_POST['baslik'], $_POST['detay']));

if($query){
header("Location: index.php?islem=urunler&op=1"); }
else {
header("Location: index.php?islem=urunler&op=2");

}
   
   
   }elseif($_GET['islem'] == "urunsil"){
   
      $id = $_GET['id'];
    $query = $db->exec("DELETE FROM urunler WHERE id = $id");
 
   if($query){
header("Location: index.php?islem=urunler&op=3"); }
else {
header("Location: index.php?islem=urunler&op=4");

}
}elseif($_POST['op55'] == "hizmet"){

   
   $hizmetlerimiz = $_POST['hizmetlerimiz'];
   $query = $db->exec("UPDATE hizmetlerimiz SET hizmetlerimiz = '$hizmetlerimiz' WHERE id='1'");
   if($query){
header("Location: index.php?islem=hizmetlerimiz&op=1"); }
else {
header("Location: index.php?islem=hizmetlerimiz&op=2");

}
}elseif($_POST['op55'] == "yerduzenle"){


   $query = $db->prepare('UPDATE iletisim SET ad=?, adres=?, tel=?, fax=?, harita=? WHERE id='.$_POST['id']);
 

$query->execute(array($_POST['ad'], $_POST['adres'], $_POST['tel'], $_POST['fax'], $_POST['harita']));

if($query){
header("Location: index.php?islem=iletisim&op=5"); }
else {
header("Location: index.php?islem=iletisim&op=6");

}
   
}elseif($_POST['op55'] == "haberup"){


   $query = $db->prepare('UPDATE haberler SET baslik=?, detay=? WHERE id='.$_POST['id']);
 

$query->execute(array($_POST['baslik'], $_POST['haber']));

if($query){
header("Location: index.php?islem=haberler&op=5"); }
else {
header("Location: index.php?islem=haberler&op=6");

}
   

}
ob_end_flush();
?>