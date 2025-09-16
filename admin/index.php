<?php include "header.php"; ?>

     <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                <div class="col-md-12">           
		
		<?php

switch($page){

case 'siteayarlari': include "ayarlar.php" ;break;
case 'galeri': include "galeri.php";break;
case 'haberler': include "haberler.php";break;
case 'hakkimizda': include "hakkimizda.php";break;
case 'iletisim': include "iletisim.php";break;
case 'slayt': include "slayt.php";break;
case 'sosyal': include "sosyal.php";break;
case 'teknik': include "teknik.php";break;
case 'admin': include "admin.php";break;
case 'urunler': include "urunler.php"; break;
case 'hizmet': include "hizmetlerimiz.php"; break;
case 'cikis': unset($_SESSION['admin44']); ?><meta http-equiv="refresh" content="0;URL=login.php"><?php break;


}

		?>
		
		     </div>
			 </div>
			 </div>
			 </div>
			 <?php include "footer.php"; ?>