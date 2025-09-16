<?php
 $dsn = 'mysql:host=127.0.0.1;dbname=bordemir';
$user = 'root';
$password = 'root';

try {
    $db = new PDO($dsn, $user, $password);
	$db -> exec("set names utf8");
} catch (PDOException $e) {
    echo 'Baðlantý Hatasý : ' . $e->getMessage();
}

 foreach($db->query('SELECT * FROM ayarlar WHERE id = 1') as $row) { 
 
 $siteadi = $row['siteadi'];
$aciklama = $row['aciklama'];
 $keywords = $row['keywords'];
 $email = $row['email'];
$logo = $row['logo'];
 }
?>
