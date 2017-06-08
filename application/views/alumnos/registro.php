
<link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css') ?>">
<div class="container text-center">
<h2>Alumno:</h2>
<div class="container">

    <form class="form-horizontal" action="<?php echo base_url($action) ?>" method="post">
        <?php
        $nombre_al = '';
        $apellido_al = '';
        $fecha_nac = '';
        $sexo = '';
        $padres = '';
        $lugar_nacimiento = '';
        $estados_id = '';
        $estado = '';
        $municipios_id = '';
        $municipio = '';
        if(isset($id)){
            $nombre_al = $alumnos->nombre_al;
            $apellido_al = $alumnos->apellido_al;
            $fecha_nac = $alumnos->fecha_nac;
            $sexo = $alumnos->sexo;
            $padres = $alumnos->padres;
            $estados_id = $alumnos->estados_id;
            $estado = $alumnos->estado;
            $municipios_id = $alumnos->municipios_id;
            $municipio = $alumnos->municipio;
            ?>
            <input type="hidden" name="id" value="<?php echo $id?>">
            <?php
        }
        ?>

    <div class="form-group has-success">
        <label for="nombre_al" class="control-label col-md-4">Nombre: </label>
            <div class="col-md-4">
                <input type="text" class="form-control" id="nombre_al" name="nombre_al" value="<?php echo $nombre_al?>" placeholder="">
            </div>
    </div>

    <div class="form-group has-warning">
        <label for="apellido_al" class="control-label col-md-4">Apellido: </label>
            <div class="col-md-4">
                <input type="text" class="form-control" id="apellido_al" name="apellido_al" value="<?php echo $apellido_al?>" placeholder="">
            </div>
    </div>

    <div class="form-group has-error">
        <label for="fecha_nac" class="control-label col-md-4"><small>Fecha de Nacimiento: </small></label>
            <div class="col-md-4">
                <input type="text" class="form-control" id="fecha_nac" name="fecha_nac" value="<?php echo $fecha_nac?>" placeholder="">
            </div>
    </div>
    
    <div class="form-group has-success">
        <label for="sexo" class="control-label col-md-4">Sexo: </label>
            <div class="col-md-4">
                <select name="sexo" id="sexo" class="form-control">
                    <option value="0"><?php echo $sexo?></option>
                    <option value="femenino">femenino</option>
                    <option value="masculino">masculino</option>
                </select>
            </div>
    </div>

    <div class="form-group has-success">
        <label for="padres" class="control-label col-md-4">Padres: </label>
            <div class="col-md-4">
                 <input type="text" class="form-control" id="padres" name="padres" value="<?php echo $padres?>" placeholder="">
            </div>
    </div>


    <div class="form-group has-success">
        <label for="estados_id" class="control-label col-md-4">Estado: </label>
        <div class="col-md-4">
            <select name="estados_id" id="estados_id" class="form-control">
                    <option class="text-primary bg-success" value="<?php echo $estados_id?>">Selecciona: <?php echo $estado?></option>
                        <option class="bg-danger text-center text-danger" value="">Seleccionar Nuevo Estado:</option>
                    <?php
                    foreach ($estados as $estado) {
                        ?>
                        <option class="bg-warning" value="<?php echo $estado->id; ?>"><?php echo $estado->estado ?></option>
                        <?php
                        }
                    ?>
            </select>
        </div>
    </div>

    <div class="form-group has-success">
        <label for="municipios_id" class="control-label col-md-4">Municipio: </label>
            <div class="col-md-4">
                <select name="municipios_id" id="municipios_id" class="form-control">
                <option class="text-primary bg-success" value="<?php echo $municipios_id?>">Selecciona: <?php echo $municipio?></option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-4 col-md-offset-4">
            <button type="submit" class="btn btn-success btn-block">Guardar</button>
            <a class="btn btn-primary btn-block" href="<?php echo base_url('alumnos/Alumnos')?>">Principal</a>
        </div>
    </div>

    </form>
    
    <?php
    if(isset($error)){
        ?>
        <p>Hubo un error</p>
        <?php

       }
    ?>

</div>



