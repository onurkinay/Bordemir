
<div id="ft2">
	<div class="detay">
	<h3>Bizi Takip Edin</h3>
	<img src="img/sosyal.jpg" />
	
	</div>

		<div class="sosyal">
	<h3>Sosyal Medya</h3>
<?php foreach($db->query('SELECT * FROM sosyal WHERE id = 1') as $row) { ?>
<div class="sosyal1">	<a class="link" href="http://facebook.com/<?php echo $row['facebook']; ?>"><img src="img/facebook.jpg" /><p class="sosyal"> / <?php echo $row['facebook']; ?></a><hr width="170px" size="1" color="#fff" align="left" style="margin-top:-15px;margin-left:48px;" /></p></div>
<div class="sosyal1"><a class="link" href="http://twitter.com/<?php echo $row['twitter']; ?>"><img src="img/twitter.jpg" /><p class="sosyal"> / <?php echo $row['twitter']; ?> </a><hr width="170px" size="1" color="#fff" align="left" style="margin-top:-15px;margin-left:48px;"/></p></div>
<div class="sosyal1"><a class="link" href="http://instagram.com/<?php echo $row['instagram']; ?>"><img src="img/instagram.jpg" /><p class="sosyal"> / <?php echo $row['instagram']; ?></a> <hr width="170px" size="1" color="#fff" align="left" style="margin-top:-15px;margin-left:48px;" /></p></div>
<?php } ?>
	</div>
	
		<div class="iletisim">
	<h3>İletişim</h3>
	<?php if(!EMPTY($_POST['mesaj'])){
	
	include 'class.phpmailer.php';
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Host = 'mail.bor-demir.com.tr';
$mail->Port = 587;
$mail->Username = 'deneme@bor-demir.com.tr';
$mail->Password = 'bordemir123';
$mail->SetFrom($mail->Username, 'Bordemir Info');
$mail->AddAddress('deneme@bor-demir.com.tr', 'Bordemir');
$mail->CharSet = 'UTF-8';
$mail->Subject = 'Bordemir mail';
$mail->MsgHTML("Bordemir web sitesinden mesaj var </br> İsim: ".$_POST['isim']."</br>E-Mail: ".$_POST['mail']."</br> Mesaj: ".$_POST['mesaj']);
if($mail->Send()) {
    echo '<script>alert("Mesajınız Gönderildi. En kısa sürede iletişime geçilecektir");</script>';
} else {
 
}
	
	
	
	} ?>
	<form method="post" action="">
	<label>İsim</label><input value="" type="text" name="isim" /></br>
	<label>E-Mail</label><input value="" type="email" name="mail" /></br>
	<label>Mesaj</label><textarea rows="10" name="mesaj"></textarea>
	<input type="submit" value="Gönder" />
	</form>
	
	</div>
	
	<div id="footer">Designed by www.gokturkmedya.com | Tüm hakları BORDEMİR'e aittir</div>
	</div>
</body></html>

<?php $db = null; ?>