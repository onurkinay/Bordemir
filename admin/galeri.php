    <div class="row">
	<div class="col-md-6">
		<?php 
						if($op1 == 3)
						{
						echo '<div class="alert alert-success" role="alert">Resim Silindi</div>';
						}elseif($op1== 4){
						
						echo '<div class="alert alert-danger" role="alert">Hata!</div>';
						}
						
						?>
	    <div class="panel panel-default">
		
                        <div class="panel-heading">
                       Resimler
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Resim</th>
                                          <th>Aksiyon</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php foreach($db->query('SELECT * FROM galeri')  AS $row){ ?>
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['resim']; ?></td>
                                           <th><a href="operations.php?islem=resimsil&id=<?php echo $row['id']; ?>">Sil</a></th>
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
                          Resim ekle
                        </div> <div class="panel-body">
						<?php 
						if($op1 == 1)
						{
						echo '<div class="alert alert-success" role="alert">Resim Eklendi</div>';
						}elseif($op1== 2){
						
						echo '<div class="alert alert-danger" role="alert">Hata!</div>';
						}
						
						?>
                            <div class="row">
                                <div class="col-md-12">
                       
                                    <form role="form" action="operations.php" method="post" enctype="multipart/form-data">
									<input type="hidden" name="op55" value="resimekle" />
                                  
								       <div class="form-group">
                                            <label>Resim</label>
                                            <input type="file" class="form-control" name="dosya"  />
                                          
                                        </div>
								   
										
                                        <button type="submit" class="btn btn-primary">Gönder</button>

								   </form>
								   </div></div></div></div>
								   </div></div>