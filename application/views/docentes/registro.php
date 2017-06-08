

<link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css') ?>">

<div class="container text-center">
<h2>Docente:</h2>
<div class="container">

    <form class="form-horizontal" action="<?php echo base_url($action) ?>" method="post">

        <?php
        $cedula = '';
        $nombre_re = '';
        $apellido_re = '';
        $telefono_1 = '';
        $telefono_2 = '';
        $email = '';
        $estatus = '';
        $estados_id = '';
        $estado = '';
        $municipios_id = '';
        $municipio = '';
        $parroquias_id = '';
        $parroquia = '';
        $direccion = '';
        
        if(isset($id)){
            $cedula = $docentes->cedula;
            $nombre_re = $docentes->nombre_re;
            $apellido_re = $docentes->apellido_re;
            $telefono_1 = $docentes->telefono_1;
            $telefono_2 = $docentes->telefono_2;
            $email = $docentes->email;
            $estatus = $docentes->estatus;
            $estados_id = $docentes->estados_id;
            $estado = $docentes->estado;
            $municipios_id = $docentes->municipios_id;
            $municipio = $docentes->municipio;
            $parroquias_id = $docentes->parroquias_id;
            $parroquia = $docentes->parroquia;
            $direccion = $docentes->direccion;
            
            
            ?>
            <input type="hidden" name="id" value="<?php echo $id?>">
            <?php
        }
        ?>

    <div class="form-group has-success">
        <label for="cedula" class="control-label col-md-4">Cedula: </label>
        <div class="col-md-4">
        <input type="text" class="form-control" id="cedula" name="cedula" value="<?php echo $cedula?>" placeholder="">
        </div>
    </div>

    <div class="form-group has-warning">
        <label for="nombre_re" class="control-label col-md-4">Nombre: </label>
    <div class="col-md-4">
        <input type="text" class="form-control" id="nombre_re" name="nombre_re" value="<?php echo $nombre_re?>" placeholder="">
        </div>
    </div>

    <div class="form-group has-error">
        <label for="apellido_re" class="control-label col-md-4">Apellido: </label>
        <div class="col-md-4">
        <input type="text" class="form-control" id="apellido_re" name="apellido_re" value="<?php echo $apellido_re?>" placeholder="">
        </div>
    </div>

    <div class="form-group has-warning">
        <label for="telefono_1" class="control-label col-md-4">Tlf. Celular: </label>
        <div class="col-md-4">        
        <input type="text" class="form-control" id="telefono_1" name="telefono_1" value="<?php echo $telefono_1?>" placeholder="">
        </div>
    </div>

    <div class="form-group has-error">
        <label for="telefono_2" class="control-label col-md-4">Tlf. Local: </label>
        <div class="col-md-4">        
        <input type="text" class="form-control" id="telefono_2" name="telefono_2" value="<?php echo $telefono_2?>" placeholder="">
        </div>
    </div>

    <div class="form-group has-success">
        <label for="email" class="control-label col-md-4">Correo: </label>
        <div class="col-md-4">        
        <input type="text" class="form-control" id="email" name="email" value="<?php echo $email?>" placeholder="">
        </div>
    </div>

    <div class="form-group has-success">
        <label for="estatus" class="control-label col-md-4">Estatus: </label>
            <div class="col-md-4">
                <select name="estatus" id="estatus" class="form-control">
                <option value="<?php echo $estatus?>"><?php echo $estatus?></option>
                <option value="representante">Representante</option>
                <option value="docente">Docente</option>
            </select>
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

    <div class="form-group has-success">
        <label for="parroquias_id" class="control-label col-md-4">Parroquia: </label>
            <div class="col-md-4">
                <select name="parroquias_id" id="parroquias_id" class="form-control">
                <option value="<?php echo $parroquias_id?>">Selecciona: <?php echo $parroquia?></option>
            </select>
        </div>
    </div>

    <div class="form-group has-warning">
        <label for="direccion" class="control-label col-md-4">Direccion:</label>
            <div class="col-md-4">
                <textarea bg-danger rows="2" name="direccion" id="direccion" class="form-control text-left" placeholder="Escriba nombre de Calle y N° de casa:"><?php echo $direccion?>
            </textarea>
            </div>
    </div>


    <div class="form-group">
        <div class="col-md-4 col-md-offset-4">
            <button type="submit" class="btn btn-success btn-block">Guardar</button>
            <a class="btn btn-primary btn-block" href="<?php echo base_url('docentes/Docentes')?>">Principal</a>
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

    
      
