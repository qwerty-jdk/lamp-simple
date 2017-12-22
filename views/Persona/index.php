<div class="container">
    <?php

    $personas = $data['data']['personas'];
    $sedes = $data['data']['sedes'];
    print_r($personas);

    ?>
    <form action="index.php?controller=Persona&action=save" method="post">
        <div class="form-group">
            <label for="rut">RUT</label>
            <input type="text" class="form-control" name="rut" id="rut" placeholder="xxxxxxxx-x" />
        </div>
        <div class="form-group">
            <label for="primer_nombre">Primer Nombre</label>
            <input type="text" class="form-control" name="primer_nombre" id="primer_nombre" placeholder="Primer Nombre" />
        </div>
        <div class="form-group">
            <label for="segundo_nombre">Segundo Nombre</label>
            <input type="text" class="form-control" name="segundo_nombre" id="segundo_nombre" placeholder="Segundo Nombre" />
        </div>
        <div class="form-group">
            <label for="primer_apellido">Primer Apellido</label>
            <input type="text" class="form-control" name="primer_apellido" id="primer_apellido" placeholder="Primer Apellido" />
        </div>
        <div class="form-group">
            <label for="segundo_apellido">Segundo Apellido</label>
            <input type="text" class="form-control" name="segundo_apellido" id="segundo_apellido" placeholder="Segundo Apellido" />
        </div>
        <div class="form-group">
            <label for="sexo">Sexo</label>
            <input type="radio" class="form-control" name="sexo" id="sexo" value="M"/> Masculino
            <input type="radio" class="form-control" name="sexo" id="sexo" value="F"/> Femenino
        </div>
        <div class="form-group">
            <label for="fecha_nacimiento">Fecha de Nacimineto</label>
            <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" />
        </div>
        <div class="form-group">
            <label for="sede">Sede</label>
            <select class="form-control" name="sede" id="sede" placeholder="Sede" />
            <?php for($i = 0; $i < count($sedes); $i++){
                echo '<option value='.$sedes[$i]['CODIGO'].'>'.$sedes[$i]['NOMBRE'].'</option>';
            } ?>
            </select>
        </div>
        <button type="submit" class="btn btn-default">Guardar</button>
    </form>
</div>