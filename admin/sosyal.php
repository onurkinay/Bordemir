  <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
					<?php 
						if($op1 == 1)
						{
						echo '<div class="alert alert-success" role="alert">Sosyal ağlar Düzenlendi</div>';
						}elseif($op1== 2){
						
						echo '<div class="alert alert-danger" role="alert">Hata!</div>';
						}
						
						?>
                        <div class="panel-heading">
                         Sosyal ağlar
                        </div>
                        <div class="panel-body">
                            <div class="row">
						
                                <div class="col-md-12">
							<form action="operations.php" method="post">
							<input type="hidden" name="op55" value="sosyal" />
							<?php foreach($db->query('SELECT * FROM sosyal WHERE id=1') as $row) { ?>
							  <div class="form-group">
                                            <label>Facebook</label>
                                            <input class="form-control" name="facebook" value="<?php echo $row['facebook']; ?>"  />
                                          
                                        </div>
										  <div class="form-group">
                                            <label>Twitter</label>
                                            <input class="form-control" name="twitter" value="<?php echo $row['twitter']; ?>"  />
                                          
                                        </div>
										  <div class="form-group">
                                            <label>Instagram</label>
                                            <input class="form-control" name="instagram" value="<?php echo $row['instagram']; ?>"  />
                                          
                                        </div>
							<?php } ?>
							 &nbsp;  <button type="submit" class="btn btn-primary">Gönder</button>
							</form>
							</div></div></div></div></div></div>