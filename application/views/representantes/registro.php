

<link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css') ?>">

<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

<div class="container text-center">
<h2>Representantes:</h2>
<div class="container">

    <form class="form-horizontal" action="<?php echo base_url($action) ?>" method="post">

        <?php
        $cedula = '';
        $nombre_re = '';
        $apellido_re = '';
        $telefono_1 = '';
        $telefono_2 = '';
        $email = '';
        
        if(isset($id)){
            $cedula = $representantes->cedula;
            $nombre_re = $representantes->nombre_re;
            $apellido_re = $representantes->apellido_re;
            $telefono_1 = $representantes->telefono_1;
            $telefono_2 = $representantes->telefono_2;
            $email = $representantes->email;
            
            
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



    <div class="form-group">
        <div class="col-md-4 col-md-offset-4">
            <button type="submit" class="btn btn-success btn-block">Guardar</button>
            <a class="btn btn-primary btn-block" href="<?php echo base_url('representantes/Representantes')?>">Principal</a>
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

    
      
