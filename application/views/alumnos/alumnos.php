	
	<div class="container">

	<section class="bg-info main row">
	
	<aside class="col-md-2 text-center">
	<h2 class="bg-danger">MENU</h2>
	<br>

		<p><a class="btn btn-block btn-success" href="<?php echo base_url('index.php/docentes/Docentes') ?>">Docentes</a>
			<a class="btn btn-block btn-success" href="<?php echo base_url('index.php/representantes/Representantes') ?>">Representantes</a>
			<a class="btn btn-block btn-success" href="<?php echo base_url('index.php/anio/Anio') ?>">Año Escolar</a>
			<a class="btn btn-block btn-success" href="<?php echo base_url('index.php/grados/Grados') ?>">Grados</a>
			<a class="btn btn-block btn-success" href="<?php echo base_url('index.php/secciones/Secciones') ?>">Secciones</a>
			<a class="btn btn-block btn-success" href="<?php echo base_url('index.php/estados/Estados') ?>">Estados</a>
			<a class="btn btn-block btn-success" href="<?php echo base_url('index.php/municipios/Municipios') ?>">Municipios</a>
			<a class="btn btn-block btn-success" href="<?php echo base_url('index.php/parroquias/Parroquias') ?>">Parroquias</a></p>
	</aside>

	<div class="col-md-10"><br>
	<p><a class="btn btn-info" href="<?php echo base_url() ?>">Inicio</a>
	<a class="btn btn-success" href="<?php echo base_url('alumnos/Alumnos/registrar') ?>" title="">Registrar Alumnos</a></p>

		<div class="text-center">
			<h3 class="text-danger"><u>Alumno y Representante Principale: </u></h3>
		</div>
		<div class="table-responsive"><br>
			<table class="table table-bordered table-hover table-condensed">
	
		<tr class="danger">
			<th class="text-center"># ID</th>
			<th class="text-center">Nombre y Apellido</th>

			<th class="text-center">Detalles</th>
			<th class="text-center">Editar</th>
			<th class="text-center">Eliminar</th>
		</tr>
	
		<?php
		$i=1;
            foreach ($listar as $alumnos) {
                ?>

		<tr class="">
            <td class="active text-right"><?php echo str_pad($i, 2, "0", STR_PAD_LEFT); ?></td>
			<td class="success"><?php echo mayusculas1($alumnos->nombre_al)." ".mayusculas($alumnos->apellido_al)?></td>

			<td class="active"><a class="btn bg-warning" href="<?php echo base_url('alumnos/Alumnos/detalles/'.$alumnos->id) ?>">Detalles</a></td>
			<td class="active"><a class="btn bg-warning" href="<?php echo base_url('alumnos/Alumnos/modificar/'.$alumnos->id) ?>">Editar</a></td>
			<td class="active"><a class="btn bg-danger" href="<?php echo base_url('alumnos/Alumnos/eliminar/'.$alumnos->id) ?>">Eliminar</a></td>
		</tr>
	
			<?php
			$i++;
                }
                ?>

	</table>
	</div>

</div>

</div>
	
