  <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
					<?php 
						if($op1 == 1)
						{
						echo '<div class="alert alert-success" role="alert">Hakkımızda Düzenlendi</div>';
						}elseif($op1== 2){
						
						echo '<div class="alert alert-danger" role="alert">Hata!</div>';
						}
						
						?>
                        <div class="panel-heading">
                           Hakkımızda
                        </div>
                        <div class="panel-body">
                            <div class="row">
							<form action="operations.php" method="post">
							<input type="hidden" name="op55" value="hakkimizda" />
							<?php foreach($db->query('SELECT * FROM hakkimizda WHERE id=1') as $row) { ?>
							<textarea name="hakkimizda" rows="10"><?php echo $row['hakkimizda']; ?></textarea></br>
							<?php } ?>
							 &nbsp;  <button type="submit" class="btn btn-primary">Gönder</button>
							</form>
							</div></div></div></div></div>