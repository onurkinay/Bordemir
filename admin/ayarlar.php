    <div class="row">
                <div class="col-md-12">
				<div class="panel panel-default">
                        <div class="panel-heading">
                          Site Ayarları
                        </div> <div class="panel-body">
						<?php 
						if($op1 == 1)
						{
						echo '<div class="alert alert-success" role="alert">Sitenin ayarları değiştirdi</div>';
						}elseif($op1== 2){
						
						echo '<div class="alert alert-danger" role="alert">Hata!</div>';
						}
						
						?>
                            <div class="row">
                                <div class="col-md-6">
                               <?php foreach($db->query('SELECT * FROM ayarlar WHERE id=1') as $row) { ?>
                                    <form role="form" action="operations.php" method="post">
									<input type="hidden" name="op55" value="ayarlar" />
                                     <div class="form-group">
                                            <label>Site Adı</label>
                                            <input class="form-control" name="site" value="<?php echo $row['siteadi']; ?>" />
                                          
                                        </div>
								       <div class="form-group">
                                            <label>Açıklama</label>
                                            <input class="form-control" name="aciklama" value="<?php echo $row['aciklama']; ?>"  />
                                          
                                        </div>
										   <div class="form-group">
                                            <label>Keywords</label>
                                            <input class="form-control" name="keywords" value="<?php echo $row['keywords']; ?>"  />
                                          
                                        </div>
										   <div class="form-group">
                                            <label>E-Mail</label>
                                            <input class="form-control" name="mail" value="<?php echo $row['email']; ?>"  />
                                          
                                        </div>
										   <div class="form-group">
                                            <label>Logo</label>
                                            <input class="form-control" name="logo" value="<?php echo $row['logo']; ?>"  />
                                          
                                        </div>
										
                                        <button type="submit" class="btn btn-primary">Gönder</button>
<?php } ?>
								   </form>
								   </div></div></div></div>
								   </div></div>