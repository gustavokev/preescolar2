
<link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css') ?>">
<div class="container text-center">
<h2>Alumno:</h2>
</div>
<div class="container">

        <?php
        if(isset($id)){
            $cedula = $alumnos->cedula;
            $cedula_escolar = $alumnos->cedula_escolar;
            $nombre_al = $alumnos->nombre_al;
            $apellido_al = $alumnos->apellido_al;
            $fecha_nac = $alumnos->fecha_nac;
            $nombre_re = $alumnos->nombre_re;
            $sexo = $alumnos->sexo;
            $estado = $alumnos->estado;
            $municipio = $alumnos->municipio;
            ?>
            <input type="hidden" name="id" value="<?php echo $id?>">
            <?php
        }
        ?>
	<div class="row">
	
    <div class="form-group has-success col-md-3">
        <label for="nombre_al" class="control-label">Cédula Escolar: 
            <h3><?php echo $cedula_escolar."-".$cedula?></h3>
        </label>    
    </div>

    <div class="form-group has-success col-md-3">
        <label for="nombre_al" class="control-label">Nombre: 
            <h3><?php echo mayusculas1($nombre_al)?></h3>
        </label>    
    </div>

    <div class="form-group has-warning col-md-3">
        <label for="apellido_al" class="control-label">Apellido: 
            <h3><?php echo mayusculas($apellido_al)?></h3>
        </label>
    </div>

    <div class="form-group has-error col-md-3">
        <label for="fecha_nac" class="control-label"><small>Fecha de Nacimiento: </small>
            <h3><?php echo dateformat($fecha_nac)?></h3>
        </label>
    </div>

    <div class="form-group has-error col-md-3">
        <label for="nombre_re" class="control-label"><small>Nombre de Representante: </small>
            <h3><?php echo mayusculas($nombre_re)?></h3>
        </label>
    </div>
    
    <div class="form-group has-success col-md-3">
        <label for="sexo" class="control-label">Sexo: 
            <h3><?php echo $sexo?></h3>
        </label>
    </div>

    <div class="form-group has-success col-md-3">
        <label for="estados_id" class="control-label">Lugar de Nacimiento: 
            <h4><?php echo "Estado ".mayusculas1($estado)?></h4>
            <h4><?php echo "Municipio ".mayusculas1($municipio)?></h4>
        </label>
    </div>

    </div>

	<div class="form-group">
        <div class="col-md-4 col-md-offset-4">
            <a class="btn btn-primary btn-block" href="<?php echo base_url('alumnos/Alumnos')?>">Principal</a>
        </div>
    </div>
	
</div>



