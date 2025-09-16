    <div class="row">
	<div class="col-md-6">
		<?php 
						if($op1 == 3)
						{
						echo '<div class="alert alert-success" role="alert">Slayt Resmi Silindi</div>';
						}elseif($op1== 4){
						
						echo '<div class="alert alert-danger" role="alert">Hata!</div>';
						}
						
						?>
	    <div class="panel panel-default">
		
                        <div class="panel-heading">
                         Slaytlar
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                      
											<th>Açıklama</th>
                                          <th>Aksiyon</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php foreach($db->query('SELECT * FROM slider')  AS $row){ ?>
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                          
											<td><?php echo $row['aciklama']; ?></td>
                                           <th><a href="operations.php?islem=slaytsil&id=<?php echo $row['id']; ?>">Sil</a></th>
                                        </tr>
                                      <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
	</div>
                <div class="col-md-6">
				<div class="panel panel-default">
                        <div class="panel-heading">
                          Slayt resmi ekle
                        </div> <div class="panel-body">
						<?php 
						if($op1 == 1)
						{
						echo '<div class="alert alert-success" role="alert">Slayt Resmi Eklendi</div>';
						}elseif($op1== 2){
						
						echo '<div class="alert alert-danger" role="alert">Hata!</div>';
						}
						
						?>
                            <div class="row">
                                <div class="col-md-12">
                       
                                    <form role="form" action="operations.php" method="post" enctype="multipart/form-data">
									<input type="hidden" name="op55" value="slaytekle" />
                                  
										   <div class="form-group">
                                            <label>Açıklama</label>
                                            <input class="form-control" name="aciklama"  />
                                          
                                        </div>
								       <div class="form-group">
                                            <label>Resim ekle</label>
                                            <input type="file" class="form-control" name="dosya"  />
                                          
                                        </div>
								   
										
                                        <button type="submit" class="btn btn-primary">Gönder</button>

								   </form>
								   </div></div></div></div>
								   </div></div>