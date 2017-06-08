<div class="container">
<section class="bg-info main row">
	
	<aside class="col-md-2 text-center">
	<h2 class="bg-danger">MENU</h2>
	<br>
			<a class="btn btn-block btn-success" href="<?php echo base_url('alumnos/Alumnos') ?>">Alumnos</a>
			<a class="btn btn-block btn-success" href="<?php echo base_url('anio/Anio') ?>">Año Escolar</a>
			<a class="btn btn-block btn-success" href="<?php echo base_url('grados/Grados') ?>">Grados</a>
			<a class="btn btn-block btn-success" href="<?php echo base_url('secciones/Secciones') ?>">Secciones</a>
			<a class="btn btn-block btn-success" href="<?php echo base_url('estados/Estados') ?>">Estados</a>
			<a class="btn btn-block btn-success" href="<?php echo base_url('municipios/Municipios') ?>">Municipios</a>
			<a class="btn btn-block btn-success" href="<?php echo base_url('parroquias/Parroquias') ?>">Parroquias</a></p>
	</aside>

<div class="col-md-10"><br>

	<div class="form-group has-success">
		<form class="form-horizontal" action="<?php echo base_url('datos/Datos/buscar') ?>" method="post">

		<p><a class="btn btn-info" href="<?php echo base_url() ?>">Inicio</a>
		<a class="btn btn-success" href="<?php echo base_url('datos/Datos/registrar') ?>" title="">Registrar Datos</a>
    
			<input class="btn btn-success" type="submit" value="buscar">
			<input class="form-control-static" type="text" name="busqueda">

		</form>
</div>

		
		<div class="table-responsive">
			<table class="table table-bordered table-hover table-condensed">
	
		<tr class="danger">
			<th class="text-center"># ID</th>
			<th class="text-center">Cedula</th>
			<th class="text-center">Nombre</th>
			<th class="text-center">Apellido</th>
			<th class="text-center">Tlf. Celular</th>
			<th class="text-center">Tlf. Local</th>
			<th class="text-center">Correo Electrónico</th>
			
			<th class="text-center">Editar</th>
			<th class="text-center">Editar</th>
		</tr>
	
		<?php
		$i=1;
            foreach ($listar as $datos) {
                ?>

		<tr class="">
            <td class="active text-right"><?php echo str_pad($i, 2, "0", STR_PAD_LEFT); ?></td>
			<td class="success text-right"><?php echo unidad($datos->cedula)?></td>
			<td class="info"><?php echo mayusculas1($datos->nombre_re)?></td>
			<td class="active"><?php echo mayusculas($datos->apellido_re)?></td>
			<td class="success text-right"><?php echo $datos->telefono_1?></td>
			<td class="active text-right"><?php echo $datos->telefono_2?></td>
			<td class="info text-center"><?php echo $datos->email?></td>
			
			<td class="active text-center"><a class="btn bg-warning" href="<?php echo base_url('datos/Datos/modificar/'.$datos->id) ?>">Editar</a></td>
			<td class="active text-center"><a class="btn bg-danger" href="<?php echo base_url('datos/Datos/eliminar/'.$datos->id) ?>">Eliminar</a></td>
		</tr>

			<?php
			$i++;
                }
                ?>

	</table>
	</div>
</div>

</div>
	

