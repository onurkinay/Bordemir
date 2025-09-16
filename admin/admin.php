    <div class="row">
                <div class="col-md-12">
				<div class="panel panel-default">
                        <div class="panel-heading">
                        Admin girişi
                        </div> <div class="panel-body">
						<?php 
						if($op1 == 1)
						{
						echo '<div class="alert alert-success" role="alert">Admin giriş bilgileri değiştirdi</div>';
						}elseif($op1== 2){
						
						echo '<div class="alert alert-danger" role="alert">Hata!</div>';
						}
						
						?>
                            <div class="row">
                                <div class="col-md-6">
                             
                                    <form role="form" action="operations.php" method="post">
									<input type="hidden" name="op55" value="admin" />
                                     <div class="form-group">
                                            <label>Kullanıcı Adı</label>
                                            <input class="form-control" name="ka" value="" />
                                          
                                        </div>
								       <div class="form-group">
                                            <label>Şifre</label>
                                            <input class="form-control" name="pass" type="password" />
                                      
										</br>
                                        <button type="submit" class="btn btn-primary">Gönder</button>

								   </form>
								   </div></div></div></div>
								   </div></div>