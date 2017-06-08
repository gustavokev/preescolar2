	<div class="container">
<section class="bg-info main row">
	
	<aside class="col-md-2 text-center">
	<h2 class="bg-danger">MENU</h2>
	<br>

		<p><a class="btn btn-block btn-success" href="<?php echo base_url('docentes/Docentes') ?>">Docentes</a>
			<a class="btn btn-block btn-success" href="<?php echo base_url('representantes/Representantes') ?>">Representantes</a>
			<a class="btn btn-block btn-success" href="<?php echo base_url('anio/Anio') ?>">Año Escolar</a>
			<a class="btn btn-block btn-success" href="<?php echo base_url('grados/Grados') ?>">Grados</a>
			<a class="btn btn-block btn-success" href="<?php echo base_url('secciones/Secciones') ?>">Secciones</a>
			<a class="btn btn-block btn-success" href="<?php echo base_url('estados/Estados') ?>">Estados</a>
			<a class="btn btn-block btn-success" href="<?php echo base_url('municipios/Municipios') ?>">Municipios</a>
			<a class="btn btn-block btn-success" href="<?php echo base_url('parroquias/Parroquias') ?>">Parroquias</a></p>
	</aside>

	<div class="col-md-10"><br>
	<p><a class="btn btn-info" href="<?php echo base_url() ?>">Inicio</a>
	<a class="btn btn-success" href="<?php echo base_url('alumnos/Alumnos/registrar') ?>" title="">Registrar Alumnos</a></p>

		
		<div class="table-responsive"><br>
			<table class="table table-bordered table-hover table-condensed">
	
		<tr class="danger">
			<th class="text-center"># ID</th>
			<th class="text-center">Nombre</th>
			<th class="text-center">Apellido</th>
			<th class="text-center"><small>Fecha de Nacimiento</small></th>
			<th class="text-center">Sexo</th>
			<th class="text-center">Lugar de nacimiento</th>
			<th class="text-center">Padres</th>
			<th class="text-center">Grado</th>
			<th class="text-center">Seccion</th>
			<th class="text-center">Año</th>
			<th class="text-center">Representante1</th>
			<th class="text-center">Maestro</th>
			<th class="text-center">Editar</th>
			<th class="text-center">Eliminar</th>
		</tr>
	
		<?php
		$i=1;
            foreach ($listar as $alumnos) {
                ?>

		<tr class="">
            <td class="active text-right"><?php echo str_pad($i, 2, "0", STR_PAD_LEFT); ?></td>
			<td class="success"><?php echo mayusculas1($alumnos->nombre_al)?></td>
			<td class="info"><?php echo mayusculas($alumnos->apellido_al)?></td>
			<td class="active"><?php echo dateformat($alumnos->fecha_nac)?></td>
			<td class="warning"><?php echo mayusculas1($alumnos->sexo)?></td>
			<td class="success"><?php echo "Estado ".$alumnos->estado." "."Municipio ".$alumnos->municipio?></td>
			<td class="info"><?php echo $alumnos->padres?></td>
			<td class="active"><?php echo mayusculas1($alumnos->grado)?></td>
			<td class="warning"><?php echo mayusculas($alumnos->seccion)?></td>
			<td class="success text-right"><?php echo $alumnos->anio?></td>
			<td class="info"><?php echo mayusculas1($alumnos->nombre_re)?></td>
			<td class="active"><a class="btn bg-warning" href="<?php echo base_url('alumnos/alumnos/modificar/'.$alumnos->id) ?>">Editar</a></td>
			<td class="active"><a class="btn bg-danger" href="<?php echo base_url('alumnos/alumnos/eliminar/'.$alumnos->id) ?>">Eliminar</a></td>
		</tr>
	
			<?php
			$i++;
                }
                ?>

	</table>
	</div>

</div>

</div>
	
