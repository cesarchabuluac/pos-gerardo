<br>
<div class="container">
    <div class="row">
	    <div class="col-sm-8 col-sm-offset-2">
	        <div class="panel panel-default header">
		        <div class="panel-heading text-center bg-database">
                    <h2>Configuración de zona horaria</h2>
                    <p>Ejecutando el paso 4 de 6</p>
                </div>
	        </div>
	    </div>
    </div>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">    
		    <div class="panel panel-default menubar">
		        <div class="panel-heading bg-white">
					<ul class="nav nav-pills">
					  	<li>
					  		<a href="index.php">
					  			<span class="fa fa-check"></span> Lista de Verificación
					  		</a>
					  	</li>
					  	<li>
                            <a href="purchase_code.php" >
                            	<span class="fa fa-check"></span> Verificación
                            </a>
                        </li>
					  	<li>
					  		<a href="database.php">
					  			<span class="fa fa-check"></span> Base de datos
					  		</a>
					  	</li>
					  	<li class="active">
					  		<a href="timezone">Zona horaria
					  		</a>
					  	</li>
					  	<li>
					  		<a href="site.php" onClick="return false">Configuración del sitio
					  		</a>
					  	</li>
					  	<li>
					  		<a href="#" onClick="return false">¡Hecho!
					  		</a>
					  	</li>
					</ul>
			    </div>
			    <div class="panel-body ins-bg-col">

			    	<form id="timezoneForm" class="form-horizontal" action="timezone.php" method="post">
						<?php if($errors['timezone'])  
						    echo "<div class='form-group has-error' >";
						else     
						    echo "<div class='form-group' >";
						?>
							<label for="sname" class="col-sm-3 control-label">
							    <p>Zona horaria <span class="text-aqua">*</span></p>
							</label>
							<div class="col-sm-6">
							    <select class="form-control" name="timezone" id="timezone">
									<option selected="selected" disabled hidden value="">
										-- Selecciona la zona horaria --
									</option>
									<?php include('../_inc/helper/timezones.php'); ?>
								</select>
								<p class="control-label">
									<?php echo $errors['timezone']; ?>
								</p>
							</div>
						</div>

						<br>

						<div class="form-group">
				            <div class="col-sm-4 col-sm-offset-3">
				                <!-- <input type="submit" class="btn btn-success" value="Next Step &rarr;" > -->
				                <button class="btn btn-success btn-block ajaxcall" data-form="timezoneForm" data-loading-text="Guardando...">Próximo paso &rarr;</button>
				            </div>
				        </div>
					</form>
			    </div>
			</div>
			<div class="text-center copyright">&copy; <a href="#">2020</a>, All right reserved.</div>
		</div>
	</div>
</div>