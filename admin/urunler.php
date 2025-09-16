    <div class="row">

                <div class="col-md-12">
				<div class="panel panel-default">
                        <div class="panel-heading">
                          Ürün ekle
                        </div> <div class="panel-body">
						<?php 
						if($op1 == 1)
						{
						echo '<div class="alert alert-success" role="alert">Ürün Eklendi</div>';
						}elseif($op1== 2){
						
						echo '<div class="alert alert-danger" role="alert">Hata!</div>';
						}
						
						?>
                            <div class="row">
                                <div class="col-md-12">
                       
                                    <form role="form" action="operations.php" method="post" enctype="multipart/form-data">
									<input type="hidden" name="op55" value="urunekle" />
                                     <div class="form-group">
                                            <label>Başlık</label>
                                            <input class="form-control" name="baslik"  />
                                          
                                        </div>
								       <div class="form-group">
                                            <label>Detay</label>
                                        <textarea name="detay" ></textarea>
                                          
                                        </div>
								   
										
                                        <button type="submit" class="btn btn-primary">Gönder</button>

								   </form>
								   </div></div></div></div>
								   </div>
								   	<div class="col-md-12">
		<?php 
						if($op1 == 3)
						{
						echo '<div class="alert alert-success" role="alert">Ürün Silindi</div>';
						}elseif($op1== 4){
						
						echo '<div class="alert alert-danger" role="alert">Hata!</div>';
						}
						
						?>
	    <div class="panel panel-default">
		
                        <div class="panel-heading">
                 Ürünler
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
									<?php foreach($db->query('SELECT * FROM urunler')  AS $row){ ?>
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['baslik']; ?></td>
                                           <th><a href="operations.php?islem=urunsil&id=<?php echo $row['id']; ?>">Sil</a></th>
                                        </tr>
                                      <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
	</div>
								   </div>