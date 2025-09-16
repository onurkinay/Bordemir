<div class="row">
	<div class="col-md-12">
		<?php 
						if($op1 == 3)
						{
						echo '<div class="alert alert-success" role="alert">Yer Silindi</div>';
						}elseif($op1== 4){
						
						echo '<div class="alert alert-danger" role="alert">Hata!</div>';
						}
						
						if($op1 == 5)
						{
						echo '<div class="alert alert-success" role="alert">Yer Düzenlendi</div>';
						}elseif($op1== 6){
						
						echo '<div class="alert alert-danger" role="alert">Hata!</div>';
						}
						
						?>
						
	    <div class="panel panel-default">
		
                        <div class="panel-heading">
                         Adresler
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Başlık</th>
                                          <th>Aksiyon</th>
										
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php foreach($db->query('SELECT * FROM iletisim')  AS $row){ ?>
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['ad']; ?></td>
                                           <th><a href="index.php?islem=iletisim&id=<?php echo $row['id']; ?>">Düzenle</a>
										    <a href="operations.php?islem=yersil&id=<?php echo $row['id']; ?>">Sil</a></th>
                                        </tr>
                                      <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
	</div>
                <div class="col-md-12">
				<div class="panel panel-default">
				   <?php if(empty($_GET['id'])){ ?> 
                        <div class="panel-heading">
                         Yer ekle
                        </div> <div class="panel-body">
						<?php 
						if($op1 == 1)
						{
						echo '<div class="alert alert-success" role="alert">Yer Eklendi</div>';
						}elseif($op1== 2){
						
						echo '<div class="alert alert-danger" role="alert">Hata!</div>';
						}
						
						?>
                            <div class="row">
                                <div class="col-md-12">
                       
                                    <form role="form" action="operations.php" method="post" enctype="multipart/form-data">
									<input type="hidden" name="op55" value="yerekle" />
                                     <div class="form-group">
                                            <label>Yer adı</label>
                                            <input class="form-control" name="ad"  />
                                          
                                        </div>
								       <div class="form-group">
                                            <label>Adres</label>
                                            <input type="text" class="form-control" name="adres"  />
                                          
                                        </div>
										 <div class="form-group">
                                            <label>Telefon</label>
                                            <input type="text" class="form-control" name="tel"  />
                                            <p class="help-block">Her telefon için 3 çizgi(---) ekleyiniz. Örn: 0212xxx --- 0216xxx</p>
                                        </div>
										 <div class="form-group">
                                            <label>Fax</label>
                                            <input type="text" class="form-control" name="fax"  />
                                             <p class="help-block">Her fax için 3 çizgi(---) ekleyiniz. Örn: 0212xxx --- 0216xxx</p>
                                        </div>
								  
                                            <input type="hidden" value="s" class="form-control" name="harita"  />
                                     
										
                                        <button type="submit" class="btn btn-primary">Gönder</button>

								   </form>
								   </div></div></div>
								   
								   <?php }else{ 
								   $id = $_GET['id'];
								    foreach($db->query('SELECT * FROM iletisim WHERE id='.$id) as $row) { ?>
								     <div class="panel-heading">
                         Yer bilgileri değiştir
                        </div> <div class="panel-body">
					
                            <div class="row">
                                <div class="col-md-12">
                       
                                    <form role="form" action="operations.php" method="post" enctype="multipart/form-data">
									<input type="hidden" name="op55" value="yerduzenle" />
										<input type="hidden" name="id" value="<?php echo $id; ?>" />
                                     <div class="form-group">
                                            <label>Yer adı</label>
                                            <input class="form-control" name="ad" value="<?php echo $row['ad']; ?>"  />
                                          
                                        </div>
								       <div class="form-group">
                                            <label>Adres</label>
                                            <input type="text" class="form-control" name="adres" value="<?php echo $row['adres']; ?>"  />
                                          
                                        </div>
										 <div class="form-group">
                                            <label>Telefon</label>
                                            <input type="text" class="form-control" name="tel" value="<?php echo $row['tel']; ?>" />
                                            <p class="help-block">Her telefon için 3 çizgi(---) ekleyiniz. Örn: 0212xxx --- 0216xxx</p>
                                        </div>
										 <div class="form-group">
                                            <label>Fax</label>
                                            <input type="text" class="form-control" name="fax" value="<?php echo $row['fax']; ?>" />
                                             <p class="help-block">Her fax için 3 çizgi(---) ekleyiniz. Örn: 0212xxx --- 0216xxx</p>
                                        </div>
								    <input type="hidden" value="s" class="form-control" name="harita"  />
                                     
                                        <button type="submit" class="btn btn-primary">Gönder</button>

								   </form>
								   </div></div></div>
								   
								   
								   <?php
								 }  } ?>
								   </div>
								   </div></div>
								   