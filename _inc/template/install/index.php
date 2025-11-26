<br>
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="panel panel-default header">
                <div class="panel-heading text-center bg-database">
                    <h2>Lista de verificación previa a la instalación</h2>
                    <p>Ejecutando el paso 1 de 6</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">   
            <div class="panel panel-default menubar">
                <div class="panel-heading bg-white">
            		<ul class="nav nav-pills">
            		  	<li class="active">
                            <a href="index.php">Lista de Verificación</a>
                        </li>
                        <li>
                            <a href="#" onClick="return false">Verificación</a>
                        </li>
            		  	<li>
                            <a href="#" onClick="return false">Base de datos</a>
                        </li>
                        <li>
                            <a href="#" onClick="return false">Zona horaria</a>
                        </li>
            		  	<li>
                            <a href="#" onClick="return false">Configuración del sitio</a>
                        </li>
            		  	<li>
                            <a href="#" onClick="return false">¡Hecho!</a>
                        </li>
            		</ul>
                </div>
                <div class="panel-body ins-bg-col" style="margin-top:10px;margin-bottom:10px;">
                	<?php  

                		foreach ($success as $succ) {
                		 	echo "<div class=\"alert alert-success\"><span class=\"fa fa-check-circle\"></span> ". $succ ."</div>";	
                		}

                		foreach ($errors as $er) {
                		 	echo "<div class=\"alert alert-danger\"><span class=\"fa fa-exclamation-circle\"></span> ". $er ."</div>";
                		}
                	?>

                    <?php if(empty($errors)) : ?>
                	   
                        <div class="col-sm-4 col-sm-offset-4 text-center" style="margin-top:10px;">
                            <a href="purchase_code.php" class="btn btn-block btn-success">Próximo paso &rarr;</a>
                        </div>
                    
                    <?php else : ?>
                        
                        <div class="alert alert-warning">
                        Por favor, resuelva todas las advertencias en la lista de verificación para continuar con el siguiente paso.
                        </div>
                    
                    <?php endif; ?>
                </div>
            </div>
            <div class="text-center copyright">&copy; <a href="#">2020</a>, All right reserved.</div>
        </div>
    </div>
</div>