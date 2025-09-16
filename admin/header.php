<?php include "../config.php";
session_start();

if(empty($_SESSION['admin44'])){

header("Location: login.php");

}
if(empty($_GET['op'])){ $op1 = 0; }else{ $op1 = $_GET['op']; }
if(empty($_GET['islem'])){ $page = "siteayarlari"; }else{ $page = $_GET['islem']; }
 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bordemir Admin Panel</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
   <script src="assets/js/tinymce.min.js"></script>
   <script type="text/javascript">
tinymce.init({
    selector: "textarea",
    theme: "modern",
   language : 'tr_TR',
    height: 300,
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
         "save table contextmenu directionality emoticons template paste textcolor"
   ],
   content_css: "css/content.css",
   toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons", 
   style_formats: [
        {title: 'Bold text', inline: 'b'},
        {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
        {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
        {title: 'Example 1', inline: 'span', classes: 'example1'},
        {title: 'Example 2', inline: 'span', classes: 'example2'},
        {title: 'Table styles'},
        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'},
		
    ]
 }); 

</script>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Bordemir</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><a href="index.php?islem=cikis" class="btn btn-danger square-btn-adjust">Çıkış</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
			
					
                    <li>
                        <a <?php  if($page  == "siteayarlari"){ echo 'class="active-menu"'; } ?>  href="index.php?islem=siteayarlari"><i class="fa fa-dashboard fa-3x"></i> Site Ayarları</a>
                    </li>
                     <li>
                        <a <?php  if($page  == "galeri"){ echo 'class="active-menu"'; } ?> href="index.php?islem=galeri"><i class="fa fa-desktop fa-3x"></i> Foto Galeri</a>
                    </li>
                    <li>
                        <a <?php  if($page  == "haberler"){ echo 'class="active-menu"'; } ?> href="index.php?islem=haberler"><i class="fa fa-qrcode fa-3x"></i> Haberler</a>
                    </li>
						   <li  >
                        <a <?php  if($page  == "hakkimizda"){ echo 'class="active-menu"'; } ?>  href="index.php?islem=hakkimizda"><i class="fa fa-bar-chart-o fa-3x"></i> Hakkımızda</a>
                    </li>	
                      <li  >
                        <a <?php  if($page  == "iletisim"){ echo 'class="active-menu"'; } ?> href="index.php?islem=iletisim"><i class="fa fa-table fa-3x"></i> İletişim</a>
                    </li>
                    <li  >
                        <a <?php  if($page  == "slayt"){ echo 'class="active-menu"'; } ?> href="index.php?islem=slayt"><i class="fa fa-edit fa-3x"></i> Slayt </a>
                    </li>				
					   <li  >
                        <a <?php  if($page  == "sosyal"){ echo 'class="active-menu"'; } ?> href="index.php?islem=sosyal"><i class="fa fa-table fa-3x"></i> Sosyal Ağlar</a>
                    </li>
					   <li  >
                        <a <?php  if($page  == "teknik"){ echo 'class="active-menu"'; } ?> href="index.php?islem=teknik"><i class="fa fa-table fa-3x"></i> Teknik</a>
                    </li>
				   <li  >
                        <a <?php  if($page  == "admin"){ echo 'class="active-menu"'; } ?>  href="index.php?islem=admin"><i class="fa fa-bar-chart-o fa-3x"></i> Admin Girişi</a>
                    </li>
					 <li>
                        <a <?php  if($page  == "urunler"){ echo 'class="active-menu"'; } ?>  href="index.php?islem=urunler"><i class="fa fa-dashboard fa-3x"></i> Ürünler</a>
                    </li>
					   <li  >
                        <a <?php  if($page  == "hizmet"){ echo 'class="active-menu"'; } ?> href="index.php?islem=hizmet"><i class="fa fa-edit fa-3x"></i> Hizmetlerimiz </a>
                    </li>	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->