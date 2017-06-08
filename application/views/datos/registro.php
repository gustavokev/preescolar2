

<link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css') ?>">

<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

<div class="container text-center">
<h2>Datos:</h2>
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
            $cedula = $datos->cedula;
            $nombre_re = $datos->nombre_re;
            $apellido_re = $datos->apellido_re;
            $telefono_1 = $datos->telefono_1;
            $telefono_2 = $datos->telefono_2;
            $email = $datos->email;
            
            
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
            <a class="btn btn-primary btn-block" href="<?php echo base_url('datos/Datos')?>">Principal</a>
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


<script type="text/javascript">
$(document).ready(function()
{
    
    $("#estados").on("change", function()
    {
        
        var estadoSelected = $( "#estados option:selected").attr("value");
        
        $.get("<?php echo base_url('estado/estados/getAjaxMunicipio') ?>", {"estado":estadoSelected}, function(data)
        {
            
            var municipios = "";
            var municipio = JSON.parse(data);
            for(datos in municipio.municipios)
            {
                municipios += '<option value="'+municipio.municipios[datos].idmunicipio+'">'+
                municipio.municipios[datos].municipio+'</option>';
            }
            
            $('select#municipios').html(municipios);
            
        });
    });
 
    
    $("#municipios").on("change", function()
    {
        
        var municipioSelected = $("#municipios option:selected").attr("value"), estados = "";
        
        $.get("<?php echo base_url('estado/estados/getAjaxPostal') ?>", {"municipio":municipioSelected}, function(data)
        {
            
            
 
            
        });
    });
});


$(document).ready(function()
{

    $("#municipios").on("change", function()
    {

        var municipioSelected = $( "#municipios option:selected").attr("value");

        $.get("<?php echo base_url('estado/estados/getAjaxParroquia') ?>", {"municipio":municipioSelected}, function(data)
        {

            var parroquias = "";
            var parroquia = JSON.parse(data);
            for(datos in parroquia.parroquias)
            {
                parroquias += '<option value="'+parroquia.parroquias[datos].idparroquia+'">'+
                parroquia.parroquias[datos].parroquia+'</option>';
            }

            $('select#parroquias').html(parroquias);

        });
    });


    $("#parroquias").on("change", function()
    {

        var parroquiaSelected = $("#parroquias option:selected").attr("value"), municipios = "";

        $({"parroquia":parroquiaSelected}, function(data)
        {

        });
    });
});

</script>
    
      
