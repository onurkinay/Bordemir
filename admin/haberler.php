    <div class="row">

                <div class="col-md-12">
				<div class="panel panel-default">
				<?php if(!empty($_GET['id'])){ ?>
				<div class="panel panel-default">
                        <div class="panel-heading">
                          Haber düzenle
                        </div> <div class="panel-body">
						<?php 
						if($op1 == 5)
						{
						echo '<div class="alert alert-success" role="alert">Haber düzenlendi</div>';
						}elseif($op1== 6){
						
						echo '<div class="alert alert-danger" role="alert">Hata!</div>';
						}
						
						?>
                            <div class="row">
                                <div class="col-md-12">
                       <?php foreach($db->query('SELECT * FROM haberler WHERE id='.$_GET['id']) as $row) { ?>
                                    <form role="form" action="operations.php" method="post" enctype="multipart/form-data">
									<input type="hidden" name="op55" value="haberup" />
									<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>" />
                                     <div class="form-group">
                                            <label>Başlık</label>
                                            <input class="form-control" name="baslik" value="<?php echo $row["baslik"]; ?>" />
                                          
                                        </div>
								       <div class="form-group">
                                            <label>Haber</label>
                                        <textarea name="haber"> <?php echo $row["detay"]; ?></textarea>
                                          
                                        </div>
								   
										
                                        <button type="submit" class="btn btn-primary">Gönder</button>

								   </form>
								   </div></div></div>
								   <?php } }else{ ?>
                        <div class="panel-heading">
                          Haber ekle
                        </div> <div class="panel-body">
						<?php 
						if($op1 == 1)
						{
						echo '<div class="alert alert-success" role="alert">Haber Eklendi</div>';
						}elseif($op1== 2){
						
						echo '<div class="alert alert-danger" role="alert">Hata!</div>';
						}
						
						?>
                            <div class="row">
                                <div class="col-md-12">
                       
                                    <form role="form" action="operations.php" method="post" enctype="multipart/form-data">
									<input type="hidden" name="op55" value="haberekle" />
                                     <div class="form-group">
                                            <label>Başlık</label>
                                            <input class="form-control" name="baslik"  />
                                          
                                        </div>
								       <div class="form-group">
                                            <label>Haber</label>
                                        <textarea name="haber" ></textarea>
                                          
                                        </div>
								   
										
                                        <button type="submit" class="btn btn-primary">Gönder</button>

								   </form>
								   </div></div></div><?php } ?></div>
								   </div>
								   	<div class="col-md-12">
		<?php 
						if($op1 == 3)
						{
						echo '<div class="alert alert-success" role="alert">Haber Silindi</div>';
						}elseif($op1== 4){
						
						echo '<div class="alert alert-danger" role="alert">Hata!</div>';
						}
						
						?>
	    <div class="panel panel-default">
		
                        <div class="panel-heading">
                     Haberler
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
									<?php foreach($db->query('SELECT * FROM haberler')  AS $row){ ?>
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['baslik']; ?></td>
                                           <th><a href="operations.php?islem=habersil&id=<?php echo $row['id']; ?>">Sil</a>
										   <a href="index.php?islem=haberler&id=<?php echo $row['id']; ?>">Düzenle</a>
                                        </tr>
                                      <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
	</div>
								   </div>