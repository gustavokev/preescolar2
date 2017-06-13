
<link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css') ?>">

<div class="container text-center bg-success">
<h2 class="text-danger">Alumno:</h2>
<div class="container">

    <form class="form-horizontal" action="<?php echo base_url($action) ?>" method="post">
        <?php
        $nombre_al = '';
        $apellido_al = '';
        $fecha_nac = '';
        $sexo = '';
        $estado = '';
        $estados_id = '';
        $municipios_id = '';
        $municipio = '';
        if(isset($id)){
            $nombre_al = $alumnos->nombre_al;
            $apellido_al = $alumnos->apellido_al;
            $fecha_nac = $alumnos->fecha_nac;
            $sexo = $alumnos->sexo;
            $estados_id = $alumnos->estados_id;
            $estado = $alumnos->estado;
            $municipios_id = $alumnos->municipios_id;
            $municipio = $alumnos->municipio;
            ?>
            <input type="hidden" name="id" value="<?php echo $id?>">
            <?php
        }
        ?>


    <div class="row">

    <div class="col-md-3 col-md-offset-2">
        <label for="nombre_al" class="control-label text-info">Nombre: </label>
            <div class="form-group has-success">
                <em><input type="text" class="form-control" id="nombre_al" name="nombre_al" value="<?php echo $nombre_al?>" placeholder="Cedula:"></em>
            </div>

        <label for="nombre_al" class="control-label text-info">Apellido: </label>
            <div class="form-group has-success">
                <em><input type="text" class="form-control" id="apellido_al" name="apellido_al" value="<?php echo $apellido_al?>" placeholder="Apellido"></em>
            </div>

        <label for="fecha_nac" class="control-label text-info">Fecha de Nacimiento: </label>
            <div class="form-group has-success">
                <em><input type="text" class="form-control" id="fecha_nac" name="fecha_nac" value="<?php echo $fecha_nac?>" placeholder="Teléfono Local:"></em>
            </div>
            </div>

            <div class="col-md-3 col-md-offset-2">
    
        <label for="sexo" class="control-label text-info">Sexo: </label>
            <div class="form-group has-success">
                <em><select name="sexo" id="sexo" class="form-control">
                    <option value="0">Selecionar: <?php echo $sexo?></option>
                    <option value="f">femenino</option>
                    <option value="m">masculino</option>
                </select></em>
            </div>

        <label for="estados_id" class="control-label text-info"><small>Lugar de Nacimiento: </small></label>
        <div class="form-group has-success">
            <em><select name="estados_id" id="estados_id" class="form-control">
                    <option class="text-primary bg-success" value="<?php echo $estados_id?>">Selecciona: <?php echo $estado?></option>
                        <option class="bg-danger text-center text-danger" value="">Seleccionar Nuevo Estado:</option>
                    <?php
                    foreach ($estados as $estado) {
                        ?>
                        <option class="bg-warning" value="<?php echo $estado->id; ?>"><?php echo $estado->estado ?></option>
                        <?php
                        }
                    ?>
            </select></em>
             </div>

             <label for="estados_id" class="control-label text-info"></label>
        <div class="form-group has-success">
            <em><select name="municipios_id" id="municipios_id" class="form-control">
                <option class="text-primary bg-success" value="<?php echo $municipios_id?>">Selecciona: <?php echo $municipio?></option>
                </select></em>
            </div>
        </div>

    <div class="form-group">
        <div class="col-md-4 col-md-offset-4">
            <button type="submit" class="btn btn-success btn-block">Guardar</button>
            <a class="btn btn-primary btn-block" href="<?php echo base_url('alumnos/Alumnos')?>">Volver</a>
        </div>
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
</div>



